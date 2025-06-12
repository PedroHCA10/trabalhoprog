<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Meu Portfólio' }}</title>
    <meta name="description" content="Portfólio de Analista de Infraestrutura de TI">
    
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <x-navbar />
    
    <main>
        {{ $slot }}
    </main>
    
    <x-footer />
</body>
</html>