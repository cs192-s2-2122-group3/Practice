<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use Carbon\Carbon;

use App\Models\Attempt;
use App\Models\Result;
use App\Models\User;
use App\Models\Test;
use PDF;

class AttemptsController extends Controller
{
    public function index()
    {
        $attempts = auth()->user()->attempts()->paginate(10);
        
        return view('attempt-manager', [
            'attempts' => $attempts,
        ]);
    }

    public function evaluate(Request $request, $id)
    {
        $score = 0;

        $test = Test::find($id);
        $items = $test->items;

        $attempt = Attempt::create([
            'user_id'   => Auth::id(),
            'test_id'   => (int)$id,
            'score'     => 0,
        ]);

        foreach($items as $item) {

            // Multiple Choice
            if ($item->type == 0) 
                $score = $score + $this->m_choice($attempt, $item, $request->input((string)$item->id));

            // Multiple Answers
            if ($item->type == 1)
                $score = $score + $this->m_answer($attempt, $item, $request->input((string)$item->id));

            // Identification
            if ($item->type == 2)
                $score = $score + $this->identification($attempt, $item, $request->input((string)$item->id));
        }

        $attempt->update([
            'score' => $score,
        ]);

        return redirect('/test/'.$test->id.'/attempt/'.$attempt->id);
    }

    public function show($test_id, $id)
    {
        $test       = Test::find($test_id);
        $attempt    = Attempt::find($id);
        $items      = $test->items()->orderBy('id', 'ASC')->get();
        $results    = $attempt->results()->orderBy('item_id', 'ASC')->get();
        
        return view('test-results', [
            'test'      => $test,
            'attempt'   => $attempt,
            'items'     => $items,
            'results'   => $results,
        ]);
    }

    public function pdf($test_id, $id)
    {
        $test = Test::find($test_id);
        $attempt = Attempt::find($id);
        
        $data = [
            'test'      => $test,
            'attempt'   => $attempt,
            'items'     => $test->items()->orderBy('id', 'ASC')->get(),
            'results'   => $attempt->results()->orderBy('item_id', 'ASC')->get(),
        ];

        $pdf = PDF::loadView('test-results-pdf', $data);

        return $pdf->download($test->title.'-attempt'.$attempt->id.'.pdf');
    }

    private function m_choice($attempt, $item, $input)
    {
        $score = 0;

        foreach($item->answers as $answer) {
            if ($answer->id == $input) {
                if ($answer->type == 1) $score++;
            }
        }
        
        $result = Result::create([
            'attempt_id'    => $attempt->id,
            'item_id'       => $item->id,
            'answer_ids'    => $input ? json_encode(array($input)):json_encode($input),
            'score'         => $score,
        ]);

        return $score;
    }

    private function m_answer($attempt, $item, $input)
    {
        $score = 1;
                
        foreach($item->answers as $answer) {
            if ($answer->type == 1) {
                if(!$input) { $score = 0; break; }
                if (in_array($answer->id, $input)) continue;
                else { $score = 0; break; }
            }

            else {
                if(!$input) continue;
                if (in_array($answer->id, $input)) { $score = 0; break; }
                else continue;
            }
        }

        $result = Result::create([
            'attempt_id'    => $attempt->id,
            'item_id'       => $item->id,
            'answer_ids'    => json_encode($input),
            'score'         => $score,
        ]);

        return $score;
    }

    private function identification($attempt, $item, $input)
    {
        $score = 0;

        $array = array();
                
        foreach($item->answers as $answer) {
            array_push($array,$answer->description);
        }

        $value = str_replace(array("<p>", "</p>", "<br>"), "", $input);
        if(in_array($value,$array)) $score++;

        //dd($input,$value,$array);
        
        $result = Result::create([
            'attempt_id'    => $attempt->id,
            'item_id'       => $item->id,
            'answer_ids'    => json_encode(array($value)),
            'score'         => $score,
        ]);

        return $score;
    }
}
