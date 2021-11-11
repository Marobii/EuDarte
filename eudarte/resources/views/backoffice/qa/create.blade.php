@extends('admindex')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left" style="margin-top: 20px; margin-bottom: 20px;">
            <h2>Adicionar QA</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ url('/backoffice/Qa/index') }}"> Voltar</a>
        </div>
    </div>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

{{-- Form model para adicionar algo a bd --}}
{!! Form::open(array('url' => ['/backoffice/Qa/store'],'method'=>'post')) !!}
    @csrf

     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Pergunta:</strong>
                {!! Form::text('pergunta', null, array('placeholder' => 'Pergunta','class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Resposta:</strong>
                {!! Form::textarea('resposta', null, array('placeholder' => 'Resposta','class' => 'form-control', 'style' => 'height:150px')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submeter</button>
        </div>
    </div>
    {!! Form::close() !!}
</form>
@endsection
