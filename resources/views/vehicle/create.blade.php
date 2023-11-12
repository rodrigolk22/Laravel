<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Crie um veículo</h1>
    <form method="post" action="{{route('vehicle.store')}}" enctype="multipart/form-data">
        @csrf
        @method('post')
        <div>
            <label>Nome</label>
            <input type="text" name="name" placeholder="nome"/>
            <label>Marca</label>
            <input type="text" name="brand_id" placeholder="marca"/>
            <label>Modelo</label>
            <input type="text" name="model_id" placeholder="modelo"/>
            <label>Preço</label>
            <input type="number" placeholder="0.00" required name="price" min="0" value="0" step="0.01" pattern="^\d+(?:\.\d{1,2})?$"/>
            <label>Imagem</label>
            <input type="file" name="image_path" placeholder="imagem"/>
        </div>
        <div>
            <input type="submit" value="Gravar"/>
        <div>
    </form>
</body>
</html>