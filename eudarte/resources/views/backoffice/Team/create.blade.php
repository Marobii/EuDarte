@extends('admindex')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Inserir novo membro</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ url('/backoffice/Team/index') }}"> Voltar</a>
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
{!! Form::open(array('url' => ['/backoffice/Team/store'],'method'=>'post', 'files'=> true)) !!}
    @csrf

     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Desc:</strong>
                {!! Form::textarea('desc', null, array('placeholder' => 'descrição','class' => 'form-control', 'style' => 'height:150px')) !!}
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Imagem:</strong>
                <input type="file" name="image" class="form-control-file">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submeter</button>
        </div>
    </div>
    {!! Form::close() !!}
</form>
@endsection
