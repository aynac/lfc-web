<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class VideoCard extends Component
{
    public $thumbnail;
    public $title;
    public $duration;
    public $date;
    public $link;

    public function __construct($thumbnail, $title, $duration, $date, $link)
    {
        $this->thumbnail = $thumbnail;
        $this->title     = $title;
        $this->duration  = $duration;
        $this->date      = $date;
        $this->link      = $link;
    }

    public function render(): View
    {
        return view('components.video-card');
    }
}
