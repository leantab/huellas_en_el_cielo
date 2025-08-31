<!DOCTYPE html>
<html lang="es" class="h-full">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- SEO Meta Tags -->
    <x-seo-meta
        title="Huellas en el Cielo - Cremación de Mascotas en Argentina | Servicios Funerarios para Perros y Gatos"
        description="Servicios profesionales de cremación de mascotas en Argentina. Retiro a domicilio, cremación individual y devolución de cenizas. Honramos la memoria de tu mascota fallecida con respeto y amor. Tel: (+54) 11 6766-7117"
        keywords="cremación mascotas, cremación perros, cremación gatos, mascotas fallecidas, servicios funerarios mascotas, Argentina, Buenos Aires, retiro domicilio, cenizas mascotas, despedida mascotas, duelo mascotas, crematorio mascotas, cremación individual mascotas, servicios funerarios perros, servicios funerarios gatos" />

    <!-- Structured Data for FAQ -->
    @php
        $faq = [
            '@context' => 'https://schema.org',
            '@type' => 'FAQPage',
            'mainEntity' => [
                [
                    '@type' => 'Question',
                    'name' => '¿Qué servicios ofrecen para mascotas fallecidas?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' =>
                            'Ofrecemos retiro a domicilio, resguardo en cámara frigorífica, traslado al crematorio, cremación individual y devolución de cenizas con certificado oficial.',
                    ],
                ],
                [
                    '@type' => 'Question',
                    'name' => '¿Cómo funciona el proceso de cremación?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' =>
                            'El proceso incluye retiro discreto a domicilio, traslado seguro al crematorio privado, cremación individual y entrega de cenizas en urna conmemorativa con certificado oficial.',
                    ],
                ],
                [
                    '@type' => 'Question',
                    'name' => '¿En qué zonas de Argentina operan?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' =>
                            'Operamos en Buenos Aires y alrededores, brindando servicios de cremación de mascotas en toda la región metropolitana.',
                    ],
                ],
                [
                    '@type' => 'Question',
                    'name' => '¿Cuánto tiempo tarda el proceso completo?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' =>
                            'El proceso completo tarda entre 24 a 48 horas desde el retiro hasta la entrega de cenizas. En casos especiales podemos coordinar tiempos según tus necesidades.',
                    ],
                ],
                [
                    '@type' => 'Question',
                    'name' => '¿Qué tipos de mascotas atienden?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' =>
                            'Atendemos todo tipo de mascotas: perros, gatos, aves, conejos, hamsters y otros animales domésticos. Cada uno recibe el mismo trato respetuoso y profesional.',
                    ],
                ],
                [
                    '@type' => 'Question',
                    'name' => '¿Ofrecen servicios de emergencia?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' =>
                            'Sí, ofrecemos servicio de emergencia 24/7. Entendemos que la pérdida de una mascota puede ocurrir en cualquier momento y estamos disponibles para ayudarte cuando lo necesites.',
                    ],
                ],
            ],
        ];
    @endphp
    <script type="application/ld+json">{!! json_encode($faq, JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES) !!}</script>

    <!-- Favicon and Icons -->
    <link rel="icon" href="/favicon.ico" sizes="any">
    <link rel="icon" href="/favicon2.svg" type="image/svg+xml">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">
    <link rel="manifest" href="/site.webmanifest">

    <!-- Preconnect for Performance -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400&display=swap"
        rel="stylesheet">

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-WJ7NTFH447"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-WJ7NTFH447');
    </script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
    @fluxAppearance
</head>

<body class="h-full font-sans antialiased">
    @include('livewire.pages.landing-new')

    @livewireScripts
    @fluxScripts
</body>

</html>
