<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EduLvl;
use App\Models\Field;
use App\Models\Subject;
use App\Models\Transaction;
use App\Models\Tutor;
use App\Models\User;
use App\Models\Voucher;

use Database\Factories\TransactionFactory;

class TransactionController extends Controller
{
    //
    public function index()
    {
        return view('book.index', [
            'title' => 'Book-a-Tutor',
            'primary' => Subject::where('level_id', 1)->get(),
            'junior' => Subject::where('level_id', 2)->get(),
            'senior' => Subject::where('level_id', 3)->get()
        ]);
    }

    public function tutor(Request $request)
    {

        $request->validate([
            'subject_id' => ['required'],
            'start_time' => ['required']
        ]);

        date_default_timezone_set('Asia/Jakarta');

        $expertise = Subject::where('id', $request->subject_id)->get();
        $tutors = Tutor::where('subject_id', $request->subject_id)
            ->vacant(date("Y-m-d"), $request->start_time)
            ->orderBy('rating', 'DESC')
            ->get();

        return view('book.tutor', [
            'title' => 'Available Tutors',
            'tutors' => $tutors,
            'expertise' => $expertise[0],
            'date' => date("Y-m-d"),
            'start_time' => $request->start_time,
        ]);
    }

    public function checkout(Tutor $tutor, Field $field, EduLvl $edulvl, $date, $start_time)
    {

        $vouchers = Voucher::where('membership_id', auth()->user()->membership_id)
            ->orderBy('discount', 'ASC')
            ->get();

        return view('book.checkout', [
            'title' => 'Checkout',
            'tutor' => $tutor,
            'field' => $field,
            'edulvl' => $edulvl,
            'date' => $date,
            'start_time' => $start_time,
            'vouchers' => $vouchers
        ]);
    }

    public function receipt(Tutor $tutor, Field $field, EduLvl $edulvl, $date, $start_time, Request $request)
    {

        // validate sufficient funds
        $request->validate([
            'price' => 'lte:' . (int) auth()->user()->fund,
            'p_method' => 'required'
        ]);

        $half_time = (int) $start_time + 1;
        if ($half_time < 10) $half_time = '0' . $half_time;

        $end_time = (int) $start_time + 2;
        if ($end_time < 10) $end_time = '0' . $end_time;


        Transaction::create([
            'user_id' => auth()->user()->id,
            'tutor_id' => $tutor->id,
            'start_time' => $start_time,
            'half_time' => $half_time,
            'end_time' => $end_time,
            'date' => $date,
            'price' => $request->price,
            'zoom_link' => 'https://zoom.us/' . $this->generateRandomString()
        ]);

        User::where('id', auth()->user()->id)
            ->update([
                'fund' => auth()->user()->fund - $request->price
            ]);

        return view('book.receipt', [
            'title' => 'Receipt',
            'tutor' => $tutor,
            'field' => $field,
            'edulvl' => $edulvl,
            'date' => $date,
            'start_time' => $start_time,
            'p_method' => $request->p_method,
            'price' => $request->price,
            'discount' => $request->off
        ]);
    }

    function generateRandomString($length = 10)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
}
