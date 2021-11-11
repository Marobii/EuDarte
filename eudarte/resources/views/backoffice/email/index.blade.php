@extends('admindex')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left" style="margin-top: 20px; margin-bottom: 20px;">
                <h2>Contactos pelo website</h2>
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
            <th>Email</th>
            <th>Assunto</th>
            <th>Mensagem</th>
            <th width="280px">Ação</th>
        </tr>
        @foreach ($emails as $email)
        <tr>

            <td>{{ $email->nome }}</td>
            <td>{{ $email->email }}</td>
            <td>{{ $email->assunto }}</td>
            <td>{{ $email->mensagem }}</td>
            <td>
                <form action="{{ url('backoffice/Email/destroy',$email->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ url('/backoffice/Email/show',$email->id) }}">Visualizar</a>
                    {!! Form::open(array('url' => ['/backoffice/emails/destroy', $email->id], 'method' => 'delete', 'style'=>'display:inline')) !!}
                        {!! Form::submit('Eliminar', ['class' => 'btn btn-danger', 'style' => 'background-color:#ec4c47d4;color:white']) !!}
                    {!! Form::close() !!}
                </form>
            </td>
        </tr>
        @endforeach
    </table>

@endsection
