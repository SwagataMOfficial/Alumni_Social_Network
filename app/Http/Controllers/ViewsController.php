<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewsController extends Controller {
    public function index() {
        return view("index");
    }
    public function friends() {
        return view("friends");
    }
    public function messages() {
        return view("messages");
    }
    public function notifications() {
        return view("notifications");
    }
    public function settings() {
        return view("settings");
    }
}
