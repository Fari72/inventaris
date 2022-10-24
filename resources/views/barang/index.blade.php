@extends('template.layout')

@section('title')
    Barang
@endsection

@section('content')
    <div class="section-header">
        Barang
    </div>

    <div class="section-body">
        <div class="row">
            <div class="col-12 col-md-7 col-lg-7">
                <div class="card">
                    <div class="card-header">
                        <h4>Data Barang</h4>
                    </div>

                    <div class="card-body">
                        <table class="table table-stripped">
                            <thead>
                                <tr>
                                    <td style="width: 5%">#</td>
                                    <td>Kode</td>
                                    <td>Nama</td>
                                    <td>Kategori</td>
                                    <td>Tempat</td>
                                    <td>Stok</td>
                                    <td>Ket</td>
                                    <td>Aksi</td>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
            
             {{-- Tambah Barang --}}
             <div class="col-12 col-md-5 col-lg-5">
                <div class="card">
                    {{-- Judul --}}
                    <div class="card-header">
                        <h4>Tambah Barang</h4>
                    </div>

                    {{-- Form Tambah --}}
                    <div class="card-body">
                        
                        {{-- Add Nama --}}
                        <label class="mt-2" for="nama">Nama Barang</label>
                        <input type="text" name="nama" id="nama" value="{{ old('nama')}}" class="form-control @error('nama') is-invalid @enderror">
                        @error('nama')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror

                        {{-- Add Kategori --}}
                        <label class="mt-2" for="nama">Kategori</label>
                        <select type="text" name="kategori" id="kategori" class="form-control @error('kategori') is-invalid @enderror">
                        @error('kategori')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                            <option value="Makanan" selected>Makanan</option>
                            <option value="Minuman">Minuman</option>
                        </select>

                        {{-- Add Tempat --}}
                        <label class="mt-2" for="nama">Tempat</label>
                        <select type="text" name="tempat" id="tempat" class="form-control @error('tempat') is-invalid @enderror">
                        @error('tempat')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                            <option value="Rak A" selected>Rak A</option>
                            <option value="Rak B">Rak B</option>
                            <option value="Rak C">Rak C</option>
                            <option value="Rak C">Rak C</option>
                        </select>

                        {{-- Add Stok --}}
                        <label class="mt-2" for="nama">Stok Barang</label>
                        <input type="number" name="stok" id="stok" value="{{ old('stok')}}" class="form-control @error('stok') is-invalid @enderror">
                        @error('stok')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                        
                        {{-- Add Ket --}}
                        <label class="mt-2" for="nama">Ket Barang</label>
                        <input type="text" name="ket" id="ket" value="{{ old('ket')}}" class="form-control @error('ket') is-invalid @enderror">
                        @error('ket')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror

                        {{-- Tombol simpan dan batal --}}
                        <div class="footer mt-2">
                            <button type="submit" class="btn btn-success">Simpan</button>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
@endsection