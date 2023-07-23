<?php

namespace App\Http\Livewire\Post;

use Livewire\Component;

use App\Models\Post;

class PostList extends Component
{
    public $keyword;

    public function render()
    {
        $posts = $this->getData();
        return view('livewire.post.post-list', compact('posts'));
    }

    public function getData()
    {
        $data = Post::where('title', 'like', '%' . $this->keyword . '%')
            ->orWhere('content', 'like', '%' . $this->keyword . '%')
            ->get();
        return $data;
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
}
