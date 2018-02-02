<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\TEDxMechelen\Speakers;

Class EventController extends Controller {
    public function schedule() {
        return view('event.schedule');
    }

    public function speakers(Speakers $speakersClass) {

        $speakers = $speakersClass->getSpeakers();

        return view('event.speakers', compact('speakers'));
    }

    public function speaker(Speakers $speakersClass, $name) {

	    $speakers = $speakersClass->getSpeakers();

        if ( $name == "bram" || $name == "bramvanderborght" )
        {
            $information_speaker = $speakers["bram"];
            $title_speaker = $information_speaker["name"];
            $other_speakers = $speakers;
            unset($other_speakers["bram"]);
        }
        elseif ( $name == "geert" || $name == "geertvanwonterghem" )
        {
            $information_speaker = $speakers["geert"];
            $title_speaker = $information_speaker["name"];
            $other_speakers = $speakers;
            unset($other_speakers["geert"]);
        }
        elseif ( $name == "lidewij" || $name == "lidewijnuitten" )
        {
            $information_speaker = $speakers["lidewij"];
            $title_speaker = $information_speaker["name"];
            $other_speakers = $speakers;
            unset($other_speakers["lidewij"]);
        }
        elseif ( $name == "nilesh" || $name == "nileshmahdu" )
        {
            $information_speaker = $speakers["nilesh"];
            $title_speaker = $information_speaker["name"];
            $other_speakers = $speakers;
            unset($other_speakers["nilesh"]);
        }
        elseif ( $name == "rik" || $name == "rikvera" )
        {
            $information_speaker = $speakers["rik"];
            $title_speaker = $information_speaker["name"];
            $other_speakers = $speakers;
            unset($other_speakers["rik"]);
        }
        elseif ( $name == "nico" || $name == "nicohuybrechts" )
        {
            $information_speaker = $speakers["nico"];
            $title_speaker = $information_speaker["name"];
            $other_speakers = $speakers;
            unset($other_speakers["nico"]);
        }
        else
        {
            $title_speaker = $name;
        }

        return view('event.speaker', compact('title_speaker', 'speakers', 'information_speaker', 'other_speakers'));
    }

    public function revolution() {
        return view('event.revolution');
    }
}