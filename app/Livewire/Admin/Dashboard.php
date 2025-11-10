<?php

namespace App\Livewire\Admin;

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
        // Check if user is logged in with admin guard
        if (Auth::guard('admin')->check()) {
            $this->isLoggedIn = true;
            $this->userName = Auth::guard('admin')->user()->name;
            $this->userRole = 'admin';
        } else {
            // Redirect if not authenticated as admin
            return redirect()->route('login');
        }
    }
    
    public function render()
    {
        return view('livewire.admin.dashboard');
    }
}
