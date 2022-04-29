<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Test;
use App\Models\Item;
use App\Models\Answer;

class AnswersController extends Controller
{
    public function add_answer($test_id,$id) 
    {
        $item = Item::find($id);
        
        $item->update([
            'count' => $item->count + 1,
        ]);

        $answer = Answer::create([
            'item_id' => (int)$id,
        ]);

        return response()->json([
            'status' => 200,
            'message' => "new answer added",
        ]);
    }

    public function remove_answer($test_id,$id)
    {
        $item = Item::find($id);
        $answer = Answer::where('item_id',(int)$id)->orderBy('id', 'DESC')->get()->first();
        
        if($answer) {
            $answer->delete();
            $item->update([
                'count' => $item->count - 1,
            ]);
        }

        return response()->json([
            'status' => 200,
            'message' => "answer removed",
        ]);
    }

    public function fetch($id)
    {
        $answers = Answer::where('item_id',(int)$id)->orderBy('id', 'ASC')->get();
        $html = view('test-items-table', compact('answers'))->render();
        return response()->json(compact('html'));
    }
}
