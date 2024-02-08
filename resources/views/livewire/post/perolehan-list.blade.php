<div>
    <div class="row mt-3">
        <div class="col">
            <!-- Tabel Juara 1 -->
            <h2 class="text-center">Juara Umum</h2>
            <table class="table table-striped table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">{{ __('Kota') }}</th>
                        <th scope="col">{{ __('Desa') }}</th>
                        <th scope="col">{{ __('kelompok') }}</th>
                        <th scope="col">{{ __('jumlah') }}</th>
                        <th scope="col">{{ __('Perolehan') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @if(!empty($tables['Juara Umum']))
                    @foreach($tables['Juara Umum'] as $post)
                    <!-- Baris tabel -->
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $post->kota }}</td>
                        <td>{{ $post->desa }}</td>
                        <td>{{ $post->kelompok }}</td>
                        <td>{{ $post->jumlah }}</td>
                        <td>{{ $post->perolehan }}</td>
                    </tr>
                    @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col">
            <!-- Tabel Juara 1 -->
            <h2 class="text-center">Juara 1</h2>
            <table class="table table-striped table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">{{ __('Kota') }}</th>
                        <th scope="col">{{ __('Desa') }}</th>
                        <th scope="col">{{ __('kelompok') }}</th>
                        <th scope="col">{{ __('jumlah') }}</th>
                        <th scope="col">{{ __('Perolehan') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @if(!empty($tables['Juara 1']))
                    @foreach($tables['Juara 1'] as $post)
                    <!-- Baris tabel -->
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $post->kota }}</td>
                        <td>{{ $post->desa }}</td>
                        <td>{{ $post->kelompok }}</td>
                        <td>{{ $post->jumlah }}</td>
                        <td>{{ $post->perolehan }}</td>
                    </tr>
                    @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col">
            <!-- Tabel Juara 1 -->
            <h2 class="text-center">Juara 2</h2>
            <table class="table table-striped table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">{{ __('Kota') }}</th>
                        <th scope="col">{{ __('Desa') }}</th>
                        <th scope="col">{{ __('kelompok') }}</th>
                        <th scope="col">{{ __('jumlah') }}</th>
                        <th scope="col">{{ __('Perolehan') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @if(!empty($tables['Juara 2']))
                    @foreach($tables['Juara 2'] as $post)
                    <!-- Baris tabel -->
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $post->kota }}</td>
                        <td>{{ $post->desa }}</td>
                        <td>{{ $post->kelompok }}</td>
                        <td>{{ $post->jumlah }}</td>
                        <td>{{ $post->perolehan }}</td>
                    </tr>
                    @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col">
            <!-- Tabel Juara 1 -->
            <h2 class="text-center">Juara 3</h2>
            <table class="table table-striped table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">{{ __('Kota') }}</th>
                        <th scope="col">{{ __('Desa') }}</th>
                        <th scope="col">{{ __('kelompok') }}</th>
                        <th scope="col">{{ __('jumlah') }}</th>
                        <th scope="col">{{ __('Perolehan') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @if(!empty($tables['Juara 3']))
                    @foreach($tables['Juara 3'] as $post)
                    <!-- Baris tabel -->
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $post->kota }}</td>
                        <td>{{ $post->desa }}</td>
                        <td>{{ $post->kelompok }}</td>
                        <td>{{ $post->jumlah }}</td>
                        <td>{{ $post->perolehan }}</td>
                    </tr>
                    @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col">
            <!-- Tabel Juara 1 -->
            <h2 class="text-center">Juara 4</h2>
            <table class="table table-striped table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">{{ __('Kota') }}</th>
                        <th scope="col">{{ __('Desa') }}</th>
                        <th scope="col">{{ __('kelompok') }}</th>
                        <th scope="col">{{ __('jumlah') }}</th>
                        <th scope="col">{{ __('Perolehan') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @if(!empty($tables['Juara 4']))
                    @foreach($tables['Juara 4'] as $post)
                    <!-- Baris tabel -->
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $post->kota }}</td>
                        <td>{{ $post->desa }}</td>
                        <td>{{ $post->kelompok }}</td>
                        <td>{{ $post->jumlah }}</td>
                        <td>{{ $post->perolehan }}</td>
                    </tr>
                    @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col">
            <!-- Tabel Juara 1 -->
            <h2 class="text-center">Juara 5</h2>
            <table class="table table-striped table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">{{ __('Kota') }}</th>
                        <th scope="col">{{ __('Desa') }}</th>
                        <th scope="col">{{ __('kelompok') }}</th>
                        <th scope="col">{{ __('jumlah') }}</th>
                        <th scope="col">{{ __('Perolehan') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @if(!empty($tables['Juara 5']))
                    @foreach($tables['Juara 5'] as $post)
                    <!-- Baris tabel -->
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $post->kota }}</td>
                        <td>{{ $post->desa }}</td>
                        <td>{{ $post->kelompok }}</td>
                        <td>{{ $post->jumlah }}</td>
                        <td>{{ $post->perolehan }}</td>
                    </tr>
                    @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>