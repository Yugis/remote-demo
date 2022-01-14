<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Lamp extends Component
{
    public $light = 0;
    public $color = '#fff';
    public $previous_color = '';
    public $opacity = 1;
 
    public function lightOn()
    {
        $this->light = 1;
        $this->color = $this->previous_color ?: '#fff';
    }

    public function lightOff()
    {
        $this->light = 0;
        $this->previous_color = $this->color;
        $this->color = '#fff';
    }

    public function render()
    {
        return view('livewire.lamp');
    }
}
