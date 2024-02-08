<div>
    <div class="row container">
        <div class="col">

            @if(!empty(session('message')))
            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    Swal.fire({
                        icon: 'error',
                        title: 'Selamat!',
                        text: '{{ session("message") }}',
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'OK'
                    });
                });
            </script>
            @endif

            <div class="mb-3 mt-3">
                <button class="btn btn-success" wire:click="downloadExcel"><i class="fas fa-file-excel"></i> Download Excel</button>
                <input type="text" placeholder="cari kota atau kelompok ..." class="form-control my-2" wire:model="keyword">
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
                        <th scope="col">{{ __('Perolehan') }}</th>
                        <th scope="col">{{ __('aksi') }}</th>
                    </tr>
                </thead>

                <!-- membuat sortable -->
                <tbody wire:sortable="updatePostOrder">
                    @if(!empty($posts))
                    @foreach ($posts as $post)
                    <tr wire:sortable.item="{{ $post->id }}" wire:key="post-{{ $post->id }}">
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $post->kota }}</td>
                        <td>{{ $post->desa }}</td>
                        <td wire:sortable.handle role="button">{{ $post->kelompok }}</td>
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
                        <td>{{ $post->perolehan }}</td>
                        <td>
                            <a href="{{ url('post/edit/' . $post->id) }}" class="btn btn-sm btn-primary"><i class="fas fa-tasks"></i></a>
                            <!-- Button hapus langsung -->
                            <!-- <button type="button" wire:click="deletePost({{ $post->id }})" class="btn btn-sm btn-danger">
                                <i class="fas fa-trash-alt"></i>
                            </button> -->

                            <!-- Button hapus pakai modal -->
                            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal{{ $post->id }}">
                                <i class="fas fa-trash-alt"></i>
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="deleteModal{{ $post->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Hapus Data</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            Apakah anda yakin ingin menghapus data ini {{ $post->kelompok }}?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                                            <button type="button" wire:click="deletePost({{ $post->id }})" class="btn btn-danger">Ya</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </td>
                    </tr>
                    @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>