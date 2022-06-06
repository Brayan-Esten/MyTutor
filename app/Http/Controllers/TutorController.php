<?php

namespace App\Http\Controllers;



use App\Models\Tutor;
use Illuminate\Http\Request;

class TutorController extends Controller
{
    public function index()
    {
        return view('book', [
            'title' => 'Book-a-Tutor',
            'data' => Tutor::all()
        ]);
    }

    public function detail(Tutor $tutor)
    {
        return view('detail', [
            'title' => 'Book-a-Tutor',
            'data' => $tutor
        ]);
    }
}
