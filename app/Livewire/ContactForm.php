<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Log;
use Livewire\Attributes\Validate;
use Livewire\Component;

class ContactForm extends Component
{
    #[Validate('required|string|min:3')]
    public string $name = '';

    #[Validate('required|email')]
    public string $email = '';

    #[Validate('required|string|min:10')]
    public string $phone = '';

    #[Validate('required|string|min:12')]
    public string $message = '';

    public function submit(): void
    {
        $payload = $this->validate();

        Log::info('Website contact inquiry', $payload);

        session()->flash('contact_status', 'Pesan sudah diterima. Tim kami akan menghubungi Anda melalui kontak yang Anda isi.');

        $this->reset('name', 'email', 'phone', 'message');
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}