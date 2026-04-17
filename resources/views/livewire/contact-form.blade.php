<div class="form-panel" data-reveal>
    <p class="section-kicker">Form Livewire</p>
    <h2>Tinggalkan pesan</h2>
    <p>Form ini memakai validasi Livewire dan mencatat inquiry ke log aplikasi Laravel.</p>

    @if (session('contact_status'))
        <div class="form-alert success">{{ session('contact_status') }}</div>
    @endif

    <form class="contact-form" wire:submit="submit">
        <label>
            <span>Nama</span>
            <input type="text" wire:model.blur="name" placeholder="Nama lengkap">
            @error('name') <small class="field-error">{{ $message }}</small> @enderror
        </label>

        <label>
            <span>Email</span>
            <input type="email" wire:model.blur="email" placeholder="email@contoh.com">
            @error('email') <small class="field-error">{{ $message }}</small> @enderror
        </label>

        <label>
            <span>Telepon / WhatsApp</span>
            <input type="text" wire:model.blur="phone" placeholder="08xxxxxxxxxx">
            @error('phone') <small class="field-error">{{ $message }}</small> @enderror
        </label>

        <label>
            <span>Kebutuhan Anda</span>
            <textarea rows="6" wire:model.blur="message" placeholder="Ceritakan kebutuhan perangkat, instalasi, atau konsultasi yang Anda perlukan"></textarea>
            @error('message') <small class="field-error">{{ $message }}</small> @enderror
        </label>

        <button class="button button-primary" type="submit">Kirim Pesan</button>
    </form>
</div>