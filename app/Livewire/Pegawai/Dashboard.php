<?php

namespace App\Livewire\Pegawai;

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
        // Check if user is logged in with pegawai guard
        if (Auth::guard('pegawai')->check()) {
            $this->isLoggedIn = true;
            $this->userName = Auth::guard('pegawai')->user()->name;
            $this->userRole = Auth::guard('pegawai')->user()->role;
            $this->jenisPegawai = Auth::guard('pegawai')->user()->jenis_pegawai;
        } else {
            // Redirect if not authenticated as pegawai
            return redirect()->route('login');
        }
    }
    
    public function render()
    {
        return view('livewire.pegawai.dashboard');
    }
}
