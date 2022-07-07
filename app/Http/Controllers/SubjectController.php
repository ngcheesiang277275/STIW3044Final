<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subject;
use Illuminate\Support\Facades\Auth;




class SubjectController extends Controller
{

        public function mainpage()
    {
        if (Auth::check()) {
            return view('mainpage', ['subjectAdded' => Subject::all()]);
        }
        return redirect("login")->withSuccess('You do not have access');
    }
    public function insertsubject(Request $request)
    {
        echo json_encode($request->all());
        $newSubjectAdded = new Subject();
        $newSubjectAdded->subject_title = $request->title;
        $newSubjectAdded->subject_description = $request->description;
        $newSubjectAdded->subject_price = $request->price;
        $newSubjectAdded->subject_hours = $request->totallearninghour;
        $newSubjectAdded->save();
        return redirect('mainpage')->with('save', 'Success')->withErrors('error', 'Failed');
    }



}
