<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller {
    /**
     * Display a listing of the resource.
     */
    public function view_page($any, $id) {   // $any is nothing but the variable to allow app use the any routing
        // $user = User::where("remember_token","=",$id)->get();
        // $data = compact("user");
        // return view()->with($data); // TODO: uncomment this line


        // for development purpose
        $profileStatus = 1;
        return view('profiles')->with(compact("profileStatus"));
    }
    
    public function view_settings($any, $id) {   // $any is nothing but the variable to allow app use the any routing
        // $user = User::where("remember_token","=",$id)->get();
        // $data = compact("user");
        // return view()->with($data); // TODO: uncomment this line
        
        // for development purpose
        return view('settings');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id) {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id) {
        //
    }
}
