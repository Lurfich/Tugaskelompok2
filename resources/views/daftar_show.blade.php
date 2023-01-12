@extends('layouts.app_nice')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header mb-2">
                        DATA PENDAFTARAN <u>{{ $daftar->pasien->nama }}</u>
                    </div>
                    <div class="card-body">
                        <h4>INDENTITAS PASIEN</h4>
                        <table class="table table-sm table-striped">
                            <tr>
                                <td width="15%">Nama</td>
                                <td>: {{ $daftar->pasien->nama }}</td>
                            </tr>
                            <tr>
                                <td>Umur</td>
                                <td>: {{ $daftar->pasien->umur }}</td>
                            </tr>
                            <tr>
                                <td>Jeni Kelamain</td>
                                <td>: {{ $daftar->pasien->jenis_kelamin }}</td>
                            </tr>
                        </table>
                        <h4>Rekam Medik</h4>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>NO</th>
                                    <th>Tanggal Daftar</th>
                                    <th>Keluhan</th>
                                    <th>diagnosis</th>
                                    <th>tindakan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($daftar->pasien->daftar as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->tanggal_daftar }}</td>
                                        <td>{{ $item->keluhan }}</td>
                                        <td>{{ $item->diagnosis }}</td>
                                        <td>{{ $item->tindakan }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <hr>

                        <h4>Data Pendaftaran</h4>
                        <table class="table table-sm table-striped">
                            <tr>
                                <td width="15%">Tanggal daftar</td>
                                <td>: {{ $daftar->tanggal_daftar->format('d F Y') }}</td>
                            </tr>
                            <tr>
                                <td>Poli</td>
                                <td>: {{ $daftar->poli }}</td>
                            </tr>
                            <tr>
                                <td>Keluhan</td>
                                <td>: {{ $daftar->keluhan }}</td>
                            </tr>
                            <tr>
                                <td>Diagnosis</td>
                                <td>: {{ $daftar->diagnosis }}</td>
                            </tr>
                            <tr>
                                <td>Tindakan</td>
                                <td>: {{ $daftar->tindakan }}</td>
                            </tr>
                        </table>
                        <hr>
                        {!! Form::open([
                            'route' => ['daftar.update', $daftar->id],
                            'method' => 'PUT',
                        ]) !!}

                        <div class="form-group mb-3">
                            <label for="diagnosis">Diagnosis</label>
                            {!! Form::textarea('diagnosis', $daftar->diagnosis, ['class' => 'form-control', 'row' => 3]) !!}
                            <span class="text-danger">{{ $errors->first('diagnosis') }}</span>
                        </div>

                        <div class="form-group mb-3">
                            <label for="tindakan">Tindakan</label>
                            {!! Form::textarea('tindakan', $daftar->tindakan, ['class' => 'form-control', 'row' => 3]) !!}
                            <span class="text-danger">{{ $errors->first('tindakan') }}</span>
                        </div>
                        {!! Form::submit('SIMPAN', ['class' => 'btn btn-primary']) !!}
                        {!! Form::close() !!}
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection