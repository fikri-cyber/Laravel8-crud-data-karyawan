<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Data Karyawan</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="background: lightgray">

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <form action="{{ route('crud.store') }}" method="POST" enctype="multipart/form-data">
                        
                            @csrf

                            <div class="form-group">
                                <label class="font-weight-bold">Nama Karyawan</label>
                                <input type="text" class="form-control @error('Nama_Karyawan') is-invalid @enderror" name="Nama_Karyawan" value="{{ old('Nama_Karyawan') }}" placeholder="Masukan Nama Karyawan">
                            
                                <!-- error message untuk Nama Karyawan -->
                                @error('Nama Karyawan')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Umur</label>
                                <input type="text" class="form-control @error('Umur') is-invalid @enderror" name="Umur" value="{{ old('Umur') }}" placeholder="Masukan Umur">
                            
                                <!-- error message untuk Umur -->
                                @error('Umur')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Jenis Kelamin</label>
                                <input type="text" class="form-control @error('Jenis Kelamin') is-invalid @enderror" name="Jenis_Kelamin" value="{{ old('Jenis_Kelamin') }}" placeholder="Masukan Jenis Kelamin">
                            
                                <!-- error message untuk Jenis Kelamin -->
                                @error('Jenis Kelamin')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Alamat</label>
                                <input type="text" class="form-control @error('Alamat') is-invalid @enderror" name="Alamat" value="{{ old('Alamat') }}" placeholder="Masukan Alamat">
                            
                                <!-- error message untuk Alamat -->
                                @error('Alamat')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                            <button type="reset" class="btn btn-md btn-warning">RESET</button>

                        </form> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>