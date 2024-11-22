@extends('layouts.plantilla')

@section('title', 'Editar Producto')

@section('content')
    
<div class="container mt-5">
    <h4>Editar Producto</h4>
    <form action="{{route('products.update', $product)}}" method="POST">
        @method('PUT') 
        @csrf
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="">Codigo</label>
                <input type="text" name="code" id="code" class="form-control" value="{{old('code',$product->code)}}" placeholder="Codigo de Producto" maxlength="5" required>
            </div>
            <div class="col-md-6 mb-3">
                <label for="">Nombre</label>
                <input type="text" name="name" id="name" class="form-control" value="{{old('name',$product->name)}}" placeholder="Nombre" required>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="">Precio</label>
                <input type="number" name="price" id="price" class="form-control" value="{{old('price',$product->price)}}" placeholder="Precio Producto" required>
            </div>
            <div class="col-md-6 mb-3">
                <label for="">Cantidad</label>
                <input type="number" name="ammount" id="ammount" class="form-control" value="{{old('ammount',$product->ammount)}}" placeholder="Cantidad del producto" required>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="">Proveedor</label>
                <input type="text" name="supplier" id="supplier" class="form-control" value="{{old('supplier',$product->supplier)}}" placeholder="Nombre Proveedor" required>
            </div>
            <div class="col-md-6 mb-3">
                <label for="">Descripción</label>
                <input type="text" name="description" id="description" class="form-control" value="{{old('description',$product->description)}}" placeholder="Descripción" required>
            </div>
        </div>

        <div class="text-center">
            <button class="btn btn-success cold-md-6 mt-3">Agregar</button>
            <a href="/products" class="btn btn-secondary cold-md-6 mt-3">Regresar</a>
        </div>

    </form>
</div>
    
@endsection