<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use Carbon\Carbon;

use App\Models\Course;
use App\Models\User;
use App\Models\Test;

class TestsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tests = Test::paginate(10);
        
        return view('test-manager', [
            'tests' => $tests,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$courses = Course::with('handlers')->paginate(10);
        $courses = auth()->user()->handling()->paginate(10);

        return view('test-create', [
            'courses' => $courses,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'         => 'string|min:2',
            'description'   => 'string|min:2',
        ]);

        $test = Test::create([
            'title'         => $request->input('title'),
            'description'   => $request->input('description'),
            'user_id'       => auth()->user()->id,
            'course_id'     => (int) $request->input('course'),
            'state'         => $request->has('publish') ? 1 : 0,
        ]);

        return redirect('/test');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $test = Test::find($id);
        $author = User::find($test->user_id);
        $courses = $author->id == auth()->user()->id ? $author->handling()->paginate(10):$test->course()->paginate(10);
        $enabled = $author->id == auth()->user()->id ? "":"disabled";
        
        return view('/test-edit', [
            'test'      => $test,
            'courses'   => $courses,
            'enabled'   => $enabled,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $test = Test::find($id);

        $request->validate([
            'title'         => 'string|min:2',
            'description'   => 'string|min:2',
        ]);

        $test->update(array_filter($request->all()));
        $test->update([
            'course_id' => (int) $request->input('course'),
            'state'     => $request->has('publish') ? 1 : 0,
         ]);

        return redirect('/test');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $test = Test::find($id);
        $test->delete();
        
        return redirect()->back();
    }
}
