@extends('layouts.app_nice')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header mb-2">
                        DATA PASIEN
                    </div>
                    <div class="card-body">
                        <a href="{{ route('pasien.create') }}" class="btn btn-primary">Tambah</a>
                        <div class="table-responsive">
                            <table class="table table-hover table-borderer">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Foto</th>
                                        <th>No. Pasien</th>
                                        <th>Nama</th>
                                        <th>Umur</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($models as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>
                                                @if ($item->foto != null)
                                                    <img src="{!! \Storage::url($item->foto) !!}" width="100">
                                                @endif
                                            </td>
                                            <td>{{ $item->no_pasien }}</td>
                                            <td>{{ $item->nama }}</td>
                                            <td>{{ $item->umur }}</td>
                                            <td>{{ $item->jenis_kelamin }}</td>
                                            <td>
                                                {!! Form::open([
                                                    'route' => ['pasien.destroy', $item->id],
                                                    'method' => 'delete',
                                                    'onsubmit' => 'return confirm("Yakin mau dihapus?")',
                                                ]) !!}
                                                <a href="{{ route('pasien.edit', $item->id) }}"
                                                    class="btn btn-warning btn-sm ml-2">
                                                    Edit
                                                </a>
                                                <button type="submit" class="btn btn-danger btn-sm ml-2">
                                                    Hapus
                                                </button>
                                                {!! Form::close() !!}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
@endsection