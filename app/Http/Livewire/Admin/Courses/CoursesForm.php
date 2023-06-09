<?php

namespace App\Http\Livewire\Admin\Courses;

use App\Models\Course;
use Livewire\Component;

class CoursesForm extends Component
{
    public Course $course;

    protected $rules = ['course.name' => 'required|string|max:100|min:2|bail'];

    public function mount(Course $course){
        $this->course = $course;
    }

    public function updated($nomePropriedade){
        $this->validateOnly($nomePropriedade);
    }

    public function save(){
        $this->validate();
        $this->course->save();
        session()->flash('toast', 'Course saved successfully');
        return redirect('/courses');
    }

    public function render()
    {
        return view('livewire.admin.courses.courses-form')->layout('components.admin.layout.layout');
    }
}
