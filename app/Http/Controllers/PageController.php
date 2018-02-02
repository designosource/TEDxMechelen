<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\TEDxMechelen\Speakers;

Class PageController extends Controller {
    public function index(Speakers $speakersClass) {
	    $speakers = $speakersClass->getSpeakers();
        return view('index', compact('speakers'));
    }
    public function partners() {
        return view('partners');
    }
    public function contact() {
        return view('contact');
    }
}