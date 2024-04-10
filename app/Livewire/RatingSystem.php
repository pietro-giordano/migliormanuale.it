<?php

namespace App\Livewire;

use Livewire\Component;

class RatingSystem extends Component
{
    // variables
    public $book;

    public function render()
    {
        return view('livewire.rating-system');
    }
}
