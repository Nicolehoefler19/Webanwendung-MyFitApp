<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class BookmarkController extends Controller
{
    function collectVideos(){
        $test = [
            'star-video1' => 'j64BBgBGNIU',
        ];
        $collection = collect([
            [
                'star_id' => 'star-video1',
                'video_id' => 'j64BBgBGNIU',
            ],

            [
                'star_id' => 'star-video2',
                'video_id' => 'UyTR2EjTAXU',
            ],

            [
                'star_id' => 'star-video3',
                'video_id' => '1skBf6h2ksI',
            ],

            [
                'star_id' => 'star-video4',
                'video_id' => 'gFeEUq2624Q',
            ],

            [
                'star_id' => 'star-video5',
                'video_id' => 'qwx1VV9vV1A',
            ],

            [
                'star_id' => 'star-video6',
                'video_id' => 'rxEMKXW2Wqs',
            ],

            [
                'star_id' => 'star-video7',
                'video_id' => 'b2sdVtXNecs',
            ],

            [
                'star_id' => 'star-video8',
                'video_id' => 'COwGXr1RIlI',
            ]

        ]);

        $keyed = $collection->mapWithKeys(function ($item){
            return [$item['star_id'] => $item['video_id']];
        });



            DB::table('bookmarks')->insert($keyed->all());
    }

    function insertv1(){
        $id = Auth::id();
        DB::table('users')->where(['id' => $id])->update(['vid1' => 'j64BBgBGNIU']);
    }

    function insertv2(){
        $id = Auth::id();
        DB::table('users')->where(['id' => $id])->update(['vid2' => '1skBf6h2ksI']);
    }

    function insertv3(){
        $id = Auth::id();
        DB::table('users')->where(['id' => $id])->update(['vid3' => 'qwx1VV9vV1A']);
    }

    function insertv4(){
        $id = Auth::id();
        DB::table('users')->where(['id' => $id])->update(['vid4' => 'b2sdVtXNecs']);
    }

}
