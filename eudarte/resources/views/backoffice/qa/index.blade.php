@extends('admindex')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left" style="margin-top: 20px; margin-bottom: 20px;">
                <h2>Gestão das perguntas e respostas</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ url('/backoffice/Qa/create') }}"> Adicionar novo QA</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif


    <table class="table table-bordered">
        <tr>
            <th>Pergunta</th>
            <th>Resposta</th>
            <th width="280px">Ação</th>
        </tr>
        @foreach ($qas as $qa)
        <tr>

            <td>{{ $qa->pergunta }}</td>
            <td>{{ $qa->resposta }}</td>
            <td>
                <form action="{{ url('backoffice/Qa/destroy',$qa->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ url('/backoffice/Qa/show',$qa->id) }}">Visualizar</a>
                    <a class="btn btn-primary" href="{{ url('/backoffice/Qa/edit',$qa->id) }}">Editar</a>
                    {!! Form::open(array('url' => ['/backoffice/qas/destroy', $qa->id], 'method' => 'delete', 'style'=>'display:inline')) !!}
                        {!! Form::submit('Eliminar', ['class' => 'btn btn-danger', 'style' => 'background-color:#ec4c47d4;color:white']) !!}
                    {!! Form::close() !!}
                </form>
            </td>
        </tr>
        @endforeach
    </table>



@endsection
