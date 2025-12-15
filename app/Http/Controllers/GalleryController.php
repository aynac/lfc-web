<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    public function gallery()
    {
        // $gallery = [
        //     'hun_sen_cup' => Storage::disk('public')->files('gallery/HunSen_cup_23'),
        //     'pp_trip' => Storage::disk('public')->files('gallery/pp_trip'),
        //     'prop_p' => Storage::disk('public')->files('gallery/cpl'),
        //     'team_dinner' => Storage::disk('public')->files('gallery/team_dinner'),
        //     'match_day' => Storage::disk('public')->files('gallery/slide_pic'),
        // ];
        $categories = [
            'hun_sen_cup' => 'gallery/HunSen_cup_23',
            'pp_trip'    => 'gallery/pp_trip',
            'prop_p'     => 'gallery/cpl',
            'team_dinner'=> 'gallery/team_dinner',
            'match_day'  => 'gallery/slide_pic',
        ];

        $gallery = [];

        foreach ($categories as $key => $path) {
            $files = Storage::disk('public')->allFiles($path);
            // filter out non-images like .DS_Store
            $gallery[$key] = array_filter($files, fn($file) => preg_match('/\.(jpe?g|png|webp|gif)$/i', $file));
        }
        

       return view('user.gallery', compact('gallery'));
    }
}

