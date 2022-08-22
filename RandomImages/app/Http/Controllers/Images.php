<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Images;

use Illuminate\Http\Request;

class Images extends Controller
{



    public function descending() {
        $values = ['http://127.0.0.1:8000/images/noble.jpg', 'http://127.0.0.1:8000/images/city.jpg' , 'http://127.0.0.1:8000/images/soldier.jpg', 'http://127.0.0.1:8000/images/walls.jpg'];
        sort($values);
        print_r(json_encode($values));
    }

    public function ascending() {
        $values = ['http://127.0.0.1:8000/images/noble.jpg', 'http://127.0.0.1:8000/images/city.jpg' , 'http://127.0.0.1:8000/images/soldier.jpg', 'http://127.0.0.1:8000/images/walls.jpg'];
        rsort($values);
        print_r(json_encode($values));
    }

    public function random() {
        $values = ['http://127.0.0.1:8000/images/noble.jpg', 'http://127.0.0.1:8000/images/city.jpg' , 'http://127.0.0.1:8000/images/soldier.jpg', 'http://127.0.0.1:8000/images/walls.jpg'];
        shuffle($values);
        print_r($values);
    }
}
