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
            'primary' => Subject::where('level_id', 1)->get(),
            'junior'=> Subject::where('level_id', 2)->get(),
            'senior' => Subject::where('level_id', 3)->get()
        ]);
    }

    public function tutor(Request $request){

        $request->validate([
            'subject_id' => ['required'],
            'start_time' => ['required']
        ]);

        date_default_timezone_set('Asia/Jakarta');

        $expertise = Subject::where('id', $request->subject_id)->get();

        return view('book.tutor', [
            'title' => 'Available Tutors',
            'tutors' => Tutor::where('subject_id', $request->subject_id)
                                ->vacant(date("Y-m-d"), $request->start_time)
                                ->orderBy('rating', 'DESC')
                                ->get(),
            'expertise' => $expertise[0],
            'date' => date("Y-m-d"),
            'start_time' => $request->start_time,
        ]);
    }

    public function checkout(Tutor $tutor, Field $field, EduLvl $edulvl, $date, $start_time){
        return view('book.checkout', [
            'title' => 'Checkout',
            'tutor' => $tutor,
            'field' => $field,
            'edulvl' => $edulvl,
            'date' => $date,
            'start_time' => $start_time
        ]);
    }

}