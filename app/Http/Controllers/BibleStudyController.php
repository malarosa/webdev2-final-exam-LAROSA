<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BibleStudy;

class BibleStudyController extends Controller
{
    public function form(Request $request) {
        $bible_study = new BibleStudy();
        return view('form', compact('bible_study'));

    }

    public function createform(Request $request) {
        $bible_study = new BibleStudy();
        $bible_study->name = $request->name;
        $bible_study->email_address = $request->email_address;
        $bible_study->contact_number = $request->contact_number;
        $bible_study->birthdate = $request->birthdate;
        $bible_study->religious_affliation = $request->religious_affliation;
        $bible_study->bible_study_date = $request->bible_study_date;
        $bible_study->bible_study_time = $request->bible_study_time;
        $bible_study->bible_study_location = $request->bible_study_location;
        if($bible_study->save()) {
            return redirect ('/thank-you');
        }
        return redirect ('/thank-you');
    }


    public function table(Request $request) {
        $bible_study =  BibleStudy::all();
        return view('table', compact('bible_study'));

    }

    public function thankyou(Request $request) {
        return view('thank-you');

    }
}
