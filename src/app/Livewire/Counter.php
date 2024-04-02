<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;

class Counter extends Component
{
    public $name = null;

    public $color = null;

    public $users;

    public function render()
    {

        return view('livewire.counter');
        // dd($name);
    }

    public function mount()
    {
        $this->name = 'William';
        $this->color = 'red';

        $this->users = User::all();
        // dd($this->users);

    }

    public function changeName()
    {
        if ($this->name === 'Alexie') {

            $this->name = 'William';
            $this->color = 'red';
        } else {

            $this->name = 'Alexie';
            $this->color = 'blue';

        }

        // dd($this->name);
    }
}
