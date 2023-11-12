<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Veículos</h1>
    <div>
        @if(session()->has('success'))
            <div>
                {{session('success')}}
            </div>
        @endif
    </div>
    <div>
        <div>
            <a href="{{route('vehicle.create')}}">Criar veículo</a>
        </div>
        <table border="1">
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Preço</th>
                <th>Imagem</th>
                <th>Editar</th>
                <th>Excluir</th>
            </tr>
            @foreach($vehicles as $vehicle)
                <tr>
                    <td>{{$vehicle->id}}</td>
                    <td>{{$vehicle->name}}</td>
                    <td>{{$vehicle->brand_id}}</td>
                    <td>{{$vehicle->model_id}}</td>
                    <td>{{$vehicle->price}}</td>
                    <td>{{$vehicle->image_path}}</td>
                    <td>
                        <a href="{{route('vehicle.edit', ['vehicle' => $vehicle])}}">Editar</a>
                    </td>
                    <td>
                        <form action="{{route('vehicle.delete', ['vehicle' => $vehicle])}}" method="post">
                            @csrf
                            @method('delete')
                            <input type="submit" value="Excluir"/>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</body>
</html>