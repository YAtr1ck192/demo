<?php

namespace App\Http\Controllers;
use App\Models\Workshop;

class WorkshopController extends Controller
{
    public function index()
    {
        $workshops = Workshop::all();

        return view('workshops.index', [
            'workshops' => $workshops,
            'title' => 'Список цехов'
        ]);
    }
}
