<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Test;
use App\Models\Item;
use App\Models\Answer;

class ItemsController extends Controller
{
    public function index($id)
    {
        $test = Test::find($id);
        $items = Item::where('test_id',(int)$id)->orderBy('id', 'ASC')->get();

        return view('test-items', [
            'test' => $test,
            'items' => $items,
        ]);
    }

    public function add_item($id)
    {
        $test = Test::find($id);

        $test->update([
            'count' => $test->count + 1,
        ]);

        $item = Item::create([
            'test_id' => (int)$id,
            'count' => 1,
        ]);

        return response()->json([
            'status' => 200,
            'message' => "new item added",
        ]);
    }

    public function remove_item($id)
    {
        $test = Test::find($id);
        $item = Item::where('test_id',(int)$id)->orderBy('id', 'DESC')->get()->first();
        
        if($item) {
            $item->delete();
            $test->update([
                'count' => $test->count - 1,
            ]);
        }

        return response()->json([
            'status' => 200,
            'message' => "item removed",
        ]);
    }

    public function fetch($id)
    {   
        $test = Test::find($id);
        $items = Item::where('test_id',(int)$id)->orderBy('id', 'ASC')->get();
        $html = view('test-items-table', compact(['test','items']))->render();
        return response()->json(compact('html'));
    }

    public function save(Request $request, $test_id, $id)
    {
        $item = Item::find($id);
         
        $request->validate([
            'item_title'         => 'string|min:2',
            'item_description'   => 'string|min:2',
        ]);

        $item->update([ 
            'title'         => $request->input('item_title'),
            'description'   => $request->input('item_description'),
            'type'          => $request->input('select'),
        ]);

        $answers = $item->answers()->orderBy('id','ASC')->get();

        $iterator = 0;
        
        foreach($answers as $answer) {
            if ($item->type == 0) {
                //dd([(int)$request->input('radio'),$answer->id, (int)$request->input('radio') == $answer->id]);
                $answer->update([
                    'description'   => $request->input('description')[$iterator],
                    'type'          => (int)$request->input('radio') == $answer->id ? 1 : 0,
                ]); $iterator++;
            } 
            
            else if ($item->type == 1) {

                if(!$request->input('checkbox')) {
                    $answer->update([
                        'description'   => $request->input('description')[$iterator],
                        'type'          => 0,
                    ]); $iterator++; continue;
                }

                $answer->update([
                    'description'   => $request->input('description')[$iterator],
                    'type'          => in_array((string)$answer->id, $request->input('checkbox')) ? 1 : 0,
                ]); $iterator++;
            } 
            
            else {
                $answer->update([
                    'description'   => $request->input('description')[$iterator],
                    'type'          => 1,
                ]); $iterator++;
            }
        }
        /*
        $test = Test::find($test_id);

        $test->update([
            'count' => $test->count,
        ]);
        */
        return redirect()->back();
    }
}
