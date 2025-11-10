<?php

namespace App\Livewire\Components;

use Livewire\Component;

class MenuItem extends Component
{
    public $title;
    public $description;
    public $url;

    public function mount($title, $description, $url = '#')
    {
        $this->title = $title;
        $this->description = $description;
        $this->url = $url;
    }

    public function render()
    {
        return view('livewire.components.menu-item');
    }
}
