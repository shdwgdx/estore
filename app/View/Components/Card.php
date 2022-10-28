<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Card extends Component
{
    public $title, $description, $price, $discount, $image;
    public $type;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title, $description, $price, $discount, $image)
    {
        $this->title = $title;
        $this->description = $description;
        $this->price = $price;
        $this->discount = $discount;
        $this->image = $image;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.card');
    }
}
