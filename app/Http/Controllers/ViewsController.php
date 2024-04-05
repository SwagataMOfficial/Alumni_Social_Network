<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewsController extends Controller {
    public function index() {
        return view("index");
    }
    public function friends() {
        $s_peoples = [
            [
                "name" => "Sk Md Altab",
                "passout" => "2024"
            ],
            [
                "name" => "Swagata Mukherjee",
                "passout" => "2024"
            ],
            [
                "name" => "Shobhan Sen",
                "passout" => "2024"
            ],
            [
                "name" => "Samarpita Mukherjee",
                "passout" => "2024"
            ],
            [
                "name" => "Soumik Halder",
                "passout" => "2024"
            ],
            [
                "name" => "Surajit Pal",
                "passout" => "2024"
            ],
            [
                "name" => "Sourav Paul",
                "passout" => "2024"
            ],
            [
                "name" => "Subham Dasgupta",
                "passout" => "2024"
            ],
            [
                "name" => "Soumyadip Paul",
                "passout" => "2024"
            ]
        ];

        $p_requests = [
            [
                "name" => "Sk Md Altab",
                "bio" => "Student at Techno India Hooghly"
            ],
            [
                "name" => "Soumik Halder",
                "bio" => "Student at Techno India Hooghly"
            ]
        ];
        return view("friends")->with(compact('s_peoples', 'p_requests'));
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
