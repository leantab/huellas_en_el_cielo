@props([
    'title' => 'Huellas en el Cielo - Cremación de Mascotas en Argentina',
    'description' =>
        'Servicios profesionales de cremación de mascotas en Argentina. Retiro a domicilio, cremación individual y devolución de cenizas.',
    'keywords' =>
        'cremación mascotas, cremación perros, cremación gatos, mascotas fallecidas, servicios funerarios mascotas, Argentina, Buenos Aires',
    'image' => 'huellas.jpg',
    'type' => 'website',
    'canonical' => null,
])

<!-- Primary Meta Tags -->
<title>{{ $title }}</title>
<meta name="title" content="{{ $title }}">
<meta name="description" content="{{ $description }}">
<meta name="keywords" content="{{ $keywords }}">
<meta name="author" content="Huellas en el Cielo">
<meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
<meta name="language" content="es">
<meta name="geo.region" content="AR">
<meta name="geo.placename" content="Buenos Aires, Argentina">
<meta name="geo.position" content="-34.6037;-58.3816">
<meta name="ICBM" content="-34.6037, -58.3816">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="{{ $type }}">
<meta property="og:url" content="{{ $canonical ?? url()->current() }}">
<meta property="og:title" content="{{ $title }}">
<meta property="og:description" content="{{ $description }}">
<meta property="og:image" content="{{ asset($image) }}">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
<meta property="og:locale" content="es_AR">
<meta property="og:site_name" content="Huellas en el Cielo">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="{{ $canonical ?? url()->current() }}">
<meta property="twitter:title" content="{{ $title }}">
<meta property="twitter:description" content="{{ $description }}">
<meta property="twitter:image" content="{{ asset($image) }}">

<!-- Additional SEO Meta Tags -->
<meta name="theme-color" content="#4f39f6">
<meta name="msapplication-TileColor" content="#4f39f6">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="default">
<meta name="apple-mobile-web-app-title" content="Huellas en el Cielo">

<!-- Canonical URL -->
<link rel="canonical" href="{{ $canonical ?? url()->current() }}">

<!-- Structured Data for Local Business -->
@php
    $localBusiness = [
        '@context' => 'https://schema.org',
        '@type' => 'LocalBusiness',
        'name' => 'Huellas en el Cielo',
        'description' => $description,
        'url' => url('/'),
        'telephone' => '+541167667117',
        'address' => [
            '@type' => 'PostalAddress',
            'addressCountry' => 'AR',
            'addressRegion' => 'Buenos Aires',
            'addressLocality' => 'Buenos Aires',
        ],
        'geo' => [
            '@type' => 'GeoCoordinates',
            'latitude' => -34.6037,
            'longitude' => -58.3816,
        ],
        'openingHours' => 'Mo-Su 00:00-23:59',
        'priceRange' => '$$',
        'currenciesAccepted' => 'ARS',
        'paymentAccepted' => 'Cash, Credit Card, Bank Transfer',
        'areaServed' => [
            '@type' => 'Country',
            'name' => 'Argentina',
        ],
        'serviceType' => 'Pet Cremation Services',
        'hasOfferCatalog' => [
            '@type' => 'OfferCatalog',
            'name' => 'Servicios de Cremación de Mascotas',
            'itemListElement' => [
                [
                    '@type' => 'Offer',
                    'itemOffered' => [
                        '@type' => 'Service',
                        'name' => 'Retiro a Domicilio',
                        'description' => 'Retiro discreto y respetuoso de mascotas fallecidas',
                    ],
                ],
                [
                    '@type' => 'Offer',
                    'itemOffered' => [
                        '@type' => 'Service',
                        'name' => 'Cremación Individual',
                        'description' => 'Cremación individual con devolución de cenizas',
                    ],
                ],
                [
                    '@type' => 'Offer',
                    'itemOffered' => [
                        '@type' => 'Service',
                        'name' => 'Certificado de Cremación',
                        'description' => 'Documentación oficial de cremación',
                    ],
                ],
            ],
        ],
        'sameAs' => ['https://wa.me/+541167667117'],
    ];
@endphp
<script type="application/ld+json">{!! json_encode($localBusiness, JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES) !!}</script>

<!-- Structured Data for Organization -->
@php
    $organization = [
        '@context' => 'https://schema.org',
        '@type' => 'Organization',
        'name' => 'Huellas en el Cielo',
        'url' => url('/'),
        'logo' => asset('dog-paw-svgrepo-com.svg'),
        'contactPoint' => [
            '@type' => 'ContactPoint',
            'telephone' => '+541167667117',
            'contactType' => 'customer service',
            'availableLanguage' => 'Spanish',
            'areaServed' => 'AR',
        ],
        'description' =>
            'Empresa familiar con más de 10 años de experiencia en servicios de cremación de mascotas en Argentina.',
    ];
@endphp
<script type="application/ld+json">{!! json_encode($organization, JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES) !!}</script>
