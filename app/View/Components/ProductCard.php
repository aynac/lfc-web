<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ProductCard extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $image,
        public string $title,
        public string $price,
        public ?string $badge = null,
        public bool $sale = false,
        public string $kit = 'all',
        public array $sizes = [],    
        public array $images = []
    ){}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.product-card');
    }
}
