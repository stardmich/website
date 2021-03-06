<?php

namespace App\Http\Controllers;

use App\Meetup;
use App\Talk;

class TalksController extends Controller {

    /**
     * Returns a list of talks past and present.
     *
     * @param Meetup $meetup
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(Meetup $meetup)
    {
        $seo_title = "All talks given at the meetup";

        $meetups = Talk::organisedByMeetup();

        return view('talks', compact('meetups', 'seo_title'));
    }
}
