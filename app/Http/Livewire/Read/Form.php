<?php

namespace App\Http\Livewire\Read;

use Livewire\Component;

class Form extends Component
{
    public $inputText;

    public $outputWords;

    public function mount()
    {
        $this->inputText = "hello world this is a test";
    }

    public function render()
    {
        return view('livewire.read.form');
    }

    public function convert()
    {
        $this->outputWords = explode(' ' , $this->inputText ) ;
    }
}
