<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Marcas</h1>
    <div>
        @if(session()->has('success'))
            <div>
                {{session('success')}}
            </div>
        @endif
    </div>
    <div>
        <div>
            <a href="{{route('brand.create')}}">Criar marca</a>
        </div>
        <table border="1">
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Editar</th>
                <th>Excluir</th>
            </tr>
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
        </table>
    </div>
</body>
</html>