<?php

namespace App\Http\Livewire\Post;

use Livewire\Component;

use App\Models\Post;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\PostExport;

class PostList extends Component
{
    public $keyword;
    public $posts;

    public function render()
    {
        $this->posts = Post::orderBy('position', 'asc')->get();
        return view('livewire.post.post-list');
    }

    public function getData()
    {
        $data = Post::where('kota', 'like', '%' . $this->keyword . '%')
            ->orWhere('kelompok', 'like', '%' . $this->keyword . '%')
            ->get();
        return $data;
    }

    public function updatePostOrder($posts)
    {
        foreach ($posts as $post) {
            Post::where('id', $post['value'])->update(['position' => $post['order']]);
        }
    }

    public function deletePost($id)
    {
        $post = Post::find($id);
        if (!empty($post)) {
            $post->delete();
            session()->flash('message', 'Data berhasil dihapus.');
            session()->flash('alert', 'success');
            return redirect('post/list');
        } else {
            session()->flash('message', 'Data gagal dihapus.');
            session()->flash('alert', 'danger');
            return redirect('post/list');
        }
    }

    public function downloadExcel()
    {
        try {
            return Excel::download(new PostExport, 'posts.xlsx');
        } catch (\Exception $e) {
            // Log the error or handle it as per your application's requirements
            session()->flash('message', 'Error exporting Excel file.');
            session()->flash('alert', 'danger');
            return redirect('post/list');
        }
    }
}
