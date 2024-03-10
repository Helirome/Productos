<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalogo de productos</title>
    <style>
        table, td, th {
            border: 1px solid;
        }
        
        table {
            width: 90%;
        }

    </style>
</head>
<body>

    <h1> Catalago de productos </h1>

    <table>
        <thead>
            <tr>
            <th>Id</th>   
            <th>Codigo</th>
            <th>Descripcion</th>
            <th>Precio</th>
            <th>Stock</th>
            <th></th>
            <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($lista AS $item)
            <tr>
                <th>{{ $item->id }}</th>
                <th>{{ $item->codigo }}</th>
                <th>{{ $item->descripcion }}</th>
                <th>{{ $item->precio }}</th>
                <th>{{ $item->existencia }}</th>
                <th></th>
                <th></th>
            </tr>
            @endforeach
        </tbody>
    </table>

    <!--<form action="" method="POST">
        @method("DELETE")
        @csrf

        <button type="submit">Eliminar</button>
    </form>-->

</body>
</html>