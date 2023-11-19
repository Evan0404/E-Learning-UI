<?php

namespace App\Livewire;

use Livewire\Component;

class StudentClass extends Component
{
    public function render()
    {
        return view('livewire.student-class')->extends('components.layouts.app1')->section('content');
    }
}
