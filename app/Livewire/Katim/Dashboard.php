<?php

namespace App\Livewire\Katim;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('livewire.layouts.app')]
class Dashboard extends Component
{
    public $userName;
    public $userRole;
    public $jenisPegawai;
    public $isLoggedIn = false;
    
    public function mount()
    {
        $this->checkAuth();
    }

    private function checkAuth()
    {
        // Check if user is logged in with katim guard
        if (Auth::guard('katim')->check()) {
            $this->isLoggedIn = true;
            $this->userName = Auth::guard('katim')->user()->name;
            $this->userRole = Auth::guard('katim')->user()->role;
            $this->jenisPegawai = Auth::guard('katim')->user()->jenis_pegawai;
        } else {
            // Redirect if not authenticated as katim
            return redirect()->route('login');
        }
    }
    
    public function render()
    {
        return view('livewire.katim.dashboard');
    }
}
