@extends('layouts.app_nice')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header mb-2">
                        DATA PENDAFTARAN
                    </div>
                    <div class="card-body">
                        {!! Form::open([
                            'url' => url()->current(),
                            'method' => 'GET',
                        ]) !!}
                            <div class="form-group mb-3">
                                <label for="q">Pencarian Data Pasien</label>
                                {!! Form::text('q', request('q'), ['class' => 'form-control']) !!}
                                <span class="text-danger">{{ $errors->first('q') }}</span>
                            </div>
                            {!! Form::submit('Cari', ['class' => 'btn btn-primary']) !!}
                        {!! Form::close() !!}

                        <a href="{{ route('daftar.create') }}" class="btn btn-primary btn-sm mt-3">
                            Tambah Data
                        </a>                        
                        <div class="table-responsive">
                            <table class="table table-hover table-borderer">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Pasien</th>
                                        <th>Tanggal Pendaftaran</th>
                                        <th>Poli</th>
                                        <th>Keluhan</th>
                                        <th>Diagnosis</th>
                                        <th>Status Daftar</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($models as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->pasien->nama }}</td>
                                            <td>{{ $item->tanggal_daftar->format('D F Y') }}</td>
                                            <td>{{ $item->poli }}</td>
                                            <td>{{ $item->keluhan }}</td>
                                            <td>{{ $item->diagnosis }}</td>
                                            <td>{{ $item->status_daftar }}</td>
                                            <td>
                                                {!! Form::open([
                                                    'route' => ['daftar.destroy', $item->id],
                                                    'method' => 'delete',
                                                    'onsubmit' => 'return confirm("Yakin mau dihapus?")',
                                                ]) !!}
                                                <a href="{{ route('daftar.show', $item->id) }}" class="btn btn-info btn-sm ml-2">
                                                    Detail
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