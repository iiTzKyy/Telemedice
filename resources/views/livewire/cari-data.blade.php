<div class="row">
    <div class="card mb-3">
        
        <div class="mt-1">
         <p><i class="fa fa-search mx-2"></i> Fitur Pencarian</p>
        </div>
        <input class="form-control mb-3" type="text" wire:model="search" placeholder="Cari Data Pengguna"  aria-label="search">
    </div>
    <div class="px-1">
                        <div class="card">
                            <div class="card-header">
                                <i class="fas fa-hospital me-1"></i>
                                Daftar Pengguna
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="table-dark">Name</th>
                                            <th class="table-dark">Golongan Darah</th>
                                            <th class="table-dark">Riwayat Penyakit</th>
                                            <th class="table-dark">Domisili</th>
                                            <th class="table-dark">Saturasi Udara</th>
                                            <th class="table-dark">Aksi</th>
                                        </tr>
                                    </thead>
                                    @foreach ($posts as $user)
                                    @if ($user->level == 'user')
                                    <tbody>
                                        <tr>
                                            <td>{{$user->fullname}}</td>
                                            <td>{{$user->goldar}}</td>
                                            <td>{{$user->riwayat_penyakit}}</td>
                                            <td>{{$user->domisili}}</td>
                                            @if ($user->saturasi < 180)
                                            <td class="table-danger">{{$user->saturasi}}</td>
                                            @else
                                            <td class="">{{$user->saturasi}}</td>
                                            @endif
                                            <td>
                                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-trash" aria-hidden="true"></i>
                                            Delete
                                            </button>
                                                <a href="{{url('lihat')}}/{{$user->id}}" type="button" class="btn btn-primary"><i class="fa fa-search" aria-hidden="true"></i> Lihat</a>
                                            </td>
                                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Anda Yakin Ingin Menghapus Data ?</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        ...
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                        <a href="{{url('post/hapus')}}/{{$user->id}}" type="button" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true" data-bs-toggle="modal" data-bs-target="#exampleModal"></i> Hapus</a>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </tr>
                                    </tbody>
                                    @endif
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
    <div class="text-center">
        <button id="load-more" class="btn btn-primary my-3">
        Load More
        </button>
</div>
    @if ($posts->count() == 0)
    <div class="alert alert-danger" role="alert">
        Data not found!
    </div>
@endif
</div>