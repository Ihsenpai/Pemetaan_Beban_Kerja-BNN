<?php

use App\Livewire\Settings\AccountSettings;
use App\Livewire\Settings\PasswordSettings;
use App\Livewire\Settings\ProfileSettings;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Redirect guest users to login page
Route::get('/', function() {
    if (Auth::guard('admin')->check()) {
        return redirect()->route('admin.dashboard');
    } elseif (Auth::guard('pimpinan')->check()) {
        return redirect()->route('pimpinan.dashboard');
    } elseif (Auth::guard('pegawai')->check()) {
        return redirect()->route('pegawai.dashboard');
    } elseif (Auth::guard('katim')->check()) {
        return redirect()->route('katim.dashboard');
    } else {
        return redirect()->route('login');
    }
})->name('home');

Route::get('/login', \App\Livewire\Auth\Login::class)->middleware('guest')->name('login');

// Admin routes with admin guard
Route::get('/admin/dashboard', \App\Livewire\Admin\Dashboard::class)
    ->middleware('auth:admin')
    ->name('admin.dashboard');

// Pimpinan dashboard - with pimpinan guard
Route::middleware(['auth:pimpinan'])->group(function () {
    Route::get('/pimpinan/dashboard', \App\Livewire\Pimpinan\Dashboard::class)
        ->name('pimpinan.dashboard');
    Route::get('/pimpinan/pegawai', \App\Livewire\Pimpinan\PegawaiList::class)
        ->name('pimpinan.pegawai.list');
    Route::get('/pimpinan/pegawai/{nip}', \App\Livewire\Pimpinan\PegawaiDetail::class)
        ->name('pimpinan.pegawai.detail');
    Route::get('/pimpinan/kotak-saran', \App\Livewire\Pimpinan\KotakSaran::class)
        ->name('pimpinan.kotak.saran');
});

// Pegawai routes - with pegawai guard
Route::middleware(['auth:pegawai'])->group(function () {
    Route::get('/pegawai/dashboard', \App\Livewire\Pegawai\Dashboard::class)
        ->name('pegawai.dashboard');
    Route::get('/pegawai/form/p4gn', \App\Livewire\Pegawai\FormP4GN::class)
        ->name('pegawai.form.p4gn');
    Route::get('/pegawai/form/dukungan', \App\Livewire\Pegawai\FormDukungan::class)
        ->name('pegawai.form.dukungan');
    Route::get('/pegawai/form/katim', \App\Livewire\Pegawai\KatimForm::class)
        ->name('pegawai.form.katim');
});

// Katim routes - with katim guard
Route::middleware(['auth:katim'])->group(function () {
    Route::get('/katim/dashboard', \App\Livewire\Katim\Dashboard::class)
        ->name('katim.dashboard');
    // Route::get('/katim/form/p4gn', \App\Livewire\Katim\FormP4GN::class)
    //     ->name('katim.form.p4gn');
    Route::get('/katim/form/rekankerja1', \App\Livewire\Katim\FormRekanKerja1::class)
        ->name('katim.form.rekankerja1');
    Route::get('/katim/form/rekankerja2', \App\Livewire\Katim\FormRekanKerja2::class)
        ->name('katim.form.rekankerja2');
});

// Settings routes (accessible by all user types)
Route::get('settings', function() {
    return redirect()->route('settings.profile');
})->name('settings');

// Routes that require any type of authentication
Route::middleware(['web'])->group(function () {
    Route::get('settings/profile', function() {
        if (Auth::guard('admin')->check()) {
            return app()->call(ProfileSettings::class);
        } elseif (Auth::guard('pimpinan')->check()) {
            return app()->call(ProfileSettings::class);
        } elseif (Auth::guard('pegawai')->check()) {
            return app()->call(ProfileSettings::class);
        } elseif (Auth::guard('katim')->check()) {
            return app()->call(ProfileSettings::class);
        }
        return redirect()->route('login');
    })->name('settings.profile');
    
    Route::get('settings/password', function() {
        if (Auth::guard('admin')->check()) {
            return app()->call(PasswordSettings::class);
        } elseif (Auth::guard('pimpinan')->check()) {
            return app()->call(PasswordSettings::class);
        } elseif (Auth::guard('pegawai')->check()) {
            return app()->call(PasswordSettings::class);
        } elseif (Auth::guard('katim')->check()) {
            return app()->call(PasswordSettings::class);
        }
        return redirect()->route('login');
    })->name('settings.password');
    
    Route::get('settings/account', function() {
        if (Auth::guard('admin')->check()) {
            return app()->call(AccountSettings::class);
        } elseif (Auth::guard('pimpinan')->check()) {
            return app()->call(AccountSettings::class);
        } elseif (Auth::guard('pegawai')->check()) {
            return app()->call(AccountSettings::class);
        } elseif (Auth::guard('katim')->check()) {
            return app()->call(AccountSettings::class);
        }
        return redirect()->route('login');
    })->name('settings.account');
});

require __DIR__.'/auth.php';
