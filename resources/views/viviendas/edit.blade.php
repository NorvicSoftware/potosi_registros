<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Vivienda</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-semibold mb-4">Editar Vivienda</h1>
    <form method="POST" action="{{ route('viviendas.update', $vivienda->id) }}" class="w-full max-w-lg">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="zona_id" class="block text-gray-700 text-sm font-bold mb-2">Zona:</label>
            <select id="zona_id" name="zona_id" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                @foreach($zonas as $zona)
                    <option value="{{ $zona->id }}" {{ $vivienda->zona_id == $zona->id ? 'selected' : '' }}>{{ $zona->nombre }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-4">
            <label for="tamanio_m2" class="block text-gray-700 text-sm font-bold mb-2">Tamaño (m2):</label>
            <input type="text" id="tamanio_m2" name="tamanio_m2" value="{{ $vivienda->tamanio_m2 }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
        </div>
        <div class="mb-4">
            <label for="habitaciones" class="block text-gray-700 text-sm font-bold mb-2">Habitaciones:</label>
            <input type="text" id="habitaciones" name="habitaciones" value="{{ $vivienda->habitaciones }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
        </div>
        <div class="mb-4">
            <label for="autos_parqueo" class="block text-gray-700 text-sm font-bold mb-2">Autos en Parqueo:</label>
            <input type="text" id="autos_parqueo" name="autos_parqueo" value="{{ $vivienda->autos_parqueo }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
        </div>
        <div class="mb-4">
            <label for="banios" class="block text-gray-700 text-sm font-bold mb-2">Baños:</label>
            <input type="text" id="banios" name="banios" value="{{ $vivienda->banios }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
        </div>
        <div class="mb-4">
            <label for="costo_estimado" class="block text-gray-700 text-sm font-bold mb-2">Costo Estimado:</label>
            <input type="text" id="costo_estimado" name="costo_estimado" value="{{ $vivienda->costo_estimado }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
        </div>
        <div class="mb-4">
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Actualizar Vivienda</button>
        </div>
    </form>
</div>
</body>
</html>
