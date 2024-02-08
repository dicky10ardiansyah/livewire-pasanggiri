<?php

namespace App\Http\Livewire\Post;

use Livewire\Component;
use App\Models\Post;

class Edit extends Component
{
    public $kota;
    public $desa;
    public $kelompok;
    public $jumlah;
    public $status;
    public $perolehan;
    public $position;
    public $data;
    public $postId;
    public $empty = false;

    public function mount()
    {
        $this->data = Post::find($this->postId);
        // $this->kota = $data->kota;
        // $this->desa = $data->desa;
        if (!empty($this->data)) {
            $this->kota = $this->data->kota;
            $this->desa = $this->data->desa;
            $this->kelompok = $this->data->kelompok;
            $this->jumlah = $this->data->jumlah;
            $this->status = $this->data->status;
            $this->perolehan = $this->data->perolehan;
        } else {
            $this->empty = true;
            session()->flash('msg', __('Post tidak ditemukan'));
            session()->flash('alert', 'danger');
        }
    }

    public function render()
    {
        $cities = [
            'Batam' => 'Batam',
            'Tanjung Pinang' => 'Tanjung Pinang',
            'Bintan' => 'Bintan',
            'Karimun' => 'Karimun',
        ];

        $statuss = [
            'persiapan' => 'persiapan',
            'tampil' => 'tampil',
            'selesai' => 'selesai',
        ];

        $perolehans = [
            'Juara Umum' => 'Juara Umum',
            'Juara 1' => 'Juara 1',
            'Juara 2' => 'Juara 2',
            'Juara 3' => 'Juara 3',
            'Juara 4' => 'Juara 4',
            'Juara 5' => 'Juara 5',
            '' => '',
        ];

        return view('livewire.post.edit', [
            'cities' => $cities,
            'statuss' => $statuss,
            'perolehans' => $perolehans,
        ]);
    }

    public function save()
    {
        $input = $this->validate([
            'kota' => 'required',
            'desa' => 'required',
            'kelompok' => 'required',
        ]);

        $post = $this->data;
        $post->kota = $this->kota;
        $post->desa = $this->desa;
        $post->kelompok = $this->kelompok;
        $post->jumlah = $this->jumlah;
        $post->status = $this->status;
        $post->perolehan = $this->perolehan;
        try {
            $post->save();
            $this->reset();
            session()->flash('msg', __('Data berhasil diubah'));
            session()->flash('alert', 'success');
        } catch (\Throwable $th) {
            session()->flash('msg', $th);
            session()->flash('alert', 'danger');
        }
    }
}
