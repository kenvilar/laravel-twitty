<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Twitter;
use File;

class TwitterController extends Controller
{
    public function userTimeline()
    {
        $tweets = Twitter::getUserTimeline([
            'count' => '10',
        ]);

        return view('twitter')->with(['tweets' => $tweets]);
    }

    public function tweet(Request $request)
    {
        $this->validate($request, [
            'tweet' => 'required'
        ]);

        $tweet = [
            'status' => $request->input('tweet'),
        ];

        if (!empty($request->file('upload-image'))) {
            foreach ($request->file('upload-image') as $key => $val) {
                $uploaded_media = Twitter::uploadMedia([
                    ['media' => File::get($val->getRealPath())]
                ]);

                if (! $uploaded_media) {
                    $tweet['media_ids'][$uploaded_media->media_id_string] = $uploaded_media->media_id_string;
                }
            }
        }

        Twitter::postTweet($tweet);

        return redirect('/');
    }
}
