@extends('admindex')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left" style="margin-top: 20px; margin-bottom: 20px;" >
                <h2>Gestão da equipa EuD'arte</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ url('/backoffice/Team/create') }}"> Adicionar membro</a>
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
            <th>Nome</th>
            <th>Descrição</th>
            <th width="280px">Ação</th>
        </tr>
        @foreach ($teams as $team)
        <tr>

            <td>{{ $team->name }}</td>
            <td>{{ $team->desc }}</td>
            <td>
                <form action="{{ url('backoffice/Team/destroy',$team->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ url('/backoffice/Team/show',$team->id) }}">Visualizar</a>
                    <a class="btn btn-primary" href="{{ url('/backoffice/Team/edit',$team->id) }}">Editar</a>
                    {!! Form::open(array('url' => ['/backoffice/Team/destroy', $team->id], 'method' => 'delete', 'style'=>'display:inline')) !!}
                        {!! Form::submit('Eliminar', ['class' => 'btn btn-danger', 'style' => 'background-color:#ec4c47d4;color:white']) !!}
                    {!! Form::close() !!}
                </form>
            </td>
        </tr>
        @endforeach
    </table>



@endsection
