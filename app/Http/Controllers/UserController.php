<?php
namespace App\Http\Controllers;

use App\Models\Players;
use App\Models\News;
use App\Models\Products;
use App\Models\Gallery;
use App\Models\Highlight;

class UserController extends Controller
{
    public function home()
    {
        return view('user.index', [
            'news' => News::latest()->take(3)->get(),
            'stats' => [
                'wins' => 10,
                'draws' => 5,
                'losses' => 2,
                'goals' => 30
            ]
        ]);
    }

    public function players() 
    { 
        return view('user.players', ['players' => Players::all()]); 
    }
    public function news() 
    { 
        return view('user.news', ['news' => News::latest()->get()]); 
    }
    public function store() 
    { 
        return view('user.store', ['products' => Products::all()]); 
    }
    public function gallery() 
    { 
        return view('user.gallery', ['gallery' => Gallery::all()]); 
    }
    public function highlight()
    {
        $videos = [
            [
                'thumbnail' => asset('gallery/highlight/vs_angkortiger.png'),
                'title' => 'Angkor Tiger VS Life FC',
                'duration' => '10:21',
                'date' => 'Feburary 15, 2025',
                'link' => 'https://youtu.be/2pfXThsRwDs'
            ],
            [
                'thumbnail' => asset('gallery/highlight/vs_visakha.png'),
                'title' => 'Visakha FC VS Life FC',
                'duration' => '08:50',
                'date' => 'August 17, 2025',
                'link' => 'https://youtu.be/8spqUjiQ2ME'
            ],
            [
                'thumbnail' => asset('gallery/highlight/vs_boeungket.png'),
                'title' => 'Life FC VS Boeung Ket FC',
                'duration' => '08:50',
                'date' => 'August 08, 2025',
                'link' => 'https://youtu.be/XWZ3cXP9imI'
            ],
            [
                'thumbnail' => asset('gallery/highlight/vs_kirivong.png'),
                'title' => 'Life FC VS Kirivong Soksenchey',
                'duration' => '08:50',
                'date' => 'Feburary 02, 2025',
                'link' => 'https://youtu.be/SchR1dxt5Ug'
            ],
            [
                'thumbnail' => asset('gallery/highlight/vs_ministryFA.png'),
                'title' => 'Life FC VS Ministry of Interior FA',
                'duration' => '8:30',
                'date' => 'April 26, 2025',
                'link' => 'https://youtu.be/QGPJrnDzMRI'
            ],

            [
                'thumbnail' => asset('gallery/highlight/vs_pkrsr.png'),
                'title' => 'Life FC VS Preah Khan Reach Svay Rieng',
                'duration' => '8:30',
                'date' => 'February 09, 2025',
                'link' => 'https://youtu.be/ZJk11KZMqjM'
            ],

            [
                'thumbnail' => asset('gallery/highlight/vs_tiffyarmy.png'),
                'title' => 'Life FC VS Tiffy Army FC',
                'duration' => '8:30',
                'date' => 'February 22, 2025',
                'link' => 'https://youtu.be/lKUhj_B0EBM'
            ],

            [
                'thumbnail' => asset('gallery/highlight/vs_naga.png'),
                'title' => 'Life FC VS Naga World FC',
                'duration' => '8:30',
                'date' => 'February 22, 2025',
                'link' => 'https://youtu.be/ejY0dxtKj9s'
            ],

            [
                'thumbnail' => asset('gallery/highlight/vs_isi.png'),
                'title' => 'Life FC VS ISI Dangkor Senchey FC (B)',
                'duration' => '8:30',
                'date' => 'CL2 Week 2',
                'link' => 'https://youtu.be/NsXc3PnTu0A'
            ],

            [
                'thumbnail' => asset('gallery/highlight/vs_angkorcity.png'),
                'title' => 'Life FC VS Angkor City FC',
                'duration' => '8:30',
                'date' => '2 Years Ago',
                'link' => 'https://youtu.be/0KXks84l_UI'
            ],
        ];

        return view('user.highlight', compact('videos'));
    }

}

