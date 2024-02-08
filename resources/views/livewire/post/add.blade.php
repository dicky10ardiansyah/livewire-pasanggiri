<div>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header text-center">{{ __('Tambah Data') }}</div>
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

                <form wire:submit.prevent="save">
                    @csrf
                    <div class="form-group">
                        <label for="kota">{{ __('Kota/Kabupaten') }}</label>
                        <select class="form-control @error('kota') is-invalid @enderror" wire:model="kota">
                            <option value="">Pilih Kota</option>
                            <option value="Batam">Batam</option>
                            <option value="Tanjung Pinang">Tanjung Pinang</option>
                            <option value="Bintan">Bintan</option>
                            <option value="Karimun">Karimun</option>
                        </select>
                        @error('kota')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="desa">{{ __('Desa') }}</label>
                        <input type="text" class="form-control @error('desa') is-invalid @enderror" wire:model="desa">
                        @error('desa')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="kelompok">{{ __('Kelompok') }}</label>
                        <input type="text" class="form-control @error('kelompok') is-invalid @enderror" wire:model="kelompok">
                        @error('kelompok')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="jumlah">{{ __('Jumlah') }}</label>
                        <input type="text" class="form-control @error('jumlah') is-invalid @enderror" wire:model="jumlah">
                        @error('jumlah')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>