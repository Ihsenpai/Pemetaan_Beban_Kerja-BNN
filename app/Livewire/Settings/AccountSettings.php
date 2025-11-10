<?php

namespace App\Livewire\Settings;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('livewire.layouts.app')]
class AccountSettings extends Component
{
    public $password;
    public $user;
    public $confirmingUserDeletion = false;

    public function mount()
    {
        $this->user = $this->getAuthUser();
    }

    public function confirmUserDeletion()
    {
        $this->confirmingUserDeletion = true;
    }

    public function deleteUser()
    {
        $this->validate([
            'password' => ['required', 'string', 'current_password'],
        ]);

        $guard = $this->getCurrentGuard();
        $user = $this->user;

        Auth::guard($guard)->logout();
        
        $user->delete();

        session()->invalidate();
        session()->regenerateToken();

        return redirect('/');
    }

    public function render()
    {
        return view('livewire.settings.account-settings');
    }

    protected function getAuthUser()
    {
        if (Auth::guard('admin')->check()) {
            return Auth::guard('admin')->user();
        } elseif (Auth::guard('pimpinan')->check()) {
            return Auth::guard('pimpinan')->user();
        } elseif (Auth::guard('pegawai')->check()) {
            return Auth::guard('pegawai')->user();
        } elseif (Auth::guard('katim')->check()) {
            return Auth::guard('katim')->user();
        } else {
            abort(403, 'Unauthorized action.');
        }
    }

    protected function getCurrentGuard()
    {
        if (Auth::guard('admin')->check()) {
            return 'admin';
        } elseif (Auth::guard('pimpinan')->check()) {
            return 'pimpinan';
        } elseif (Auth::guard('pegawai')->check()) {
            return 'pegawai';
        } elseif (Auth::guard('katim')->check()) {
            return 'katim';
        } else {
            abort(403, 'Unauthorized action.');
        }
    }
}
