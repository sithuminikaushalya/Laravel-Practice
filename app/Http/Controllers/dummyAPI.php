<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dummyAPI extends Controller
{
    public function getData()
    {
        return ["name" => "Sithumini", "email" => "example@example.com"];
    }

    public function postData()
    {

    }
}
