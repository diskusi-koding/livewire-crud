<x-app-layout>
    <h1 class="my-4">Selamat Datang di <strong class="text-success">MyContact</strong></h1>

    <div class="card bg-white border-0 border-top">
        <div class="card-header bg-white border-0 my-2 d-flex justify-content-between">
            <h4 class="card-title my-2">Semua Data Kontak</h4>
            <a href="{{ route('contact.create') }}">
                <button class="btn btn-light border-0 border-bottom">
                    Contact Baru
                </button>
            </a>
        </div>
        <div class="card-body">
            <livewire:contact.index/>
        </div>
    </div>

</x-app-layout>
