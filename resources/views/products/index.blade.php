@extends('layouts.plantilla')

@section('title', 'Index de Productos')

@section('content')
    <div class="container">
        <!-- Título y Botones de Acción -->
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h1>Lista de Productos</h1>
            <div class="btn-group">
                <a href="{{ route('products.create') }}" class="btn btn-outline-success btn-lg">Nuevo Producto</a>
                <a href="{{ route('products.pdf') }}" target="_blank" class="btn btn-outline-primary btn-lg">Generar PDF</a>
            </div>
        </div>

        <!-- Tabla de Productos -->
        <table class="table table-striped table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>Codigo</th>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                    <th>Proveedor</th>
                    <th>Descripcion</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                    <tr>
                        <td>{{ $product->code }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ number_format($product->price, 0, ',', '.') }}</td>
                        <td>{{ $product->ammount }}</td>
                        <td>{{ $product->supplier }}</td>
                        <td>{{ $product->description }}</td>
                        <td class="d-flex justify-content-start gap-2">
                            <a href="{{ route('products.edit', $product) }}" class="btn btn-outline-warning btn-sm">Editar</a>
                            <form action="{{route('products.destroy', $product)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-outline-danger btn-sm" role="button">Borrar</button>
                            </form>
                            <a href="{{route('pdf',$product->id)}}" target="_blank" class="btn btn-outline-primary">PDF</a>
                        </td>
                    </tr>
                @endforeach
                
            </tbody>
        </table>

        <!-- Paginación de Productos -->
        <div class="d-flex justify-content-center">
            {{$products->links()}}
        </div>
    </div>
@endsection
