<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class CariData extends Component
{
    public $search;
    public $limitPerPage = 5;

    protected $queryString = ['search'=> ['except' => '']];

    protected $listeners = [
        'cari-data' => 'cariData'
    ];
   
    public function cariData()
    {
        $this->limitPerPage = $this->limitPerPage + 5;
    }

    public function render()
    {
        $posts = User::latest()->paginate($this->limitPerPage);
        
        if ($this->search !== null) {
            $posts = User::where('name','like', '%' . $this->search . '%')
            ->latest()->paginate($this->limitPerPage);
        }

        $this->emit('postStore');

        return view('livewire.cari-data', ['posts' => $posts]);
    }

}
