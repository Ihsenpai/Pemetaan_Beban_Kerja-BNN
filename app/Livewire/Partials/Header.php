<?php

namespace App\Livewire\Partials;

use App\Models\Katim;
use App\Models\Pegawai;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Header extends Component
{
    public $userName;
    public $userRole;
    public $isLoggedIn = false;
    public $showDropdown = false;
    public $canSwitchRole = false;
    public $currentMode = '';

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
            $this->userRole = 'admin';

        } elseif (Auth::guard('pimpinan')->check()) {
            $this->isLoggedIn = true;
            $this->userName = Auth::guard('pimpinan')->user()->name;
            $this->userRole = 'pimpinan';

        } elseif (Auth::guard('pegawai')->check()) {
            $this->isLoggedIn = true;
            $this->userName = Auth::guard('pegawai')->user()->name;
            $this->userRole = 'pegawai';
            $this->currentMode = 'Pegawai';
            
            // Check if this pegawai is also a katim
            $pegawai = Auth::guard('pegawai')->user();
            $katim = Katim::where('nip', $pegawai->nip)->first();
            $this->canSwitchRole = $katim !== null;
        } elseif (Auth::guard('katim')->check()) {
            $this->isLoggedIn = true;
            $this->userName = Auth::guard('katim')->user()->name;
            $this->userRole = 'katim';
            $this->currentMode = 'Katim';
            
            // A katim should always have a pegawai record
            $this->canSwitchRole = true;
        }
    }

    public function toggleDropdown()
    {
        $this->showDropdown = !$this->showDropdown;
    }
    
    public function logout()
    {
        if (Auth::guard('web')->check()) {
            Auth::guard('web')->logout();
        } elseif (Auth::guard('admin')->check()) {
            Auth::guard('admin')->logout();
        } elseif (Auth::guard('pimpinan')->check()) {
            Auth::guard('pimpinan')->logout();
        } elseif (Auth::guard('pegawai')->check()) {
            Auth::guard('pegawai')->logout();
        } elseif (Auth::guard('katim')->check()) {
            Auth::guard('katim')->logout();
        }
        
        session()->invalidate();
        session()->regenerateToken();
        
        return redirect()->route('login');
    }

    /**
     * Switch between pegawai and katim roles
     */
    public function switchRole()
    {
        if (!$this->canSwitchRole) {
            return;
        }
        
        // If currently logged in as pegawai, switch to katim
        if (Auth::guard('pegawai')->check()) {
            $pegawai = Auth::guard('pegawai')->user();
            $katim = Katim::where('nip', $pegawai->nip)->first();
            
            if ($katim) {
                Auth::guard('pegawai')->logout();
                Auth::guard('katim')->login($katim);
                session()->put('is_katim', true);
                session()->forget('is_pegawai');
                return redirect()->route('katim.dashboard');
            }
        } 
        // If currently logged in as katim, switch to pegawai
        elseif (Auth::guard('katim')->check()) {
            $katim = Auth::guard('katim')->user();
            $pegawai = Pegawai::where('nip', $katim->nip)->first();
            
            if ($pegawai) {
                Auth::guard('katim')->logout();
                Auth::guard('pegawai')->login($pegawai);
                session()->put('is_pegawai', true);
                session()->forget('is_katim');
                return redirect()->route('pegawai.dashboard');
            }
        }
        
        $this->checkAuth();
    }
    
    public function render()
    {
        return view('livewire.partials.header');
    }
}
