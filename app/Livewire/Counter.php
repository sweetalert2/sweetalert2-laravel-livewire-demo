<?php

namespace App\Livewire;

use Livewire\Component;
use SweetAlert2\Laravel\Traits\WithSweetAlert;

class Counter extends Component
{
    use WithSweetAlert;

    public $count = 0;

    public function increment()
    {
        $this->count++;

        $this->swalSuccess([
            'title' => 'Count is ' . $this->count,
            'toast' => true,
            'showConfirmButton' => false,
            'position' => 'top-end',
            'timer' => 1500,
            'timerProgressBar' => true,
            'didOpen' => '(toast) => {
                toast.onmouseenter = Swal.stopTimer;
                toast.onmouseleave = Swal.resumeTimer;
            }',
        ]);
    }

    public function render()
    {
        return view('livewire.counter');
    }
}
