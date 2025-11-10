<?php

namespace App\Livewire\Auth;

use App\Models\Admin;
use App\Models\Pimpinan;
use App\Models\Pegawai;
use App\Models\Katim;
use Illuminate\Auth\Events\Lockout;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.auth')]
class Login extends Component
{
    public $email = '';
    public $password = '';
    public $loginAs = '';
    public $showDropdown = false;
    
    public function toggleDropdown()
    {
        $this->showDropdown = !$this->showDropdown;
    }
    
    public function selectRole($role)
    {
        $this->loginAs = $role;
        $this->showDropdown = false;
    }

    /**
     * Handle an incoming authentication request.
     */
    public function login()
    {
        $this->validate([
            'email' => 'required|email',
            'password' => 'required',
            'loginAs' => 'required'
        ], [
            'email.required' => 'Email harus diisi.',
            'email.email' => 'Format email tidak valid.',
            'password.required' => 'Password harus diisi.',
            'loginAs.required' => 'Silakan pilih login sebagai.'
        ]);

        $role = strtolower($this->loginAs);

        // Jika login sebagai admin, gunakan tabel admins
        if ($role === 'admin') {
            $admin = Admin::where('email', $this->email)->first();
            
            if ($admin && Hash::check($this->password, $admin->password)) {
                Auth::guard('admin')->login($admin);
                session()->regenerate();
                session()->put('is_admin', true);
                return redirect()->route('admin.dashboard');
            }
        } 
        // Jika login sebagai pimpinan, gunakan tabel pimpinans
        else if ($role === 'pimpinan') {
            $pimpinan = Pimpinan::where('email', $this->email)->first();
            
            if ($pimpinan && Hash::check($this->password, $pimpinan->password)) {
                Auth::guard('pimpinan')->login($pimpinan);
                session()->regenerate();
                session()->put('is_pimpinan', true);
                session()->flash('success', 'Berhasil login sebagai Pimpinan');
                return redirect()->route('pimpinan.dashboard');
            }
        }
        // Login sebagai pegawai menggunakan tabel pegawais
        else if ($role === 'pegawai') {
            $pegawai = Pegawai::where('email', $this->email)->first();
            
            if ($pegawai && Hash::check($this->password, $pegawai->password)) {
                Auth::guard('pegawai')->login($pegawai);
                session()->regenerate();
                session()->put('is_pegawai', true);
                session()->flash('success', 'Berhasil login sebagai Pegawai');
                return redirect()->route('pegawai.dashboard');
            }
        }
        // Login sebagai katim menggunakan tabel katims
        else if ($role === 'katim') {
            $katim = Katim::where('email', $this->email)->first();
            
            if ($katim && Hash::check($this->password, $katim->password)) {
                Auth::guard('katim')->login($katim);
                session()->regenerate();
                session()->put('is_katim', true);
                session()->flash('success', 'Berhasil login sebagai Ketua Tim');
                return redirect()->route('katim.dashboard');
            }
        }
        
        // Login gagal
        $this->addError('email', 'Kredensial yang Anda berikan tidak cocok dengan data kami.');
    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}
