<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Modelos</h1>
    <div>
        @if(session()->has('success'))
            <div>
                {{session('success')}}
            </div>
        @endif
    </div>
    <div>
        <div>
            <a href="{{route('vehicle_model.create')}}">Criar modelo</a>
        </div>
        <table border="1">
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Editar</th>
                <th>Excluir</th>
            </tr>
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
        </table>
    </div>
</body>
</html>