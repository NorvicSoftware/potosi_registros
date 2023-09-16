<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Viviendas</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-semibold mb-4">Listado de Viviendas</h1>
    <a href="{{ route('viviendas.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-4 inline-block">Crear Nueva Vivienda</a>
    <table class="table-auto w-full">
        <thead>
        <tr>
            <th class="px-4 py-2">Zona</th>
            <th class="px-4 py-2">Tamaño (m2)</th>
            <th class="px-4 py-2">Habitaciones</th>
            <th class="px-4 py-2">Baños</th>
            <th class="px-4 py-2">Parqueo</th>
            <th class="px-4 py-2">Costo Estimado</th>
            <th class="px-4 py-2">Acciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach($viviendas as $vivienda)
            <tr>
                <td class="border px-4 py-2">{{ $vivienda->zona->nombre }}</td>
                <td class="border px-4 py-2">{{ $vivienda->tamanio_m2 }}</td>
                <td class="border px-4 py-2">{{ $vivienda->habitaciones }}</td>
                <td class="border px-4 py-2">{{ $vivienda->banios }}</td>
                <td class="border px-4 py-2">{{ $vivienda->autos_parqueo }}</td>
                <td class="border px-4 py-2">{{ $vivienda->costo_estimado }}</td>
                <td class="border px-4 py-2">
                    <a href="{{ route('viviendas.show', $vivienda->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded mr-2">Ver</a>
                    <a href="{{ route('viviendas.edit', $vivienda->id) }}" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-1 px-2 rounded mr-2">Editar</a>
                    <form action="{{ route('viviendas.destroy', $vivienda->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded" onclick="return confirm('¿Estás seguro de eliminar esta vivienda?')">Eliminar</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
