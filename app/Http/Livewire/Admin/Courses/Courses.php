<?php

namespace App\Http\Livewire\Admin\Courses;

use App\Models\Course;
use Livewire\Component;

class Courses extends Component
{
    public $courses;

    public function getCourses(){
        $this->courses = Course::all();
    }

    public function render()
    {
        $this->getCourses();

        return view('livewire.admin.courses.courses')->layout('components.admin.layout.layout');
    }
}
