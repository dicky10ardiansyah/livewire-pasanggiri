<?php

namespace App\Http\Livewire\Post;

use App\Models\Post;
use Livewire\Component;

class PesertaList extends Component
{
    public $keyword;
    public $posts;

    public function render()
    {
        $this->posts = Post::orderBy('position', 'asc')->get();
        return view('livewire.post.peserta-list');
    }

    public function getData()
    {
        $data = Post::where('kota', 'like', '%' . $this->keyword . '%')
            ->orWhere('kelompok', 'like', '%' . $this->keyword . '%')
            ->get();
        return $data;
    }
}
