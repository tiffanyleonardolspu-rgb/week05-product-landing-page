<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PricingCard extends Component
{

    public $name;
    public $price;
    public $description;
    public $features;


    public function __construct(
        $name,
        $price,
        $description,
        $features
    )
    {
        $this->name = $name;
        $this->price = $price;
        $this->description = $description;
        $this->features = $features;
    }


    public function render(): View|Closure
    {
        return view('components.pricing-card');
    }

}