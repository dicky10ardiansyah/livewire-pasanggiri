<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">CRUD livewire</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <!-- Elemen-elemen berada di sisi kanan menggunakan class "justify-content-end" -->
                <a class="nav-link active" aria-current="page" href="/">{{ __('Home') }}</a>
                <a class="nav-link" href="{{ url('post/list') }}">{{ __('Post') }}</a>
                <a class="nav-link" href="{{ url('post/add') }}">{{ __('Tambah Post') }}</a>
            </div>
        </div>
    </div>
</nav>