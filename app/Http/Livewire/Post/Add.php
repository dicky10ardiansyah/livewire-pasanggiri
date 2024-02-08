<?php

namespace App\Http\Livewire\Post;

use Livewire\Component;
use App\Models\Post;

class Add extends Component
{
    public $kota;
    public $desa;
    public $kelompok;
    public $jumlah;
    public $position;
    public $count_activities;

    public function render()
    {
        $this->count_activities = Post::count();
        return view('livewire.post.add');
    }

    public function save()
    {
        $input = $this->validate([
            'kota' => 'required',
            'desa' => 'required',
            'kelompok' => 'required',
        ]);

        $post = new Post();
        $post->kota = $this->kota;
        $post->desa = $this->desa;
        $post->kelompok = $this->kelompok;
        $post->jumlah = $this->jumlah;
        $post->position = $this->count_activities + 1;
        try {
            $post->save();
            $this->reset();
            session()->flash('msg', __('Data berhasil ditambahkan'));
            session()->flash('alert', 'success');
        } catch (\Throwable $th) {
            session()->flash('msg', $th);
            session()->flash('alert', 'danger');
        }
    }
}
