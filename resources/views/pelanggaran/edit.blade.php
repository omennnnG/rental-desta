@extends('layouts.main')
@section('content')
<section class="section">
    <form action="{{ route('pelanggaran.update',$data->id) }}" method="POST">
        @csrf
        @method('PUT')
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Edit Data Pelanggaran</h4>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="exampleIndputNamaPelanggaran">Nama Pelanggaran</label>
                        <input type="text" name="nama_pelanggaran" value="{{ $data->nama_pelanggaran }}" class="form-control" id="exampleInputPelanggaran" placeholder="Masukan Nama Pelanggaran">
                        @error('nama_pelanggaran')
                        <small>{{ $message }}</small>
                    @enderror
                    </div>
                    
                    <div class="form-group">
                        <label for="exampleInputSanksi">Sanksi</label>
                        <input type="text" name="sanksi" value="{{ $data->nama_pelanggaran }}" class="form-control" id="exampleInputSanksi" placeholder="Masukan Sanksi">
                        @error('sanksi')
                        <small>{{ $message }}</small>
                    @enderror
                    </div>
                    
                    <div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
</section>
@endsection