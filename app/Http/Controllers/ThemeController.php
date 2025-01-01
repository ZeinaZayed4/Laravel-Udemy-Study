<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContactRequest;
use Illuminate\Http\Request;

class ThemeController extends Controller
{
    public function about()
    {
        return view('theme.about');
    }

    public function services()
    {
        return view('theme.services');
    }

    public function contact()
    {
        return view('theme.contact');
    }

    public function store(StoreContactRequest $request)
    {
        $validatedData = $request->validated();
//        $validatedData = $request->validate([
//           'first_name' => 'required|string',
//           'last_name' => 'required|string',
//            'email' => 'required|email',
//            'message' => 'nullable'
//        ]);
        dd($validatedData);
    }
}
