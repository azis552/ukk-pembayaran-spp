@extends('template.main')
@section('halaman','Data Siswa')
@section('title', 'Siswa')

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
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">DataTable with default features</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="tablekelas" class="table table-bordered table-striped">
                            <a href="{{ route('siswa.create') }}" type="button" class="btn btn-primary mb-2">Tambah</a>
                            <thead>
                                <tr>
                                    <th>Nisn</th>
                                    <th>Nama</th>
                                    <th>Kelas</th>
                                    <th>Spp</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($siswas as $i)
                                    <tr>
                                        <td>{{ $i->nisn }}</td>
                                        <td>{{ $i->nama }}</td>
                                        <td>{{ $i->kelas->kompetensi_keahlian }}</td>
                                        <td>{{ 'Rp '.number_format($i->spp->nominal, 0, ',', '.') }}</td>
                                        <td class="text-center">
                                            <form onsubmit="return confirm('Apakah Anda Yakin ?');"action="{{ route('kelas.destroy', $i->id) }}" method="POST">
                                                <a href="{{ route('kelas.edit', $i->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection
