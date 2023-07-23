<div>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">{{ __('Post Add') }}</div>
            <div class="card-body">

                <div class="alert @if(!empty(session('alert'))) alert-{{ session('alert') }} @else d-none @endif" role="alert">
                    @if(!empty(session('msg'))) {{ session('msg') }} @endif
                </div>

                <form wire:submit.prevent="save">
                    @csrf
                    <div class="form-group">
                        <label for="title">{{ __('Title') }}</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" wire:model="title">
                        @error('title')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="title">{{ __('Content') }}</label>
                        <textarea type="text" class="form-control @error('content') is-invalid @enderror" wire:model="content"></textarea>
                        @error('title')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>