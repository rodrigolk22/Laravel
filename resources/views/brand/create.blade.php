<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Crie uma marca</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif
    </divd>
    <form method="post" action="{{route('brand.store')}}">
        @csrf
        @method('post')
        <div>
            <label>Nome</label>
            <input type="text" name="name" placeholder="nome"/>
        </div>
        <div>
            <input type="submit" value="Gravar"/>
        <div>
    </form>
</body>
</html>