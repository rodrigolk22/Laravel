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
            <select  id="brand-dropdown" class="form-control" name="brand_id">
                <option value="">-- Selecione a marca --</option>
                @foreach ($brands as $brand)
                <option value="{{$brand->id}}">
                    {{$brand->name}}
                </option>
                @endforeach
            </select>
            <label>Modelo</label>
            <select  id="vehicle-model-dropdown" class="form-control" name="model_id">
                <option value="">-- Selecione o modelo --</option>
                @foreach ($vehicle_models as $vehicle_model)
                <option value="{{$vehicle_model->id}}">
                    {{$vehicle_model->name}}
                </option>
                @endforeach
            </select>
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