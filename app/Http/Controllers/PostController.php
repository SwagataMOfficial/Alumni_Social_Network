<?php

namespace App\Http\Controllers;

use App\Models\Userpost;
use Illuminate\Http\Request;

class PostController extends Controller {
    public function addpost(Request $request) {

        // TODO: multiple images key is removed but saved!
        // make a key with the images
        // FORMAT: image_1|image_2|image_3|...... 
        $createArr = $request->all();
        echo "<pre>";
        print_r($request->all());
        echo "<hr>";
        // print_r($request->file('post_image'));
        echo "</pre>";

        if (array_key_exists('_token', $createArr)) {
            // Removing the resume from the associative array as it is not necessary in case of creating new post
            unset($createArr['_token']);
        }
        if (array_key_exists('post_image', $createArr)) {
            // Removing the resume from the associative array as it is not necessary in case of creating new post, the value of this key will be the filename which is system generated
            unset($createArr['post_image']);
        }

        echo "<pre>";
        echo "createARR: ";
        print_r($createArr);
        echo "</pre>";

        $file_arr = [];
        $file_to_save_in_db = "";

        // Saving post automatically
        foreach ($request->file('post_image') as $index => $file) {

            $file_to_store = session()->get('user_id') . "/uploads/" . time() . '_' . $index . '.' . $file->getClientOriginalExtension();

            // storing individual post item
            $file->storeAs('/storage/', $file_to_store, 'public');

            array_push($file_arr, $file_to_store);
        }

        echo "<pre>";
        print_r($file_arr);
        echo "</pre>";

        $filename = implode("||", $file_arr);
        echo $filename;

        // TODO: save the filename into database and the file into the desired folder
        // Userpost::create([
        //     'posted_by' => $request->input('student_id'),
        //     'post_description' => '',
        //     'attachment' => '',
        //     'comments' => '',
        //     'visibility' => '',
        //     'post_type' => '',
        // ]);
        // return redirect(route('profile.edit'));
    }

}
