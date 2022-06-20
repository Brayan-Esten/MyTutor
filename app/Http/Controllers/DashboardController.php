<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Transaction;
use App\Models\User;

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
            ->where('date', '<=', date("Y-m-d"))
            ->orderBy('date', 'DESC')
            ->orderBy('end_time', 'DESC')
            ->get();

        return view('dashboard.history', [
            'title' => 'History',
            'data' => $data
        ]);
    }

    public function addFund(){
        User::where('id', auth()->user()->id)
            ->update([
                'fund' => auth()->user()->fund + 500
            ]);

        return back()->with('success_funding', 'IDR 500K added successfully to your account');
    }
}
