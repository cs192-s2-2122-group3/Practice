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

class CoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::with('handlers')->paginate(10);

        // dd($users);
        return view('course-manager', [
            'courses' => $courses,
        ]);
    }

    public function fetch_courses(Request $request)
    {
        if($request->ajax()) {
            $courses = Course::paginate(10);
            $html = view('course-table', compact(['courses']))->render();
            return $html;
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        // Page refreshed
        $pageWasRefreshed = isset($_SERVER['HTTP_CACHE_CONTROL']) && $_SERVER['HTTP_CACHE_CONTROL'] === 'max-age=0';

        if(!Str::contains(url()->previous(),'/course/create') || $pageWasRefreshed) {
            if(session()->has('added_users')) session()->pull('added_users');
        }

        $page = $this->check_page();

        $faculties = User::where('role','faculty')
                            ->orWhere('role','admin')
                            ->paginate(10, ['*'], 'faculty_page');

        $students = User::where('role','student')
                            ->paginate(10, ['*'], 'student_page');

        return view('course-create', [
            'faculties' => $faculties,
            'students'  => $students,
            'page'      => $page,
        ]);
    }

    public function fetch_create(Request $request)
    {
        if($request->ajax()) {
            $page = $this->check_page();

            $faculties = User::where('role','faculty')
                                ->orWhere('role','admin')
                                ->paginate(10, ['*'], 'faculty_page');

            $students = User::where('role','student')
                                ->paginate(10, ['*'], 'student_page');

            return view('course-create-table', [
                'faculties' => $faculties,
                'students'  => $students,
                'page'      => $page,
            ])->render();
        }
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
            'title'         => 'required|string|min:2',
            'description'   => 'required|string|min:2'
        ]);

        $course = Course::create([
            'title'        => $request->input('title'),
            'description'  => $request->input('description'),
        ]);
        
        foreach(session('added_users') as $user) {
            $course->users()->attach($user->id,['is_handler' => ($user->role === 'faculty' || $user->role === 'admin')]);
        }

        return redirect('/course');
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
        $course = Course::find($id);

        $page = $this->check_page();

        $faculties = User::where('role','faculty')
                            ->orWhere('role','admin')
                            ->paginate(10, ['*'], 'faculty_page');

        $students = User::where('role','student')
                            ->paginate(10, ['*'], 'student_page');
        
        return view('/course-edit', [
            'faculties' => $faculties,
            'students'  => $students,
            'course'    => $course,
            'page'      => $page,
        ]);
    }

    public function fetch_edit(Request $request, $id)
    {
        if($request->ajax()) {
            $course = Course::find($id);

            $page = $this->check_page();

            $faculties = User::where('role','faculty')
                                ->orWhere('role','admin')
                                ->paginate(10, ['*'], 'faculty_page');

            $students = User::where('role','student')
                                ->paginate(10, ['*'], 'student_page');
            
            return view('/course-edit-table', [
                'faculties' => $faculties,
                'students'  => $students,
                'course'    => $course,
                'page'      => $page,
            ])->render();
        }
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
        $course = Course::find($id);

        $request->validate([
            'title'         => 'required|string|min:2',
            'description'   => 'required|string|min:2'
        ]);

        $course->update(array_filter($request->all()));

        return redirect('/course');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $course = Course::find($id);
        $course->delete();
        
        return redirect()->back();
    }

    public function create_add_user(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $added_users = session()->get('added_users', []);

        if(!isset($added_users[$id])) {
            $added_users[$id] = $user;
        }
        
        session()->put('added_users',$added_users);
        return view('/course-create-table-list')->render();
    }

    public function create_remove_user(Request $request, $id)
    {
        $added_users = session()->get('added_users', []);
  
        if(isset($added_users[$id])) {
            unset($added_users[$id]);
        }
        
        session()->put('added_users',$added_users);
        return view('/course-create-table-list')->render();
    }

    public function edit_add_user(Request $request, $course_id, $id)
    {
        $user = User::findOrFail($id);
        $course = Course::findOrFail($course_id);
        $course->users()->attach($user->id,['is_handler' => ($user->role === 'faculty' || $user->role === 'admin')]);
        return view('/course-edit-table-list',['course'=>$course])->render();
    }

    public function edit_remove_user(Request $request, $course_id, $id)
    {
        $user = User::findOrFail($id);
        $course = Course::findOrFail($course_id);
        $course->users()->detach($user->id);
        return view('/course-edit-table-list',['course'=>$course])->render();
    }

    private function check_page() {
        if(Str::contains(url()->full(),'student_page')) return 0;
        return 1;
    }
}
