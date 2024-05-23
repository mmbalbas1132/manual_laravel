<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Productos</title>
</head>
<body>
<h2>Listado de productos</h2>
<table>
    <thead>
    <tr>
        <th>Nombre</th>
        <th>Precio</th>
        <th>Stock</th>
        <th>Imagen</th>
    </tr>
    </thead>
    <tbody>
    @foreach($productos as $producto)
        <tr>
            <td>{{ $producto->nombre }}</td>
            <td>{{ $producto->precio }}</td>
            <td>{{$producto->stock}}</td>
            <td><img src="{{ $producto->imagen }}" alt="{{ $producto->nombre }}" width="100"></td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
