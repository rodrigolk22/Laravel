<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ URL::asset('css/styles.css') }}" rel="stylesheet" type="text/css" >
    <title>Editar modelo</title>
</head>
<body>
<div class="container">
<div class="styled-table">
    <h1>Editar modelo</h1>
    <form method="post" action="{{route('vehicle_model.update', ['vehicle_model' => $vehicle_model])}}">
        @csrf
        @method('put')
        <div>
            <p>Nome</p>
            <input type="text" name="name" placeholder="nome" value="{{$vehicle_model->name}}"/>
        </div>
        <div>
            <input type="submit" value="Salvar"/>
            <a class="cancel"  href="{{route('vehicle_model.index')}}">Cancelar</a>
        <div>
    </form>
</div>
</div>
</body>
</html>