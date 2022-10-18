<!-- resources/views/servico.create.php -->
 
@extends('adminlte::page')
 
@section('title', 'Page Title')
 
@section('sidebar')
    @parent
 
      <p>Servico - Create</p>
@endsection

@section('content')
      <p>Formulário</p>

      @if ($errors->any())
      <div class="alert alert-danger">
         <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error }}</li>
            @endforeach
         </ul>
      </div>
      @endif

      {!! Form::open(['url' => 'servico/create']) !!}
      {{  Form::label('nome', 'Nome:') }} <br>
      {{  Form::text('nome') }} <br><br>

<<<<<<< Updated upstream
      {{  Form::label('valor', 'Valor:') }} <br>
      {{  Form::text('valor') }} <br><br>
      
=======
>>>>>>> Stashed changes
      {{  Form::submit('Enviar') }}

      {!! Form::close() !!}
    
@endsection
