<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ URL::asset('css/styles.css') }}" rel="stylesheet" type="text/css" >
    <title>Modelos</title>
</head>
<body>
    <div class="container">
        <h1>Modelos</h1>
        <div>
            @if(session()->has('success'))
                <div>
                    {{session('success')}}
                </div>
            @endif
        </div>
        <div>
            <a class="new" href="{{route('vehicle_model.create')}}">Criar modelo</a>
            <a href="{{route('dashboard')}}">Retornar</a>
        </div>
        <table class="styled-table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>Editar</th>
                    <th>Excluir</th>
                </tr>
            </thead>
            <tbody>
            @foreach($vehicle_models as $vehicle_model)
                <tr>
                    <td>{{$vehicle_model->id}}</td>
                    <td>{{$vehicle_model->name}}</td>
                    <td>
                        <a href="{{route('vehicle_model.edit', ['vehicle_model' => $vehicle_model])}}">Editar</a>
                    </td>
                    <td>
                        <form action="{{route('vehicle_model.delete', ['vehicle_model' => $vehicle_model])}}" method="post">
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