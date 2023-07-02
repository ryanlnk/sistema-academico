<?php

namespace App\Http\Livewire\Admin\Courses;

use App\Models\Course;
use Livewire\Component;

class Courses extends Component
{
    public $courses;
    public $search = '';
    protected $listeners = ['delete'];

    public function filter (){
        if(empty($this->search)){
            $this->courses = Course::all();
        } else {
            $this->courses = Course::where('name', 'like', "%$this->search%")->get();
        }
    }

    public function delete($id) {
        Course::destroy($id);
        $this->emit('toast', 'Course deleted successfully!');
    }

    public function render()
    {
        $this->filter();

        return view('livewire.admin.courses.courses')->layout('components.admin.layout.layout');
    }
}
