<div>
    <div class="container my-5">
        <div class="card">
            <div class="card-header text-center">{{ __('Edit Data') }}</div>
            <div class="card-body">

                @if(!empty(session('msg')))
                <script>
                    Swal.fire({
                        icon: 'success',
                        title: 'Selamat!',
                        text: '{{ session("msg") }}',
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'OK'
                    });
                </script>
                @endif

                @if (!$empty)
                <form wire:submit.prevent="save">
                    @csrf
                    <div class="form-group">
                        <label for="title">{{ __('Kota/Kabupaten') }}</label>
                        <select wire:model="kota" class="form-control" id="kota">
                            <option value="">Pilih Kota</option>
                            @foreach($cities as $key => $city)
                            <option value="{{ $key }}">{{ $city }}</option>
                            @endforeach
                        </select>
                        @error('kota')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="title">{{ __('Desa') }}</label>
                        <input type="text" value="{{ $desa }}" class="form-control @error('desa') is-invalid @enderror" wire:model="desa">
                        @error('desa')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="title">{{ __('Kelompok') }}</label>
                        <input type="text" value="{{ $kelompok }}" class="form-control @error('kelompok') is-invalid @enderror" wire:model="kelompok">
                        @error('kelompok')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="title">{{ __('Jumlah') }}</label>
                        <input type="text" value="{{ $jumlah }}" class="form-control @error('jumlah') is-invalid @enderror" wire:model="jumlah">
                        @error('jumlah')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="title">{{ __('Status') }}</label>
                                <select wire:model="status" class="form-control" id="status">
                                    <option value="">Pilih Status</option>
                                    @foreach($statuss as $key => $status)
                                    <option value="{{ $key }}">{{ $status }}</option>
                                    @endforeach
                                </select>
                                @error('status')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="title">{{ __('Perolehan') }}</label>
                                <select wire:model="perolehan" class="form-control" id="perolehan">
                                    <option value="">Pilih Perolehan</option>
                                    @foreach($perolehans as $key => $perolehan)
                                    <option value="{{ $key }}">{{ $perolehan }}</option>
                                    @endforeach
                                </select>
                                @error('perolehan')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                @endif
            </div>
        </div>
    </div>
</div>