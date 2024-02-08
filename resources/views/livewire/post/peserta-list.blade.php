<div>
    <div class="row container">
        <div class="col">

            <div class="mb-3 mt-3">
                <input type="text" placeholder="cari kota atau kelompok ..." class="form-control" wire:model="keyword">
            </div>
            <table class="table table-striped table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">{{ __('Kota') }}</th>
                        <th scope="col">{{ __('Desa') }}</th>
                        <th scope="col">{{ __('kelompok') }}</th>
                        <th scope="col">{{ __('jumlah') }}</th>
                        <th scope="col">{{ __('Status') }}</th>
                    </tr>
                </thead>

                <!-- membuat sortable -->
                <tbody>
                    @if(!empty($posts))
                    @foreach ($posts as $post)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $post->kota }}</td>
                        <td>{{ $post->desa }}</td>
                        <td>{{ $post->kelompok }}</td>
                        <td>{{ $post->jumlah }}</td>
                        <!-- logika status -->
                        @php
                        $statusClass = '';
                        switch ($post->status) {
                        case 'persiapan':
                        $statusClass = 'badge-warning';
                        break;
                        case 'sedang_tampil':
                        $statusClass = 'badge-secondary';
                        break;
                        case 'selesai':
                        $statusClass = 'badge-success';
                        break;
                        default:
                        $statusClass = 'badge-info';
                        break;
                        }
                        @endphp

                        <td>
                            <p class="badge {{ $statusClass }}">{{ $post->status }}</p>
                        </td>
                    </tr>
                    @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>