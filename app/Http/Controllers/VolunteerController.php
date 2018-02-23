<?php

namespace App\Http\Controllers;

use App\Volunteer;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class VolunteerController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        if ($request->cookie('secretAccess') != "secretCookieName")
            return redirect('/vrijwilliger/validate');

        return view('vrijwilliger.registreer');
    }

    public function showPasswordField(Request $request) {
        return view('password');
    }

    public function verifyPassword(Request $request) {
        // cookie voor 60min
        if ($request->password == "R3gistratie2018") {

            $cookie = cookie('secretAccess', 'secretCookieName', 60);
            return redirect('/vrijwilliger/registreer')->cookie($cookie);
        } else {
            return redirect('/vrijwilliger/validate');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->cookie('secretAccess') != "secretCookieName")
            return redirect('/vrijwilliger/validate');

        $request->validate([
            'organisator' => 'required|max:255',
            'naam' => 'required|max:255',
            'voornaam' => 'required|max:255',
            'straat' => 'required|max:555',
            'postcode' => 'required|max:6',
            'gemeente' => 'required|max:255',
            'g-recaptcha-response' => 'required|captcha',
            'terms1' => 'required',
            'terms2' => 'required',
            'terms3' => 'required'
        ]);

        $volunteer = new Volunteer();
        $volunteer->organisator = $request->organisator;
        $volunteer->naam = $request->naam;
        $volunteer->voornaam = $request->voornaam;
        $volunteer->straat = $request->straat;
        $volunteer->postcode = $request->postcode;
        $volunteer->gemeente = $request->gemeente;
        $volunteer->email = $request->email;
        $volunteer->telefoon = $request->telefoon;
        $volunteer->terms_accepted = 1;
        $volunteer->save();

        return redirect()->back()->with('success', 'true');
    }

    public function export() {

        Excel::create('TEDx Mechelen', function($excel) {
            $excel->sheet('Vrijwilligers', function($sheet) {
                $volunteers = Volunteer::all();
                $sheet->fromArray($volunteers);
            });

        })->download('csv');
    }
}
