<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ URL::asset('css/styles.css') }}" rel="stylesheet" type="text/css" >
    <title>Marcas</title>
</head>
<body>
    <div class="container">
        <h1>Marcas</h1>
        <div>
            @if(session()->has('success'))
                <div>
                    {{session('success')}}
                </div>
            @endif
        </div>
        <div>
            <a class="new" href="{{route('brand.create')}}">Criar marca</a>
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
            @foreach($brands as $brand)
                <tr>
                    <td>{{$brand->id}}</td>
                    <td>{{$brand->name}}</td>
                    <td>
                        <a href="{{route('brand.edit', ['brand' => $brand])}}">Editar</a>
                    </td>
                    <td>
                        <form action="{{route('brand.delete', ['brand' => $brand])}}" method="post">
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