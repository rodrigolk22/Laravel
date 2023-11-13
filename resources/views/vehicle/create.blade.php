<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ URL::asset('css/styles.css') }}" rel="stylesheet" type="text/css" >
    <title>Criar veículo</title>
</head>
<body>
<div class="container">
    <div class="styled-table">
    <h1>Crie um veículo</h1>
    <form method="post" action="{{route('vehicle.store')}}" enctype="multipart/form-data">
        @csrf
        @method('post')
        <div>
            <p>Nome</p>
            <input type="text" name="name" placeholder="nome"/>
            <p>Marca</p>
            <select  id="brand-dropdown" class="form-control" name="brand_id">
                <option value="">-- Selecione a marca --</option>
                @foreach ($brands as $brand)
                <option value="{{$brand->id}}">
                    {{$brand->name}}
                </option>
                @endforeach
            </select>
            <p>Modelo</p>
            <select  id="vehicle-model-dropdown" class="form-control" name="model_id">
                <option value="">-- Selecione o modelo --</option>
                @foreach ($vehicle_models as $vehicle_model)
                <option value="{{$vehicle_model->id}}">
                    {{$vehicle_model->name}}
                </option>
                @endforeach
            </select>
            <p>Preço</p>
            <input type="number" placeholder="0.00" required name="price" min="0" value="0" step="0.01" pattern="^\d+(?:\.\d{1,2})?$"/>
            <p>Imagem</p>
            <input type="file" name="image_path" placeholder="imagem"/>
        </div>
        <div>
            <input class="new" type="submit" value="Gravar"/>
            <a class="cancel" href="{{route('vehicle.index')}}">Cancelar</a>
        <div>
    </form>
    </div>
</div>
</body>
</html>