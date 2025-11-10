<?php

namespace App\Livewire\Settings;

use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('livewire.layouts.app')]
class ProfileSettings extends Component
{
    public $name;
    public $email;
    public $user;

    public function mount()
    {
        $this->user = $this->getAuthUser();
        $this->name = $this->user->name;
        $this->email = $this->user->email;
    }

    public function save()
    {
        $guard = $this->getCurrentGuard();
        
        $this->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => [
                'required', 
                'email', 
                'max:255', 
                Rule::unique($this->getCurrentGuard() . 's')->ignore($this->user->{$this->user->getKeyName()}, $this->user->getKeyName())
            ],
        ]);

        $this->user->name = $this->name;
        $this->user->email = $this->email;
        $this->user->save();

        $this->dispatch('profile-updated');

        session()->flash('message', 'Profile updated successfully.');
    }

    public function render()
    {
        return view('livewire.settings.profile-settings');
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
