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
        $notifications = [];

        // temporary code for generating notification
        for ($i = 1; $i <= 15; $i++) {
            array_push($notifications, [
                "title" => "notification-" . $i,
                "link" => "#"
            ]);
        }

        return view("notifications")->with(compact('notifications'));
    }
    public function settings() {
        return view("settings");
    }
}
