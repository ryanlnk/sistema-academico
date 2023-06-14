<?php

namespace App\Http\Livewire\Admin\Courses;

use Livewire\Component;

class CoursesForm extends Component
{
    public function render()
    {
        return view('livewire.admin.courses.courses-form')->layout('components.admin.layout.layout');
    }
}
