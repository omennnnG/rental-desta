{{-- dashboard --}}
@extends('layouts.main')
@section('content')
<section class="section">
    <div class="row" id="table-inverse">
        <div class="col-12">
            <div class="col-12">
                <a href="{{ route('pelanggaran.create') }}" class="btn btn-primary mb-3">Tambah Data</a>
             <div class="card">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Data Pelanggaran</h4>
                </div>
                <div class="card-content">
                    
                    <!-- table with dark -->
                    <div class="table-responsive">
                        <table class="table table-dark mb-0">
                            <thead>
                                <tr>
                                    <th>NO</th>
                                    <th>Nama Pelanggaran</th>
                                    <th>Sanksi</th>
                                    <th>ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $d)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $d->nama_pelanggaran }}</td>
                                <td>{{ $d->sanksi }}</td>
                                <td>
                                    <a href="{{ route('pelanggaran.edit',['id' => $d->id]) }}" class="btn btn-primary"><i class="fas fa-pen"></i>Edit</a>
                                    <a data-toggle="modal" data-target="#modal-hapus{{ $d->id }}" class="btn btn-danger"><i class="fas fa-trash"></i>Hapus</a>  
                                 </td>
                                  </tr>
                                  <div class="modal fade text-left" id="danger" tabindex="-1" role="dialog"
                                            aria-labelledby="myModalLabel120" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
                                                role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header bg-danger">
                                                        <h5 class="modal-title white" id="myModalLabel120">Danger Modal
                                                        </h5>
                                                        <button type="button" class="close" data-bs-dismiss="modal"
                                                            aria-label="Close">
                                                            <i data-feather="x"></i>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Tart lemon drops macaroon oat cake chocolate toffee chocolate
                                                        bar icing. Pudding jelly beans
                                                        carrot cake pastry gummies cheesecake lollipop. I love cookie
                                                        lollipop cake I love sweet
                                                        gummi bears cupcake dessert.
                                                    </div>
                                                    <div class="modal-footer">
                                                        <form action="{{ route('pelanggaran.delete,['id' => $d -> id]') }}" method="POST">
                                                           
                                                        <button type="button" class="btn btn-light-secondary"
                                                            data-bs-dismiss="modal">
                                                            <i class="bx bx-x d-block d-sm-none"></i>
                                                            <span class="d-none d-sm-block">Close</span>
                                                        </button>
                                                        <button type="button" class="btn btn-danger ml-1"
                                                            data-bs-dismiss="modal">
                                                            <i class="bx bx-check d-block d-sm-none"></i>
                                                            <span class="d-none d-sm-block">Accept</span>
                                                        </button>
                                                        @csrf
                                                        @method('DELETE')
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection