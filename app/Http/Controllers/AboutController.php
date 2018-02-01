<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

Class AboutController extends Controller {
    public function tedxandted() {
        return view('about.tedxandted');
    }


    public function team() {
        return view('about.team');
    }
}