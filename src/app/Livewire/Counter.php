<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $name = null;

    public $color = null;

    public function render()
    {

        return view('livewire.counter');
        dd($name);
    }

    public function mount()
    {
        $this->name = 'William';
        $this->color = 'red';
        // dd($this->name);
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
