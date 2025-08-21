<!DOCTYPE html>
<html lang="es" class="h-full">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- SEO Meta Tags for Cremación de Mascotas -->
    <title>Cremación de Mascotas en Argentina | Huellas en el Cielo - Servicios Profesionales 24/7</title>
    <meta name="title"
        content="Cremación de Mascotas en Argentina | Huellas en el Cielo - Servicios Profesionales 24/7">
    <meta name="description"
        content="Servicios profesionales de cremación de mascotas en Argentina. Cremación individual, retiro a domicilio 24/7, certificado oficial y devolución de cenizas. Tel: (+54) 11 6766-7117">
    <meta name="keywords"
        content="cremación de mascotas, cremación mascotas Argentina, cremación perros, cremación gatos, mascotas fallecidas, servicios funerarios mascotas, cremación individual mascotas, retiro domicilio mascotas, cenizas mascotas, crematorio mascotas Argentina, Buenos Aires cremación mascotas">
    <meta name="author" content="Huellas en el Cielo">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta name="language" content="es">
    <meta name="geo.region" content="AR">
    <meta name="geo.placename" content="Buenos Aires, Argentina">
    <meta name="geo.position" content="-34.6037;-58.3816">
    <meta name="ICBM" content="-34.6037, -58.3816">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="Cremación de Mascotas en Argentina | Huellas en el Cielo">
    <meta property="og:description"
        content="Servicios profesionales de cremación de mascotas en Argentina. Cremación individual, retiro a domicilio 24/7, certificado oficial y devolución de cenizas.">
    <meta property="og:image" content="{{ asset('huellas.jpg') }}">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:locale" content="es_AR">
    <meta property="og:site_name" content="Huellas en el Cielo">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta property="twitter:title" content="Cremación de Mascotas en Argentina | Huellas en el Cielo">
    <meta property="twitter:description"
        content="Servicios profesionales de cremación de mascotas en Argentina. Cremación individual, retiro a domicilio 24/7.">
    <meta property="twitter:image" content="{{ asset('huellas.jpg') }}">

    <!-- Additional SEO Meta Tags -->
    <meta name="theme-color" content="#4f39f6">
    <meta name="msapplication-TileColor" content="#4f39f6">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <meta name="apple-mobile-web-app-title" content="Huellas en el Cielo">

    <!-- Canonical URL -->
    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Structured Data for Local Business -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "LocalBusiness",
        "name": "Huellas en el Cielo - Cremación de Mascotas",
        "description": "Servicios profesionales de cremación de mascotas en Argentina. Cremación individual, retiro a domicilio 24/7, certificado oficial y devolución de cenizas.",
        "url": "{{ url('/cremacion-mascotas') }}",
        "telephone": "+541167667117",
        "address": {
            "@type": "PostalAddress",
            "addressCountry": "AR",
            "addressRegion": "Buenos Aires",
            "addressLocality": "Buenos Aires"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": -34.6037,
            "longitude": -58.3816
        },
        "openingHours": "Mo-Su 00:00-23:59",
        "priceRange": "$$",
        "currenciesAccepted": "ARS",
        "paymentAccepted": "Cash, Credit Card, Bank Transfer",
        "areaServed": {
            "@type": "Country",
            "name": "Argentina"
        },
        "serviceType": "Pet Cremation Services",
        "hasOfferCatalog": {
            "@type": "OfferCatalog",
            "name": "Servicios de Cremación de Mascotas",
            "itemListElement": [
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Cremación Individual de Mascotas",
                        "description": "Cremación individual garantizada con certificado oficial"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Retiro a Domicilio 24/7",
                        "description": "Retiro discreto y respetuoso disponible las 24 horas"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Certificado de Cremación",
                        "description": "Documentación oficial numerada y verificada"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Devolución de Cenizas",
                        "description": "Entrega de cenizas en urna conmemorativa"
                    }
                }
            ]
        },
        "sameAs": [
            "https://wa.me/+541167667117"
        ]
    }
    </script>

    <!-- Structured Data for FAQ -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "FAQPage",
        "mainEntity": [
            {
                "@type": "Question",
                "name": "¿Qué incluye el servicio de cremación de mascotas?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Nuestro servicio completo incluye: retiro a domicilio 24/7, resguardo refrigerado, traslado profesional, cremación individual garantizada, certificado oficial y devolución de cenizas en urna conmemorativa."
                }
            },
            {
                "@type": "Question",
                "name": "¿En qué zonas de Argentina ofrecen cremación de mascotas?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Ofrecemos cremación de mascotas en toda la región metropolitana de Buenos Aires: Capital Federal, GBA Norte, Sur, Este y Oeste, con cobertura las 24 horas del día."
                }
            },
            {
                "@type": "Question",
                "name": "¿Cuánto tiempo tarda el proceso de cremación de mascotas?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "El proceso completo de cremación de mascotas tarda entre 24 a 48 horas desde el retiro hasta la entrega de cenizas con certificado oficial."
                }
            },
            {
                "@type": "Question",
                "name": "¿Qué tipos de mascotas pueden cremar?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Creamos todo tipo de mascotas: perros, gatos, aves, conejos, hamsters y otros animales domésticos. Cada uno recibe el mismo trato respetuoso y profesional."
                }
            },
            {
                "@type": "Question",
                "name": "¿La cremación de mascotas es individual?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Sí, garantizamos cremación individual para cada mascota. Tu compañero es procesado por separado en crematorio privado certificado para tu total tranquilidad."
                }
            },
            {
                "@type": "Question",
                "name": "¿Qué documentación recibo de la cremación?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Recibes un certificado oficial de cremación numerado y verificado que incluye fecha, hora, tipo de servicio y número de identificación único para tu mascota."
                }
            }
        ]
    }
    </script>

    <!-- Structured Data for Organization -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "Huellas en el Cielo",
        "url": "{{ url('/') }}",
        "logo": "{{ asset('dog-paw-svgrepo-com.svg') }}",
        "contactPoint": {
            "@type": "ContactPoint",
            "telephone": "+541167667117",
            "contactType": "customer service",
            "availableLanguage": "Spanish",
            "areaServed": "AR"
        },
        "description": "Empresa familiar con más de 10 años de experiencia en servicios de cremación de mascotas en Argentina."
    }
    </script>

    <!-- Favicon and Icons -->
    <link rel="icon" href="/favicon.ico" sizes="any">
    {{-- <link rel="icon" href="/favicon2.svg" type="image/svg+xml"> --}}
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

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
    @fluxAppearance
</head>

<body class="h-full font-sans antialiased">
    @livewire('pages.cremacion-mascotas')

    @livewireScripts
    @fluxScripts
</body>

</html>
