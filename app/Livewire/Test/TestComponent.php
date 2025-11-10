<?php

namespace App\Livewire\Test;

use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('livewire.layouts.app')]
class TestComponent extends Component
{
    public function render()
    {
        return view('livewire.test.test-component');
    }
}
