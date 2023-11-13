<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ URL::asset('css/styles.css') }}" rel="stylesheet" type="text/css" >
    <title>Editar marca</title>
</head>
<body>
<div class="container">
<div class="styled-table">
    <h1>Editar marca</h1>
    <form method="post" action="{{route('brand.update', ['brand' => $brand])}}">
        @csrf
        @method('put')
        <div>
            <p>Nome</p>
            <input type="text" name="name" placeholder="nome" value="{{$brand->name}}"/>
        </div>
        <div>
            <input type="submit" value="Salvar"/>
            <a class="cancel"  href="{{route('brand.index')}}">Cancelar</a>
        <div>
    </form>
</div>
</div>
</body>
</html>