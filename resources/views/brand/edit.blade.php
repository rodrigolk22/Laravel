<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Editar marca</h1>
    <form method="post" action="{{route('brand.update', ['brand' => $brand])}}">
        @csrf
        @method('put')
        <div>
            <label>Nome</label>
            <input type="text" name="name" placeholder="nome" value="{{$brand->name}}"/>
        </div>
        <div>
            <input type="submit" value="Salvar"/>
        <div>
    </form>
</body>
</html>