@extends('template.main')
@section('halaman','Data Siswa')
@section('title', 'Tambah Siswa')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">@yield('halaman')</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">@yield('halaman')</a></li>
                            <li class="breadcrumb-item active">@yield('title')</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <form action="{{ route('siswa.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label class="font-weight-bold">Nisn</label>
                                <input type="text" class="form-control @error('nisn') is-invalid @enderror"
                                    name="nisn" value="{{ old('nisn') }}" placeholder="Masukkan NISN">
                                <!-- error message untuk kode kelas -->
                                @error('nisn')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            

                            <div class="form-group">
                                <label class="font-weight-bold">Nis</label>
                                <input type="text" class="form-control @error('nis') is-invalid @enderror"
                                    name="nis" value="{{ old('nis') }}"
                                    placeholder="Masukkan NIS">
                                <!-- error message untuk keterangan kelas -->
                                @error('nis')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Nama</label>
                                <input type="text" class="form-control @error('nama') is-invalid @enderror"
                                    name="nama" value="{{ old('nama') }}"
                                    placeholder="Masukkan NAMA">
                                <!-- error message untuk keterangan kelas -->
                                @error('nis')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Alamat</label>
                                <input type="text" class="form-control @error('alamat') is-invalid @enderror"
                                    name="alamat" value="{{ old('alamat') }}"
                                    placeholder="Masukkan alamat">
                                <!-- error message untuk keterangan kelas -->
                                @error('alamat')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">No Telepon</label>
                                <input type="text" class="form-control @error('no_telp') is-invalid @enderror"
                                    name="no_telp" value="{{ old('no_telp') }}"
                                    placeholder="Masukkan Nomer Telepon">
                                <!-- error message untuk keterangan kelas -->
                                @error('no_telp')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Kelas</label>
                                <select name="id_kelas" id="id_kelas" class="form-control">
                                    <option value="">Pilih Kelas</option>
                                    @foreach ($kelas as $i)
                                        <option value="{{ $i->id_kelas }}">{{ $i->kompetensi_keahlian }}</option>
                                    @endforeach
                                </select>
                                @error('no_telp')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Spp</label>
                                <select name="id_spp" id="id_spp" class="form-control">
                                    <option value="">Pilih SPP</option>
                                    @foreach ($spp as $i)
                                        <option value="{{ $i->id_spp }}">{{"tahun : ".$i->tahun." | ".'Rp '.number_format($i->nominal, 0, ',', '.') }}</option>
                                    @endforeach
                                </select>
                                @error('no_telp')
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
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
@endsection