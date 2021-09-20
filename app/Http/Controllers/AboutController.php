<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about()
    {
        $lists = [
            'Ricardo',
            'Anna',
            'Juan',
            'Pedro'
        ];

        return view('about', [
            'lists' => $lists
        ]);
    }

    public function new_message_for_about()
    {
        return view('contact');
    }
}
