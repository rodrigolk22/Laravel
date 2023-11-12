<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Editar modelo</h1>
    <form method="post" action="{{route('vehicle_model.update', ['vehicle_model' => $vehicle_model])}}">
        @csrf
        @method('put')
        <div>
            <label>Nome</label>
            <input type="text" name="name" placeholder="nome" value="{{$vehicle_model->name}}"/>
        </div>
        <div>
            <input type="submit" value="Salvar"/>
        <div>
    </form>
</body>
</html>