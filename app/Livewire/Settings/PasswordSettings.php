<?php

namespace App\Livewire\Settings;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('livewire.layouts.app')]
class PasswordSettings extends Component
{
    public $current_password;
    public $password;
    public $password_confirmation;
    public $user;

    public function mount()
    {
        $this->user = $this->getAuthUser();
    }

    public function updatePassword()
    {
        $validated = $this->validate([
            'current_password' => ['required', 'string', 'current_password'],
            'password' => ['required', 'string', Rules\Password::defaults(), 'confirmed'],
        ]);

        $this->user->forceFill([
            'password' => Hash::make($validated['password']),
        ])->save();

        $this->reset('current_password', 'password', 'password_confirmation');
        
        session()->flash('message', 'Password updated successfully.');
    }

    public function render()
    {
        return view('livewire.settings.password-settings');
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
}
