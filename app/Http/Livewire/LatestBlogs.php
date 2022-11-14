<?php

namespace App\Http\Livewire;

use App\Models\Blog;
use Livewire\Component;

class LatestBlogs extends Component
{

    public $blogs;

    public function mount(){
        $this->blogs = Blog::latest()->take(7)->get();
    }

    public function render()
    {
        return view('livewire.latest-blogs');
    }
}
