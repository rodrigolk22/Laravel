<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ URL::asset('css/styles.css') }}" rel="stylesheet" type="text/css" >
    <title>Criar modelo</title>
</head>
<body>
<div class="container">
<div class="styled-table">
    <h1>Crie um modelo de veículo</h1>
    <form method="post" action="{{route('vehicle_model.store')}}">
        @csrf
        @method('post')
        <div>
            <p>Nome</p>
            <input type="text" name="name" placeholder="nome"/>
        </div>
        <div>
            <input class="new" type="submit" value="Gravar"/>
            <a class="cancel"  href="{{route('vehicle_model.index')}}">Cancelar</a>
        <div>
    </form>
</div>
</div>
</body>
</html>