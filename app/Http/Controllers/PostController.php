<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
//        dd($request->all());
//        $age = $request->input('age', 20);
//        $age = $request->query('age', 20);
//        $data = $request->only(['name', 'age']);
//        dd($data);
//        dd('Hello from index function inside post controller');
//        return response()->json([
//            'name' => 'Zeina Zayed',
//        ]);
//        return view('welcome');
//        abort(404);
//        return redirect()->route('print-my-name-route');
//        return redirect('https://google.com');
//        return redirect()->away('https://google.com');
        return redirect()->action([UserController::class, 'index']);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        dd('Hello from create function inside post controller');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
