<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\room;

class TeacherClass extends Component
{
    public $formStatus =0;
    public $className;
    public function render()
    {
        return view('livewire.teacher-class')->extends('components.layouts.app')->section('content');
    }

    public function formControl($code)
    {
        $this->formStatus =$code;
    }

    public function addClass()
    {
        room::create([
            'name_class'=> $this->className,
            'background_photo'=> '-',
            'code_class'=> '12',
            'user_id_created' => auth()->user()->id
        ]);
    }
}
