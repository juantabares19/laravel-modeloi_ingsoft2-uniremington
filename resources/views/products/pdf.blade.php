<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Productos para PDF</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        h1 {
            text-align: center;
            font-size: 24px;
            color: #333;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 10px;
            text-align: left;
            border: 1px solid #ddd;
        }
        th {
            background-color: #f4f4f4;
            font-weight: bold;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
        .footer {
            text-align: center;
            font-size: 12px;
            margin-top: 40px;
            color: #777;
        }
    </style>
</head>
<body>

    <h1>Lista de Productos</h1>
    <table>
        <thead>
            <tr>
                <th>Codigo</th>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Cantidad</th>
                <th>Proveedor</th>
                <th>Descripcion</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
            <tr>
                <td>{{ $product->code }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ number_format($product->price, 0, ',', '.') }} </td>
                <td>{{ $product->ammount }}</td>
                <td>{{ $product->supplier }}</td>
                <td>{{ $product->description }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="footer">
        <p>Generado por {{ env('APP_NAME') }}</p>
    </div>

</body>
</html>

{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Producto{{$product>id}}</title>
    <style>
        tr{
            borde:1px solid black;
        }
        th{
            background-color: lightgray
            
        }
    </style>
</head>
<body>
    <h1>Información del Producto{{$product->name}}</h1>
    <table class="table caption-top">
        <thead>
            <th>ID</th>
            <th>Codigo</th>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Cantidad</th>
            <th>Proveedor</th>
            <th>Descripción</th>
        </thead>
    </table>
    <tr>
        <th>{{$product->id}}</th>
        <th>{{$product->code}}</th>
        <th>{{$product->name}}</th>
        <th>{{$product->price}}</th>
        <th>{{$product->ammount}}</th>
        <th>{{$product->supplier}}</th>
        <th>{{$product->description}}</th>
    </tr>
</body>
</html> --}}
