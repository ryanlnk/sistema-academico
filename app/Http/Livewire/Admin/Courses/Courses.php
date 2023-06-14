<?php

namespace App\Http\Livewire\Admin\Courses;

use App\Models\Course;
use Livewire\Component;

class Courses extends Component
{
    public $courses;
    public $search = '';

    public function filter (){
        if(empty($this->search)){
            $this->courses = Course::all();
        } else {
            $this->courses = Course::where('name', 'like', "%$this->search%")->get();
        }
    }

    public function render()
    {
        $this->filter();

        return view('livewire.admin.courses.courses')->layout('components.admin.layout.layout');
    }
}
