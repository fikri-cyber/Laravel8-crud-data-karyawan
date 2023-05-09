<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Data Karyawan</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="background: lightgray">

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <form action="{{ route('crud.update', $crud->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <!-- <div class="form-group">
                                <label class="font-weight-bold">GAMBAR</label>
                                <input type="file" class="form-control" name="image">
                            </div> -->

                            <div class="form-group">
                                <label class="font-weight-bold">Nama Karyawan</label>
                                <input type="text" class="form-control @error('Nama_Karyawan') is-invalid @enderror" name="Nama_Karyawan" value="{{ old('Nama_Karyawan', $crud->Nama_Karyawan) }}" placeholder="Masukkan Nama Karyawan">
                            
                                <!-- error message untuk Nama Karyawan -->
                                @error('Nama_Karyawan')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Umur</label>
                                <input type="text" class="form-control @error('Umur') is-invalid @enderror" name="Umur" value="{{ old('Umur', $crud->Umur) }}" placeholder="Masukkan Umur">
                            
                                <!-- error message untuk Umur -->
                                @error('Umur')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Jenis Kelamin</label>
                                <input type="text" class="form-control @error('Jenis_Kelamin') is-invalid @enderror" name="Jenis_Kelamin" value="{{ old('Jenis_Kelamin', $crud->Jenis_Kelamin) }}" placeholder="Masukkan Jenis Kelamin">
                            
                                <!-- error message untuk Jenis Kelamin -->
                                @error('Jenis_Kelamin')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Alamat</label>
                                <input type="text" class="form-control @error('Alamat') is-invalid @enderror" name="Alamat" value="{{ old('Alamat', $crud->Alamat) }}" placeholder="Masukkan Alamat">
                            
                                <!-- error message untuk Alamat -->
                                @error('Alamat')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-md btn-primary">UPDATE</button>
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