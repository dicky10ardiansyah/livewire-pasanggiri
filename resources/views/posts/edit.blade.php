@extends('main')

@section('content')
@livewire('post.edit', ['postId' => @intval($id)])
@endsection