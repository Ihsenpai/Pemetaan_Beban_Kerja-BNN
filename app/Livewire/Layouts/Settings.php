<?php

namespace App\Livewire\Layouts;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Settings extends Component
{
    public function render()
    {
        $navigation = [
            [
                'name' => 'Profile',
                'route' => 'settings.profile',
                'active' => request()->routeIs('settings.profile'),
            ],
            [
                'name' => 'Password',
                'route' => 'settings.password',
                'active' => request()->routeIs('settings.password'),
            ],
            [
                'name' => 'Account',
                'route' => 'settings.account',
                'active' => request()->routeIs('settings.account'),
            ],
        ];

        return view('livewire.layouts.settings', [
            'navigation' => $navigation,
            'user' => $this->getAuthUser(),
        ]);
    }

    protected function getAuthUser()
    {
        if (Auth::guard('admin')->check()) {
            return Auth::guard('admin')->user();
        } elseif (Auth::guard('pimpinan')->check()) {
            return Auth::guard('pimpinan')->user();
        } else {
            return Auth::guard('web')->user();
        }
    }
}
