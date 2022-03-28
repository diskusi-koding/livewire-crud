<?php

namespace App\Http\Livewire\Contact;

use App\Models\Contact;
use Livewire\Component;

class Create extends Component
{
    /*1. membuat property*/
    public $nama_depan;
    public $nama_belakang;
    public $email;
    public $telepon;
    public $alamat;

    /*2. membuat method validasi*/
    protected $rules = [
        'nama_depan' => 'required',
        'nama_belakang' => 'required',
        'email' => 'required|email',
        'telepon' => 'required|numeric',
        'alamat' => 'required',
    ];


    /*3. membuat method untuk menyimpan data*/
    public function store()
    {
        /*1. menjalankan validasi*/
        $this->validate();

        /*2. fungsi menyimpan data*/
        Contact::create([
            'nama_depan' => $this->nama_depan,
            'nama_belakang' => $this->nama_belakang,
            'email' => $this->email,
            'telepon' => $this->telepon,
            'alamat' => $this->alamat,
            'status' => 'aktif',
        ]);

        /*3. membuat flash message*/
        session()->flash('success', 'Data berhasil ditambahkan');

        /*4. mengosongkan form*/
        $this->reset();
    }

    public function render()
    {
        return view('livewire.contact.create');
    }
}
