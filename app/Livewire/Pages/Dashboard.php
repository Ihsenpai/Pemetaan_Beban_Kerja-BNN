<?php

namespace App\Livewire\Pages;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('livewire.layouts.app')]
class Dashboard extends Component
{
    public $userName;
    public $userRole;
    public $isLoggedIn = false;
    
    public function mount()
    {
        $this->checkAuth();
    }

    private function checkAuth()
    {
        // Check if user is logged in with any guard
        if (Auth::guard('web')->check()) {
            $this->isLoggedIn = true;
            $this->userName = Auth::guard('web')->user()->name;
            $this->userRole = Auth::guard('web')->user()->role;
        } elseif (Auth::guard('admin')->check()) {
            $this->isLoggedIn = true;
            $this->userName = Auth::guard('admin')->user()->name;
            $this->userRole = Auth::guard('admin')->user()->role;
        } elseif (Auth::guard('pimpinan')->check()) {
            $this->isLoggedIn = true;
            $this->userName = Auth::guard('pimpinan')->user()->name;
            $this->userRole = Auth::guard('pimpinan')->user()->role;
        }
    }
    
    public function render()
    {
        return view('livewire.pages.dashboard');
    }
}
