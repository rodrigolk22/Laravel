<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ URL::asset('css/styles.css') }}" rel="stylesheet" type="text/css" >
    <title>Veículos</title>
</head>
<body>
    
    <div class="container">
    <h1>Veículos</h1>
        <div>
            @if(session()->has('success'))
                <div class="success">
                    {{session('success')}}
                </div>
            @endif
        </div>
        <a class="new" href="{{route('vehicle.create')}}">Criar veículo</a>
        <a href="{{route('dashboard')}}">Retornar</a>
        <table class="styled-table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>Marca</th>
                    <th>Modelo</th>
                    <th>Preço (R$)</th>
                    <th>Imagem</th>
                    <th>Editar</th>
                    <th>Excluir</th>
                </tr>
            </thead>
            <tbody>
            @foreach($vehicles as $vehicle)
                <tr>
                    <td>{{$vehicle->id}}</td>
                    <td>{{$vehicle->name}}</td>
                    <td>{{$vehicle->brand->name}}</td>
                    <td>{{$vehicle->model->name}}</td>
                    <td>R$ {{number_format($vehicle->price, 2, ',', '.')}}</td>
                    <td><img src="{{ url('storage//'.$vehicle->image_path) }}" class="image" alt=""></td>
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
            </tbody>
        </table>
    </div>
</body>
</html>