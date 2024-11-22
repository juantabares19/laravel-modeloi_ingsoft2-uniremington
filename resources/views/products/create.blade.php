@extends('layouts.plantilla')

@section('title', 'Formulario Agregar Producto')

@section('content')
    
<div class="container mt-5">
    <h4>Agregar Producto</h4>
    <form action="{{route('products.store')}}" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="">Codigo</label>
                <input type="text" name="code" id="code" class="form-control" placeholder="Codigo de Producto" maxlength="5" required>
            </div>
            <div class="col-md-6 mb-3">
                <label for="">Nombre</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Nombre" required>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="">Precio</label>
                <input type="number" name="price" id="price" class="form-control" placeholder="Precio Producto" required>
            </div>
            <div class="col-md-6 mb-3">
                <label for="">Cantidad</label>
                <input type="number" name="ammount" id="ammount" class="form-control" placeholder="Cantidad del producto" required>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="">Proveedor</label>
                <input type="text" name="supplier" id="supplier" class="form-control" placeholder="Nombre Proveedor" required>
            </div>
            <div class="col-md-6 mb-3">
                <label for="">Descripción</label>
                <input type="text" name="description" id="description" class="form-control" placeholder="Descripción" required>
            </div>
        </div>

        <div class="text-center">
            <button class="btn btn-success cold-md-6 mt-3">Editar</button>
            <a href="/products" class="btn btn-secondary cold-md-6 mt-3">Regresar</a>
        </div>

    </form>
</div>
    
@endsection