<?php

namespace App\Http\Livewire\Contact;

use App\Models\Contact;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.contact.index',[
            /*1. mengambil data semua contact yang ada di table contact*/

            'contacts' => Contact::all()
        ]);
    }
}
