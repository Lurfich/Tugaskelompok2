@extends('layouts.app_nice')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">FORM PASIEN</div>

                <div class="card-body">
                    {!! Form::model($model, [
                        'route' => $route,
                        'method' => $method,
                        'files' => true,
                    ]) !!}
                        <div class="form-group mb-3">
                            <label for="nama">Nama Pasien</label>
                            {!! Form::text('nama', null, ['class' => 'form-control']) !!}
                            <span class="text-danger">{{ $errors->first('nama') }}</span>
                        </div>
                        <div class="form-group mb-3">
                            <label for="umur">Umur</label>
                            {!! Form::text('umur', null, ['class' => 'form-control']) !!}
                            <span class="text-danger">{{ $errors->first('umur') }}</span>
                        </div>
                        
                        <div class="form-check mt-3">
                            {!! Form::radio('jenis_kelamin', 'laki-laki', null, [
                                'class' => 'form-check-input',
                                'id' => 'jenis_kelamin_lk'
                            ]) !!}
                            <label class="form-check-label" for="jenis_kelamin_lk">
                                Laki - laki
                            </label>
                        </div>
                        <div class="form-check mb-3">
                            {!! Form::radio('jenis_kelamin', 'perempuan', null, [
                                'class' => 'form-check-input',
                                'id' => 'jenis_kelamin_pr'
                            ]) !!}
                            <label class="form-check-label" for="jenis_kelamin_pr">
                                Perempuan
                            </label>
                        </div>
                        <div class="form-group mb-3">
                            <label for="foto">foto</label>
                            {!! Form::file('foto', ['class' => 'form-control']) !!}
                            <span class="text-danger">{{ $errors->first('foto') }}</span>
                        </div>

                        {!! Form::submit($namaTombol, ['class' => 'btn btn-primary']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
