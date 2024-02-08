<?php

namespace App\Http\Livewire\Post;

use App\Models\Post;
use Livewire\Component;

class PerolehanList extends Component
{
    public $tables = [];

    public function mount()
    {
        $this->tables = [
            'Juara Umum' => $this->getFilteredData('Juara Umum'),
            'Juara 1' => $this->getFilteredData('Juara 1'),
            'Juara 2' => $this->getFilteredData('Juara 2'),
            'Juara 3' => $this->getFilteredData('Juara 3'),
            'Juara 4' => $this->getFilteredData('Juara 4'),
            'Juara 5' => $this->getFilteredData('Juara 5'),
        ];
    }

    public function render()
    {
        return view('livewire.post.perolehan-list');
    }

    private function getFilteredData($perolehan)
    {
        return Post::where('perolehan', $perolehan)
            ->whereNotNull('kota')
            ->get();
    }
}
