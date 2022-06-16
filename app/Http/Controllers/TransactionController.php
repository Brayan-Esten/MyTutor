<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EduLvl;
use App\Models\Field;
use App\Models\Subject;
use App\Models\Tutor;

class TransactionController extends Controller
{
    //
    public function index(){
        return view('book.index', [
            'title' => 'Book-a-Tutor',
            'primary' => Subject::where('level_id', '1')->get(),
            'junior'=> Subject::where('level_id', 2)->get(),
            'senior' => Subject::where('level_id', 3)->get()
        ]);
    }

    public function tutor(Request $request){

        $request->validate([
            'subject_id' => ['required'],
            'start_time' => ['required']
        ]);

        return view('book.tutor', [
            'title' => 'Available Tutors',
            'tutors' => Tutor::where('subject_id', $request->subject_id)
                                ->vacant($request->start_time, date("Y-m-d"))
                                ->get()
        ]);
    }


}