<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Editar veículo</h1>
    <form method="post" action="{{route('vehicle.update', ['vehicle' => $vehicle])}}" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div>
            <label>Nome</label>
            <input type="text" name="name" placeholder="nome" value="{{$vehicle->name}}"/>
            <label>Marca</label>
            <select  id="brand-dropdown" class="form-control" name="brand_id">
                <option value="">-- Selecione a marca --</option>
                @foreach ($brands as $brand)
                <option value="{{$brand->id}}" {{ ( $brand->id == $vehicle->brand_id) ? 'selected' : '' }}> {{ $brand->name }} </option>
                @endforeach
            </select>
            <label>Modelo</label>
            <select  id="vehicle-model-dropdown" class="form-control" name="model_id">
                <option value="">-- Selecione o modelo --</option>
                @foreach ($vehicle_models as $vehicle_model)
                    <option value="{{$vehicle_model->id}}" {{ ( $vehicle_model->id == $vehicle->model_id) ? 'selected' : '' }}> {{ $vehicle_model->name }} </option>
                @endforeach
            </select>
            <label>Preço</label>
            <input type="number" placeholder="0.00" name="price" min="0" step="0.01" pattern="^\d+(?:\.\d{1,2})?$" value="{{$vehicle->price}}"/>
            <label>Imagem</label>
            <input type="file" name="image_path" value="{{$vehicle->image_path}}"/>
        </div>
        <div>
            <input type="submit" value="Salvar"/>
        <div>
    </form>
</body>
</html>