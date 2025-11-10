<?php

namespace App\Livewire\Traits;

use App\Models\KotakSaran;
use Illuminate\Support\Facades\Auth;

trait HasKotakSaran
{
    public $kotakSaranText = '';
    public $showKotakSaran = false;

    public function toggleKotakSaran()
    {
        $this->showKotakSaran = !$this->showKotakSaran;
    }

    public function submitKotakSaran($formType)
    {
        $this->validate([
            'kotakSaranText' => 'required|string|min:10|max:1000'
        ], [
            'kotakSaranText.required' => 'Saran/catatan harus diisi.',
            'kotakSaranText.min' => 'Saran/catatan minimal 10 karakter.',
            'kotakSaranText.max' => 'Saran/catatan maksimal 1000 karakter.'
        ]);

        try {
            // Submit saran secara anonymous
            KotakSaran::createSaran(
                $this->kotakSaranText,
                $formType
            );

            $this->kotakSaranText = '';
            $this->showKotakSaran = false;
            
            session()->flash('success', 'Saran/catatan berhasil dikirim secara anonim!');
        } catch (\Exception $e) {
            $this->addError('kotakSaranText', 'Gagal mengirim saran/catatan. Silakan coba lagi.');
        }
    }

    public function resetKotakSaran()
    {
        $this->kotakSaranText = '';
        $this->showKotakSaran = false;
        $this->resetErrorBag(['kotakSaranText']);
    }
}