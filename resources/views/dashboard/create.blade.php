@extends('layouts.base')

@section('content')

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Add Data</h1>
                    <div class="container mt-5 mb-5">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card border-0 shadow rounded">
                                <div class="card-body">
                                    <form action="{{ route('dashboard.store') }}" method="POST" enctype="multipart/form-data">
                                    
                                        @csrf

                                        <div class="form-group">
                                            <label class="font-weight-bold">NIP</label>
                                            <input type="text" class="form-control @error('nip') is-invalid @enderror" name="nip" value="{{ old('nip') }}" placeholder="Masukkan NIP">
                                        
                                            <!-- error message untuk title -->
                                            @error('nip')
                                                <div class="alert alert-danger mt-2">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label class="font-weight-bold">NAMA</label>
                                            <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama') }}" placeholder="Masukkan NAMA">
                                        
                                            <!-- error message untuk title -->
                                            @error('nip')
                                                <div class="alert alert-danger mt-2">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label class="font-weight-bold">Kota Asal</label>
                                            <input type="text" class="form-control @error('kota_asal') is-invalid @enderror" name="kota_asal" value="{{ old('kota_asal') }}" placeholder="Masukkan NAMA">
                                        
                                            <!-- error message untuk title -->
                                            @error('kota_asal')
                                                <div class="alert alert-danger mt-2">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label class="font-weight-bold">Status Asal</label>
                                            <input type="text" class="form-control @error('st_asal') is-invalid @enderror" name="st_asal" value="{{ old('st_asal') }}" placeholder="Masukkan NAMA">
                                        
                                            <!-- error message untuk title -->
                                            @error('st_asal')
                                                <div class="alert alert-danger mt-2">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label class="font-weight-bold">Keterangan Asal</label>
                                            <input type="text" class="form-control @error('ket_asal') is-invalid @enderror" name="ket_asal" value="{{ old('ket_asal') }}" placeholder="Masukkan NAMA">
                                        
                                            <!-- error message untuk title -->
                                            @error('ket_asal')
                                                <div class="alert alert-danger mt-2">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label class="font-weight-bold">Kota Tujuan</label>
                                            <input type="text" class="form-control @error('kota_tujuan') is-invalid @enderror" name="kota_tujuan" value="{{ old('kota_tujuan') }}" placeholder="Masukkan NAMA">
                                        
                                            <!-- error message untuk title -->
                                            @error('kota_tujuan')
                                                <div class="alert alert-danger mt-2">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label class="font-weight-bold">Status Pulang</label>
                                            <input type="text" class="form-control @error('st_pulang') is-invalid @enderror" name="st_pulang" value="{{ old('st_pulang') }}" placeholder="Masukkan NAMA">
                                        
                                            <!-- error message untuk title -->
                                            @error('st_pulang')
                                                <div class="alert alert-danger mt-2">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label class="font-weight-bold">Keterangan Pulang</label>
                                            <input type="text" class="form-control @error('ket_pulang') is-invalid @enderror" name="ket_pulang" value="{{ old('ket_pulang') }}" placeholder="Masukkan NAMA">
                                        
                                            <!-- error message untuk title -->
                                            @error('ket_pulang')
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

                    
@endsection