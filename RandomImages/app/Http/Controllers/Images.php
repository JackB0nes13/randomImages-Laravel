<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Images;

use Illuminate\Http\Request;


class Images extends Controller
{

    public $values = ['http://127.0.0.1:8000/images/noble.jpg', 'http://127.0.0.1:8000/images/city.jpg' , 'http://127.0.0.1:8000/images/soldier.jpg', 'http://127.0.0.1:8000/images/walls.jpg'];



    public function descending() {
        sort($this->values);
        print_r(json_encode($this->values));
    }

    public function ascending() {

        rsort($this->values);
        print_r(json_encode($this->values));
    }

    public function random() {
        shuffle($this->values);
        print_r(json_encode($this->values));
    }
}
