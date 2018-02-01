<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

Class PageController extends Controller {
    public function index() {
        return view('index');
    }
    public function partners() {
        return view('partners');
    }
    public function contact() {
        return view('contact');
    }
}