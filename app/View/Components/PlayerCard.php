<?php 

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class PlayerCard extends Component
{
    public $name;
    public $number;
    public $image;
    public $country;

    public function __construct($name, $number, $image, $country)
    {
        $this->name = $name;
        $this->number = $number;
        $this->image = $image;
        $this->country = $country;
    }

    public function render()
    {
        return view('components.player-card');
    }
}
