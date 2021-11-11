@extends('admindex')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left" style="margin-top: 20px; margin-bottom: 20px;">
                <h2>Visualização</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ url('/backoffice/Team/index') }}"> Voltar</a>
            </div>
        </div>
    </div>

    <img class="rounded float-left" src="{{ asset('/imgs/'.$team->img) }}">

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $team->name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Details:</strong>
                {{ $team->desc }}
            </div>
        </div>
    </div>
@endsection
