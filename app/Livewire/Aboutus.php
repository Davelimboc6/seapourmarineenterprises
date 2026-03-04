<?php

namespace App\Livewire;

use Livewire\Component;

class Aboutus extends Component
{
    public function render()
    {
         return view('livewire.aboutus')
        ->layout('layouts.app', [
            'title' => 'About Us',
        ]);
    }
}
