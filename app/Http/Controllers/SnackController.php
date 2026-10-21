<?php

namespace App\Http\Controllers;

use App\Models\Snack;

class SnackController extends Controller
{
    public function index()
    {
        $snacks = Snack::latest()->get();

        return view('snacks.index', compact('snacks'));
    }

    public function show($id)
    {
        $snack = Snack::findOrFail($id);

        return view('snacks.show', compact('snack'));
    }
}