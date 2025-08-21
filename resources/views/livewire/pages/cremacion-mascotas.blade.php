<?php

use function Livewire\Volt\{state};

state(['isMenuOpen' => false]);

$scrollToSection = function ($sectionId) {
    $this->dispatch('scroll-to-section', sectionId: $sectionId);
};

?>

<div class="min-h-screen bg-gradient-to-br from-white to-indigo-200">
    <!-- Navigation Bar -->
    <nav class="fixed top-0 left-0 right-0 z-50 text-white bg-indigo-600 backdrop-blur-sm border-b border-indigo-100/50"
        role="navigation" aria-label="Navegación principal">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <!-- Logo -->
                <div class="flex items-center">
                    <a href="/" class="flex items-center space-x-2">
                        <div class="w-10 h-10 relative">
                            <img src="{{ asset('dog-paw-svgrepo-com.svg') }}"
                                alt="Huellas en el Cielo - Logo de pata de perro" class="w-8 h-8 text-indigo-600"
                                style="fill: #4f39f6 ;">
                        </div>
                        <div class="flex flex-col">
                            <span class="text-xl font-serif font-bold text-white/90 leading-tight">HUELLAS</span>
                            <span class="text-sm font-serif text-white/90 leading-tight">EN EL CIELO</span>
                        </div>
                    </a>
                </div>

                <!-- Desktop Navigation -->
                <div class="hidden md:flex items-center space-x-8">
                    <a href="/"
                        class="text-white hover:text-gray-200 transition-colors duration-200 font-medium">Inicio</a>
                    <a href="/#servicios"
                        class="text-white hover:text-gray-200 transition-colors duration-200 font-medium">Servicios</a>
                    <a href="/#quienes-somos"
                        class="text-white hover:text-gray-200 transition-colors duration-200 font-medium">Quienes
                        Somos</a>
                    <a href="/#preguntas-frecuentes"
                        class="text-white hover:text-gray-200 transition-colors duration-200 font-medium">Preguntas
                        Frecuentes</a>
                </div>

                <!-- Mobile menu button -->
                <div class="md:hidden">
                    <button onclick="toggleMobileMenu()" class="text-white hover:text-grayo-200 p-2"
                        aria-label="Abrir menú móvil">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Mobile Navigation Menu -->
            <div class="md:hidden" wire:ignore.self>
                <div id="mobile-menu"
                    class="absolute top-16 left-0 right-0 px-2 pt-2 pb-3 space-y-1 bg-white border-t border-indigo-100/50 transition-all duration-300 ease-in-out overflow-hidden max-h-0 opacity-0">
                    <a href="/"
                        class="block px-3 py-2 text-indigo-600 hover:text-indigo-800 transition-colors duration-200 font-medium">Inicio</a>
                    <a href="/#servicios"
                        class="block px-3 py-2 text-indigo-600 hover:text-indigo-800 transition-colors duration-200 font-medium">Servicios</a>
                    <a href="/#quienes-somos"
                        class="block px-3 py-2 text-indigo-600 hover:text-indigo-800 transition-colors duration-200 font-medium">Quienes
                        Somos</a>
                    <a href="/#preguntas-frecuentes"
                        class="block px-3 py-2 text-indigo-600 hover:text-indigo-800 transition-colors duration-200 font-medium">Preguntas
                        Frecuentes</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Fixed Action Buttons -->
    <div class="fixed bottom-6 right-6 z-40 flex flex-col space-y-3">
        <!-- Phone Button -->
        <a href="tel:+541167667117"
            class="bg-green-600 hover:bg-green-700 text-white p-4 rounded-full shadow-lg transition-all duration-200 hover:scale-110"
            aria-label="Llamar al teléfono (+54) 11 6766-7117">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                </path>
            </svg>
        </a>

        <!-- WhatsApp Button -->
        <a href="https://wa.me/+541167667117" target="_blank"
            class="bg-green-500 hover:bg-green-600 text-white p-4 rounded-full shadow-lg transition-all duration-200 hover:scale-110"
            aria-label="Contactar por WhatsApp">
            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                <path
                    d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.488" />
            </svg>
        </a>
    </div>

    <!-- Main Content -->
    <div class="pt-16">
        <!-- Hero Section -->
        <section class="min-h-screen flex items-center justify-center px-4 sm:px-6 lg:px-8 mt-10">
            <div class="text-center max-w-4xl mx-auto">
                <div class="mb-8">
                    <div class="inline-flex items-center justify-center w-24 h-24 rounded-full mb-6">
                        <img src="{{ asset('dog-paw-svgrepo-com.svg') }}"
                            alt="Huellas en el Cielo - Servicios de cremación de mascotas"
                            class="w-16 h-16 text-indigo-600" viewBox="0 0 24 24" style="fill: #4f39f6 ;">
                    </div>
                    <h1 class="text-4xl sm:text-5xl lg:text-6xl font-serif font-bold text-indigo-800 mb-4">
                        Cremación de Mascotas
                    </h1>
                    <h2 class="text-2xl sm:text-3xl lg:text-4xl font-serif font-semibold text-indigo-700 mb-6">
                        en Argentina
                    </h2>
                    <div class="w-24 h-1 bg-indigo-300 mx-auto mb-8"></div>
                    <h2
                        class="text-xl sm:text-xl font-sans font-semibold text-indigo-800 mb-8 max-w-2xl mx-auto leading-relaxed">
                        Tel: (+54) 11 6766-7117
                    </h2>
                </div>

                <p class="text-lg sm:text-xl text-indigo-600 mb-8 max-w-2xl mx-auto leading-relaxed">
                    Servicios profesionales y respetuosos de cremación de mascotas en Argentina.
                    Honramos la memoria de tu compañero fallecido con el mayor respeto y amor.
                </p>

                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="#servicios-completos"
                        class="bg-indigo-600 hover:bg-indigo-700 text-white px-8 py-3 rounded-lg font-medium transition-colors duration-200">
                        Conocer Servicios Completos
                    </a>
                    <a href="tel:+541167667117"
                        class="border-2 border-indigo-600 text-indigo-600 hover:bg-indigo-600 hover:text-white px-8 py-3 rounded-lg font-medium transition-all duration-200">
                        Llamar Ahora
                    </a>
                </div>
            </div>
        </section>

        <!-- Servicios Completos Section -->
        <section id="servicios-completos" class="py-20 px-4 sm:px-6 lg:px-8 bg-white/50">
            <div class="max-w-6xl mx-auto">
                <div class="text-center mb-16">
                    <h2 class="text-3xl sm:text-4xl font-serif font-bold text-indigo-800 mb-4">Servicios Completos de
                        Cremación de Mascotas</h2>
                    <div class="w-24 h-1 bg-indigo-300 mx-auto mb-6"></div>
                    <p class="text-lg text-indigo-600 max-w-3xl mx-auto">
                        Ofrecemos un servicio integral que cubre todo el proceso desde el momento de la pérdida
                        hasta la devolución de cenizas con certificado oficial.
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Servicio 1 -->
                    <div
                        class="bg-white p-8 rounded-xl shadow-lg border border-indigo-400 hover:shadow-xl transition-shadow duration-300">
                        <div class="w-16 h-16 bg-indigo-100 rounded-full flex items-center justify-center mb-6 mx-auto">
                            <flux:icon.home variant="solid" class="w-8 h-8 text-indigo-600" />
                        </div>
                        <h3 class="text-xl font-serif font-semibold text-indigo-800 mb-4 text-center">Retiro a Domicilio
                            24/7</h3>
                        <p class="text-indigo-600 text-center leading-relaxed">
                            Servicio de retiro discreto y respetuoso disponible las 24 horas del día,
                            los 7 días de la semana. Cubrimos toda la región metropolitana de Buenos Aires.
                        </p>
                    </div>

                    <!-- Servicio 2 -->
                    <div
                        class="bg-white p-8 rounded-xl shadow-lg border border-indigo-400 hover:shadow-xl transition-shadow duration-300">
                        <div
                            class="w-16 h-16 bg-indigo-100 rounded-full flex items-center justify-center mb-6 mx-auto">
                            <flux:icon.moon variant="solid" class="w-8 h-8 text-indigo-600" />
                        </div>
                        <h3 class="text-xl font-serif font-semibold text-indigo-800 mb-4 text-center">Resguardo
                            Refrigerado</h3>
                        <p class="text-indigo-600 text-center leading-relaxed">
                            Almacenamiento en cámara frigorífica profesional con control de temperatura
                            y humedad para preservar a tu mascota en condiciones óptimas.
                        </p>
                    </div>

                    <!-- Servicio 3 -->
                    <div
                        class="bg-white p-8 rounded-xl shadow-lg border border-indigo-400 hover:shadow-xl transition-shadow duration-300">
                        <div
                            class="w-16 h-16 bg-indigo-100 rounded-full flex items-center justify-center mb-6 mx-auto">
                            <svg class="w-8 h-8 text-indigo-600" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 13h11v5H3z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M14 13h4l2 2v3h-6z" />
                                <circle cx="7.5" cy="18" r="1.5" stroke="currentColor" stroke-width="2"
                                    fill="none" />
                                <circle cx="17.5" cy="18" r="1.5" stroke="currentColor" stroke-width="2"
                                    fill="none" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-serif font-semibold text-indigo-800 mb-4 text-center">Traslado
                            Profesional</h3>
                        <p class="text-indigo-600 text-center leading-relaxed">
                            Traslado seguro en unidades sanitarias especializadas conducidas por
                            profesionales del rubro funerario con amplia experiencia.
                        </p>
                    </div>

                    <!-- Servicio 4 -->
                    <div
                        class="bg-white p-8 rounded-xl shadow-lg border border-indigo-400 hover:shadow-xl transition-shadow duration-300">
                        <div
                            class="w-16 h-16 bg-indigo-100 rounded-full flex items-center justify-center mb-6 mx-auto">
                            <flux:icon.check-badge class="w-8 h-8 text-indigo-600" />
                        </div>
                        <h3 class="text-xl font-serif font-semibold text-indigo-800 mb-4 text-center">Cremación
                            Individual</h3>
                        <p class="text-indigo-600 text-center leading-relaxed">
                            Cremación individual garantizada en crematorio privado certificado.
                            Cada mascota es procesada por separado para tu total tranquilidad.
                        </p>
                    </div>

                    <!-- Servicio 5 -->
                    <div
                        class="bg-white p-8 rounded-xl shadow-lg border border-indigo-400 hover:shadow-xl transition-shadow duration-300">
                        <div
                            class="w-16 h-16 bg-indigo-100 rounded-full flex items-center justify-center mb-6 mx-auto">
                            <svg class="w-8 h-8 text-indigo-600" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 4h6v2H9z" />
                                <rect x="7" y="8" width="10" height="10" rx="2" ry="2"
                                    stroke-width="2" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 12h4" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-serif font-semibold text-indigo-800 mb-4 text-center">Certificado
                            Oficial</h3>
                        <p class="text-indigo-600 text-center leading-relaxed">
                            Documentación oficial numerada y verificada que incluye todos los detalles
                            del proceso de cremación para tu tranquilidad y confianza.
                        </p>
                    </div>

                    <!-- Servicio 6 -->
                    <div
                        class="bg-white p-8 rounded-xl shadow-lg border border-indigo-400 hover:shadow-xl transition-shadow duration-300">
                        <div
                            class="w-16 h-16 bg-indigo-100 rounded-full flex items-center justify-center mb-6 mx-auto">
                            <svg class="w-8 h-8 text-indigo-600" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 2C13.1 2 14 2.9 14 4C14 5.1 13.1 6 12 6C10.9 6 10 5.1 10 4C10 2.9 10.9 2 12 2zM21 9V7C21 5.9 20.1 5 19 5H18.5C18.2 4.1 17.4 3.4 16.4 3.1L15.5 2.7C15.2 2.6 14.8 2.6 14.5 2.7L13.6 3.1C12.6 3.4 11.8 4.1 11.5 5H5C3.9 5 3 5.9 3 7V9C3 10.1 3.9 11 5 11H19C20.1 11 21 10.1 21 9z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-serif font-semibold text-indigo-800 mb-4 text-center">Urna
                            Conmemorativa</h3>
                        <p class="text-indigo-600 text-center leading-relaxed">
                            Devolución de cenizas en urna conmemorativa de alta calidad,
                            disponible en diferentes estilos y materiales para honrar la memoria.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Proceso de Cremación Section -->
        <section class="py-20 px-4 sm:px-6 lg:px-8">
            <div class="max-w-6xl mx-auto">
                <div class="text-center mb-16">
                    <h2 class="text-3xl sm:text-4xl font-serif font-bold text-indigo-800 mb-4">Proceso de Cremación de
                        Mascotas</h2>
                    <div class="w-24 h-1 bg-indigo-300 mx-auto mb-8"></div>
                    <p class="text-lg text-indigo-600 max-w-3xl mx-auto">
                        Nuestro proceso está diseñado para ser respetuoso, transparente y profesional,
                        garantizando que tu mascota reciba el cuidado que se merece en cada paso.
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                    <!-- Paso 1 -->
                    <div class="text-center">
                        <div
                            class="w-16 h-16 bg-indigo-100 rounded-full flex items-center justify-center mx-auto mb-6">
                            <span class="text-2xl font-bold text-indigo-600">1</span>
                        </div>
                        <h3 class="text-xl font-serif font-semibold text-indigo-800 mb-4">Contacto Inicial</h3>
                        <p class="text-indigo-600">
                            Llamada o WhatsApp para coordinar el retiro a domicilio.
                            Respondemos inmediatamente las 24 horas.
                        </p>
                    </div>

                    <!-- Paso 2 -->
                    <div class="text-center">
                        <div
                            class="w-16 h-16 bg-indigo-100 rounded-full flex items-center justify-center mx-auto mb-6">
                            <span class="text-2xl font-bold text-indigo-600">2</span>
                        </div>
                        <h3 class="text-xl font-serif font-semibold text-indigo-800 mb-4">Retiro a Domicilio</h3>
                        <p class="text-indigo-600">
                            Retiro discreto y respetuoso en el momento que lo necesites.
                            Tratamos a tu mascota con el mayor cuidado.
                        </p>
                    </div>

                    <!-- Paso 3 -->
                    <div class="text-center">
                        <div
                            class="w-16 h-16 bg-indigo-100 rounded-full flex items-center justify-center mx-auto mb-6">
                            <span class="text-2xl font-bold text-indigo-600">3</span>
                        </div>
                        <h3 class="text-xl font-serif font-semibold text-indigo-800 mb-4">Cremación</h3>
                        <p class="text-indigo-600">
                            Proceso de cremación individual en crematorio privado certificado.
                            Garantizamos que solo tu mascota sea procesada.
                        </p>
                    </div>

                    <!-- Paso 4 -->
                    <div class="text-center">
                        <div
                            class="w-16 h-16 bg-indigo-100 rounded-full flex items-center justify-center mx-auto mb-6">
                            <span class="text-2xl font-bold text-indigo-600">4</span>
                        </div>
                        <h3 class="text-xl font-serif font-semibold text-indigo-800 mb-4">Entrega Final</h3>
                        <p class="text-indigo-600">
                            Devolución de cenizas en urna conmemorativa con certificado oficial.
                            Todo listo en 24-48 horas.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Zonas de Cobertura Section -->
        <section class="py-20 px-4 sm:px-6 lg:px-8 bg-white/50">
            <div class="max-w-6xl mx-auto">
                <div class="text-center mb-16">
                    <h2 class="text-3xl sm:text-4xl font-serif font-bold text-indigo-800 mb-4">Zonas de Cobertura en
                        Argentina</h2>
                    <div class="w-24 h-1 bg-indigo-300 mx-auto mb-8"></div>
                    <p class="text-lg text-indigo-600 max-w-3xl mx-auto">
                        Brindamos servicios de cremación de mascotas en toda la región metropolitana de Buenos Aires
                        y alrededores, con cobertura las 24 horas del día.
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <div class="bg-white p-6 rounded-lg shadow-md border border-indigo-200">
                        <h3 class="text-xl font-serif font-semibold text-indigo-800 mb-4 text-center">Capital Federal
                        </h3>
                        <p class="text-indigo-600 text-center">
                            Todos los barrios de la Ciudad Autónoma de Buenos Aires
                        </p>
                    </div>

                    <div class="bg-white p-6 rounded-lg shadow-md border border-indigo-200">
                        <h3 class="text-xl font-serif font-semibold text-indigo-800 mb-4 text-center">GBA Norte</h3>
                        <p class="text-indigo-600 text-center">
                            San Isidro, Vicente López, San Fernando, Tigre y alrededores
                        </p>
                    </div>

                    <div class="bg-white p-6 rounded-lg shadow-md border border-indigo-200">
                        <h3 class="text-xl font-serif font-semibold text-indigo-800 mb-4 text-center">GBA Sur</h3>
                        <p class="text-indigo-600 text-center">
                            Quilmes, Avellaneda, Lanús, Lomas de Zamora y zonas cercanas
                        </p>
                    </div>

                    <div class="bg-white p-6 rounded-lg shadow-md border border-indigo-200">
                        <h3 class="text-xl font-serif font-semibold text-indigo-800 mb-4 text-center">GBA Este</h3>
                        <p class="text-indigo-600 text-center">
                            Esteban Echeverría, Ezeiza, La Matanza y localidades vecinas
                        </p>
                    </div>

                    <div class="bg-white p-6 rounded-lg shadow-md border border-indigo-200">
                        <h3 class="text-xl font-serif font-semibold text-indigo-800 mb-4 text-center">GBA Oeste</h3>
                        <p class="text-indigo-600 text-center">
                            Morón, Ituzaingó, Hurlingham, Tres de Febrero y alrededores
                        </p>
                    </div>

                    <div class="bg-white p-6 rounded-lg shadow-md border border-indigo-200">
                        <h3 class="text-xl font-serif font-semibold text-indigo-800 mb-4 text-center">Zona Norte
                            Extendida</h3>
                        <p class="text-indigo-600 text-center">
                            Pilar, Escobar, San Nicolás y otras localidades del norte
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Call to Action Section -->
        <section class="py-20 px-4 sm:px-6 lg:px-8">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-3xl sm:text-4xl font-serif font-bold text-indigo-800 mb-8">
                    ¿Necesitas Nuestros Servicios de Cremación de Mascotas?
                </h2>
                <p class="text-lg text-indigo-600 mb-8 max-w-2xl mx-auto">
                    Estamos disponibles las 24 horas para ayudarte en estos momentos difíciles.
                    Contáctanos inmediatamente y te responderemos de forma profesional y respetuosa.
                </p>

                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="tel:+541167667117"
                        class="bg-indigo-600 hover:bg-indigo-700 text-white px-8 py-3 rounded-lg font-medium transition-colors duration-200 inline-flex items-center justify-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                            </path>
                        </svg>
                        Llamar Ahora: (+54) 11 6766-7117
                    </a>
                    <a href="https://wa.me/+541167667117" target="_blank"
                        class="bg-green-500 hover:bg-green-600 text-white px-8 py-3 rounded-lg font-medium transition-colors duration-200 inline-flex items-center justify-center">
                        <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.488" />
                        </svg>
                        Contactar por WhatsApp
                    </a>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer class="bg-blue-800 text-white py-12 px-4 sm:px-6 lg:px-8">
            <div class="max-w-6xl mx-auto text-center">
                <div class="flex items-center justify-center space-x-2 mb-6">
                    <div class="w-8 h-8 relative">
                        <svg class="w-8 h-8 text-blue-200" viewBox="0 0 24 24" fill="currentColor">
                            <path
                                d="M12 2C13.1 2 14 2.9 14 4C14 5.1 13.1 6 12 6C10.9 6 10 5.1 10 4C10 2.9 10.9 2 12 2ZM21 9V7C21 5.9 20.1 5 19 5H18.5C18.2 4.1 17.4 3.4 16.4 3.1L15.5 2.7C15.2 2.6 14.8 2.6 14.5 2.7L13.6 3.1C12.6 3.4 11.8 4.1 11.5 5H5C3.9 5 3 5.9 3 7V9C3 10.1 3.9 11 5 11H19C20.1 11 21 10.1 21 9ZM7 13C5.9 13 5 13.9 5 15V17C5 18.1 5.9 19 7 19H17C18.1 19 19 18.1 19 17V15C19 13.9 18.1 13 17 13H7Z" />
                        </svg>
                    </div>
                    <div class="flex flex-col">
                        <span class="text-lg font-serif font-bold text-blue-200 leading-tight">HUELLAS</span>
                        <span class="text-sm font-serif text-blue-300 leading-tight">EN EL CIELO</span>
                    </div>
                </div>
                <p class="text-blue-200 mb-6">
                    Servicios profesionales de cremación de mascotas en Argentina
                </p>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6 text-sm">
                    <div>
                        <h4 class="font-semibold text-blue-100 mb-2">Contacto</h4>
                        <p class="text-blue-300">Tel: (+54) 11 6766-7117</p>
                        <p class="text-blue-300">WhatsApp disponible</p>
                    </div>
                    <div>
                        <h4 class="font-semibold text-blue-100 mb-2">Servicios</h4>
                        <p class="text-blue-300">Cremación individual</p>
                        <p class="text-blue-300">Retiro a domicilio 24/7</p>
                    </div>
                    <div>
                        <h4 class="font-semibold text-blue-100 mb-2">Cobertura</h4>
                        <p class="text-blue-300">Buenos Aires</p>
                        <p class="text-blue-300">GBA y alrededores</p>
                    </div>
                </div>
                <div class="border-t border-blue-700 pt-6">
                    <p class="text-blue-300 text-sm">
                        © {{ date('Y') }} Huellas en el Cielo. Todos los derechos reservados. Cremación de mascotas
                        en Argentina.
                    </p>
                </div>
            </div>
        </footer>
    </div>

    <!-- JavaScript for mobile menu -->
    <script>
        // Función para abrir/cerrar el menú móvil
        function toggleMobileMenu() {
            const mobileMenu = document.getElementById('mobile-menu');
            if (mobileMenu) {
                const isOpen = mobileMenu.classList.contains('max-h-48');
                if (isOpen) {
                    closeMobileMenu();
                } else {
                    openMobileMenu();
                }
            }
        }

        // Función para abrir el menú móvil
        function openMobileMenu() {
            const mobileMenu = document.getElementById('mobile-menu');
            if (mobileMenu) {
                mobileMenu.classList.remove('max-h-0', 'opacity-0');
                mobileMenu.classList.add('max-h-48', 'opacity-100');
            }
        }

        // Función para cerrar el menú móvil
        function closeMobileMenu() {
            const mobileMenu = document.getElementById('mobile-menu');
            if (mobileMenu) {
                mobileMenu.classList.remove('max-h-48', 'opacity-100');
                mobileMenu.classList.add('max-h-0', 'opacity-0');
            }
        }

        // Cerrar menú móvil al hacer click fuera de él
        document.addEventListener('click', function(event) {
            const mobileMenu = document.getElementById('mobile-menu');
            const menuButton = document.querySelector('[onclick="toggleMobileMenu()"]');

            if (mobileMenu && menuButton && !mobileMenu.contains(event.target) && !menuButton.contains(event
                    .target)) {
                closeMobileMenu();
            }
        });

        // Cerrar menú móvil al redimensionar la ventana
        window.addEventListener('resize', function() {
            if (window.innerWidth >= 768) { // md breakpoint
                closeMobileMenu();
            }
        });
    </script>
</div>
