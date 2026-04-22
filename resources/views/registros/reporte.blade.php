<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exportar Reporte</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="container mx-auto px-4 py-8">
        <div class="max-w-md mx-auto bg-white rounded-lg shadow-md p-6">
            <h1 class="text-2xl font-bold mb-6">Exportar Reporte de Registros</h1>
            
            <form action="{{ route('exportar.excel') }}" method="GET">
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2">Seleccionar Sede</label>
                    <select name="sede_id" class="w-full px-3 py-2 border rounded-lg">
                        <option value="">Todas las sedes</option>
                        @foreach($sedes as $sede)
                            <option value="{{ $sede->id }}">{{ $sede->nombre }}</option>
                        @endforeach
                    </select>
                </div>
                
                <div class="flex gap-4">
                    <button type="submit" class="flex-1 bg-green-500 text-white px-4 py-2 rounded-lg hover:bg-green-600">
                        Exportar a Excel
                    </button>
                    <a href="{{ route('registros.index') }}" class="flex-1 bg-gray-500 text-white px-4 py-2 rounded-lg hover:bg-gray-600 text-center">
                        Volver al Formulario
                    </a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>