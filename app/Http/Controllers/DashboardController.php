<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Transaction;

class DashboardController extends Controller
{
    //


    public function schedule()
    {

        $data = Transaction::where('user_id', auth()->user()->id)
            ->where('date', date("Y-m-d"))
            ->orderBy('start_time', 'ASC')
            ->get();

        return view('dashboard.schedule', [
            'title' => 'My Schedule',
            'data' => $data
        ]);
    }

    public function history()
    {

        $data = Transaction::where('user_id', auth()->user()->id)
            ->where('date', '<', date("Y-m-d"))
            ->orderBy('date', 'DESC')
            ->get();

        return view('dashboard.history', [
            'title' => 'History',
            'data' => $data
        ]);
    }
}