<!-- resources/views/servico.index.php -->
 
@extends('adminlte::page')
 
@section('title', 'Page Title')
 
@section('sidebar')
    @parent
 
      <p>Servico - Show </p>
@endsection

@section('content')
      <p>Conteúdo</p>

      
      <p><strong>id:</strong> {{ $servico->id                  }}</p>
      <p><strong>nome:</strong> {{ $servico->nome              }}</p>
<<<<<<< Updated upstream
      <p><strong>valor:</strong> R$ {{ $servico->valor         }}</p>
=======
>>>>>>> Stashed changes
      <p><strong>criação:</strong> {{ $servico->created_at     }}</p>
    
@endsection
