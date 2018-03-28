<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Twitter;
use File;

class TwitterController extends Controller
{
    public function userTimeline() {
	    $tweets = Twitter::getUserTimeline([
	    	'count' => '10',
		    'format' => 'array'
	    ]);

	    return view('twitter')->with('tweets', $tweets);
    }

    public function tweet() {

    }
}
