@extends('../layouts.app')

@section('title', 'Tambah Kategori')

@section('content')
<div class="container">   
    <div class="row justify-content-center mt-4">
        <div class="col-12">
            <div class="card">                                
                <div class="card-body">        
                    <form action="{{ route('admin.kategori.store') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="">Nama Kategori</label>
                            <input type="text" class="form-control form-control-sm @error('nama_kategori') is-invalid @enderror" name="nama_kategori">
                            @error('nama_kategori')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>                        
                        <button class="btn btn-sm btn-primary mt-2" type="submit">Tambah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection