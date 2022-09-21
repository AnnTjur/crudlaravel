<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Data Post - SantriKoding.com</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="background: lightgray">

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <form action="{{ route('dashboard.update', ['dashboard'=> $dinas->kd_dl]) }}" method="POST" enctype="multipart/form-data">

                            @csrf
                            @method('PUT')

                    

                            <div class="form-group">
                                            <label class="font-weight-bold">NIP</label>
                                            <input type="text" class="form-control @error('nip') is-invalid @enderror" name="nip" value="{{ $dinas->nip }}" placeholder="Masukkan NIP">
                                        
                                            <!-- error message untuk title -->
                                            @error('nip')
                                                <div class="alert alert-danger mt-2">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label class="font-weight-bold">NAMA</label>
                                            <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ $dinas->nama }}" placeholder="Masukkan NAMA">
                                        
                                            <!-- error message untuk title -->
                                            @error('nip')
                                                <div class="alert alert-danger mt-2">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label class="font-weight-bold">Kota Asal</label>
                                            <input type="text" class="form-control @error('kota_asal') is-invalid @enderror" name="kota_asal" value="{{ $dinas->kota_asal }}" placeholder="Masukkan NAMA">
                                        
                                            <!-- error message untuk title -->
                                            @error('kota_asal')
                                                <div class="alert alert-danger mt-2">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label class="font-weight-bold">Status Asal</label>
                                            <input type="text" class="form-control @error('st_asal') is-invalid @enderror" name="st_asal" value="{{ $dinas->st_asal }}" placeholder="Masukkan NAMA">
                                        
                                            <!-- error message untuk title -->
                                            @error('st_asal')
                                                <div class="alert alert-danger mt-2">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label class="font-weight-bold">Keterangan Asal</label>
                                            <input type="text" class="form-control @error('ket_asal') is-invalid @enderror" name="ket_asal" value="{{ $dinas->ket_asal }}" placeholder="Masukkan NAMA">
                                        
                                            <!-- error message untuk title -->
                                            @error('ket_asal')
                                                <div class="alert alert-danger mt-2">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label class="font-weight-bold">Kota Tujuan</label>
                                            <input type="text" class="form-control @error('kota_tujuan') is-invalid @enderror" name="kota_tujuan" value="{{ $dinas->kota_tujuan }}" placeholder="Masukkan NAMA">
                                        
                                            <!-- error message untuk title -->
                                            @error('kota_tujuan')
                                                <div class="alert alert-danger mt-2">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label class="font-weight-bold">Status Pulang</label>
                                            <input type="text" class="form-control @error('st_pulang') is-invalid @enderror" name="st_pulang" value="{{ $dinas->st_pulang }}" placeholder="Masukkan NAMA">
                                        
                                            <!-- error message untuk title -->
                                            @error('st_pulang')
                                                <div class="alert alert-danger mt-2">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label class="font-weight-bold">Keterangan Pulang</label>
                                            <input type="text" class="form-control @error('ket_pulang') is-invalid @enderror" name="ket_pulang" value="{{ $dinas->ket_pulang }}" placeholder="Masukkan NAMA">
                                        
                                            <!-- error message untuk title -->
                                            @error('ket_pulang')
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
<script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'content' );
</script>
</body>
</html>