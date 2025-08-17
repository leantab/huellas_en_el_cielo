<?php

use Livewire\Volt\Component;

new class extends Component {
    public $isMenuOpen = false;

    public function toggleMenu()
    {
        $this->isMenuOpen = !$this->isMenuOpen;
    }

    public function scrollToSection($sectionId)
    {
        $this->isMenuOpen = false;
        $this->dispatch('scroll-to-section', sectionId: $sectionId);
    }
}; ?>

<div class="min-h-screen bg-gradient-to-br from-white via-blue-50/30 to-blue-100/50">
    <!-- Navigation Bar -->
    <nav class="fixed top-0 left-0 right-0 z-50 bg-white/90 backdrop-blur-sm border-b border-blue-100/50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <!-- Logo -->
                <div class="flex items-center">
                    <div class="flex items-center space-x-2">
                        <div class="w-10 h-10 relative">
                            <!-- Paw Print Icon -->
                            <div class="absolute inset-0 flex items-center justify-center">
                                <svg class="w-8 h-8 text-blue-700" viewBox="0 0 24 24" fill="currentColor">
                                    <path
                                        d="M12 2C13.1 2 14 2.9 14 4C14 5.1 13.1 6 12 6C10.9 6 10 5.1 10 4C10 2.9 10.9 2 12 2ZM21 9V7C21 5.9 20.1 5 19 5H18.5C18.2 4.1 17.4 3.4 16.4 3.1L15.5 2.7C15.2 2.6 14.8 2.6 14.5 2.7L13.6 3.1C12.6 3.4 11.8 4.1 11.5 5H5C3.9 5 3 5.9 3 7V9C3 10.1 3.9 11 5 11H19C20.1 11 21 10.1 21 9ZM7 13C5.9 13 5 13.9 5 15V17C5 18.1 5.9 19 7 19H17C18.1 19 19 18.1 19 17V15C19 13.9 18.1 13 17 13H7Z" />
                                </svg>
                            </div>
                        </div>
                        <div class="flex flex-col">
                            <span class="text-xl font-serif font-bold text-blue-700 leading-tight">HUELLAS</span>
                            <span class="text-sm font-serif text-blue-600 leading-tight">EN EL CIELO</span>
                        </div>
                    </div>
                </div>

                <!-- Desktop Navigation -->
                <div class="hidden md:flex items-center space-x-8">
                    <a href="#portada"
                        class="text-blue-700 hover:text-blue-900 transition-colors duration-200 font-medium">Portada</a>
                    <a href="#servicios"
                        class="text-blue-700 hover:text-blue-900 transition-colors duration-200 font-medium">Servicios</a>
                    <a href="#quienes-somos"
                        class="text-blue-700 hover:text-blue-900 transition-colors duration-200 font-medium">Quienes
                        Somos</a>
                    <a href="#mision"
                        class="text-blue-700 hover:text-blue-900 transition-colors duration-200 font-medium">Nuestra
                        Misión</a>
                </div>

                <!-- Mobile menu button -->
                <div class="md:hidden">
                    <button wire:click="toggleMenu" class="text-blue-700 hover:text-blue-900 p-2">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Mobile Navigation Menu -->
            <div class="md:hidden" wire:ignore.self>
                <div class="px-2 pt-2 pb-3 space-y-1 bg-white border-t border-blue-100/50 transition-all duration-300 ease-in-out overflow-hidden"
                    style="max-height: {{ $isMenuOpen ? '200px' : '0px' }}; opacity: {{ $isMenuOpen ? '1' : '0' }};">
                    <a href="#portada" wire:click="scrollToSection('portada')"
                        class="block px-3 py-2 text-blue-700 hover:text-blue-900 transition-colors duration-200 font-medium">Portada</a>
                    <a href="#servicios" wire:click="scrollToSection('servicios')"
                        class="block px-3 py-2 text-blue-700 hover:text-blue-900 transition-colors duration-200 font-medium">Servicios</a>
                    <a href="#quienes-somos" wire:click="scrollToSection('quienes-somos')"
                        class="block px-3 py-2 text-blue-700 hover:text-blue-900 transition-colors duration-200 font-medium">Quienes
                        Somos</a>
                    <a href="#mision" wire:click="scrollToSection('mision')"
                        class="block px-3 py-2 text-blue-700 hover:text-blue-900 transition-colors duration-200 font-medium">Nuestra
                        Misión</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Fixed Action Buttons -->
    <div class="fixed bottom-6 right-6 z-40 flex flex-col space-y-3">
        <!-- Phone Button -->
        <a href="tel:+1234567890"
            class="bg-green-600 hover:bg-green-700 text-white p-4 rounded-full shadow-lg transition-all duration-200 hover:scale-110">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                </path>
            </svg>
        </a>

        <!-- WhatsApp Button -->
        <a href="https://wa.me/1234567890" target="_blank"
            class="bg-green-500 hover:bg-green-600 text-white p-4 rounded-full shadow-lg transition-all duration-200 hover:scale-110">
            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                <path
                    d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.488" />
            </svg>
        </a>
    </div>

    <!-- Main Content -->
    <div class="pt-16">
        <!-- Portada Section -->
        <section id="portada" class="min-h-screen flex items-center justify-center px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-4xl mx-auto">
                <div class="mb-8">
                    <div class="inline-flex items-center justify-center w-24 h-24 bg-blue-100/50 rounded-full mb-6">
                        <svg class="w-16 h-16 text-blue-700" viewBox="0 0 24 24" fill="currentColor">
                            <path
                                d="M12 2C13.1 2 14 2.9 14 4C14 5.1 13.1 6 12 6C10.9 6 10 5.1 10 4C10 2.9 10.9 2 12 2ZM21 9V7C21 5.9 20.1 5 19 5H18.5C18.2 4.1 17.4 3.4 16.4 3.1L15.5 2.7C15.2 2.6 14.8 2.6 14.5 2.7L13.6 3.1C12.6 3.4 11.8 4.1 11.5 5H5C3.9 5 3 5.9 3 7V9C3 10.1 3.9 11 5 11H19C20.1 11 21 10.1 21 9ZM7 13C5.9 13 5 13.9 5 15V17C5 18.1 5.9 19 7 19H17C18.1 19 19 18.1 19 17V15C19 13.9 18.1 13 17 13H7Z" />
                        </svg>
                    </div>
                    <h1 class="text-4xl sm:text-5xl lg:text-6xl font-serif font-bold text-blue-800 mb-4">
                        HUELLAS
                    </h1>
                    <h2 class="text-2xl sm:text-3xl lg:text-4xl font-serif font-semibold text-blue-700 mb-6">
                        EN EL CIELO
                    </h2>
                    <div class="w-24 h-1 bg-blue-300 mx-auto mb-8"></div>
                </div>

                <p class="text-lg sm:text-xl text-blue-600 mb-8 max-w-2xl mx-auto leading-relaxed">
                    Brindamos un servicio de cremación digno y respetuoso para las mascotas que han partido,
                    honrando el amor y la compañía que nos dieron durante su vida.
                </p>

                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="#servicios"
                        class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-3 rounded-lg font-medium transition-colors duration-200">
                        Conocer Nuestros Servicios
                    </a>
                    <a href="#quienes-somos"
                        class="border-2 border-blue-600 text-blue-600 hover:bg-blue-600 hover:text-white px-8 py-3 rounded-lg font-medium transition-all duration-200">
                        Conocenos
                    </a>
                </div>
            </div>
        </section>

        <!-- Servicios Section -->
        <section id="servicios" class="py-20 px-4 sm:px-6 lg:px-8 bg-white/50">
            <div class="max-w-6xl mx-auto">
                <div class="text-center mb-16">
                    <h2 class="text-3xl sm:text-4xl font-serif font-bold text-blue-800 mb-4">Nuestros Servicios</h2>
                    <div class="w-24 h-1 bg-blue-300 mx-auto mb-6"></div>
                    <p class="text-lg text-blue-600 max-w-2xl mx-auto">
                        Ofrecemos servicios integrales de cremación con la máxima dignidad y respeto
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Servicio 1 -->
                    <div
                        class="bg-white p-8 rounded-xl shadow-lg border border-blue-100/50 hover:shadow-xl transition-shadow duration-300">
                        <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mb-6 mx-auto">
                            <svg class="w-8 h-8 text-blue-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-serif font-semibold text-blue-800 mb-4 text-center">Cremación Individual
                        </h3>
                        <p class="text-blue-600 text-center leading-relaxed">
                            Cremación individual garantizada para tu mascota, con entrega de cenizas en urna
                            personalizada.
                        </p>
                    </div>

                    <!-- Servicio 2 -->
                    <div
                        class="bg-white p-8 rounded-xl shadow-lg border border-blue-100/50 hover:shadow-xl transition-shadow duration-300">
                        <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mb-6 mx-auto">
                            <svg class="w-8 h-8 text-blue-700" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-serif font-semibold text-blue-800 mb-4 text-center">Recogida a
                            Domicilio</h3>
                        <p class="text-blue-600 text-center leading-relaxed">
                            Servicio de recogida en tu hogar con la máxima discreción y respeto por tu dolor.
                        </p>
                    </div>

                    <!-- Servicio 3 -->
                    <div
                        class="bg-white p-8 rounded-xl shadow-lg border border-blue-100/50 hover:shadow-xl transition-shadow duration-300">
                        <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mb-6 mx-auto">
                            <svg class="w-8 h-8 text-blue-700" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-serif font-semibold text-blue-800 mb-4 text-center">Certificados</h3>
                        <p class="text-blue-600 text-center leading-relaxed">
                            Documentación oficial y certificados de cremación para tu tranquilidad y recuerdo.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Quienes Somos Section -->
        <section id="quienes-somos" class="py-20 px-4 sm:px-6 lg:px-8">
            <div class="max-w-6xl mx-auto">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                    <div>
                        <h2 class="text-3xl sm:text-4xl font-serif font-bold text-blue-800 mb-6">Quienes Somos</h2>
                        <div class="w-24 h-1 bg-blue-300 mb-8"></div>
                        <p class="text-lg text-blue-600 mb-6 leading-relaxed">
                            Somos una empresa familiar con más de 15 años de experiencia en el cuidado y respeto
                            hacia las mascotas que han partido. Entendemos que cada mascota es única y especial.
                        </p>
                        <p class="text-lg text-blue-600 mb-6 leading-relaxed">
                            Nuestro equipo está formado por profesionales comprometidos con brindar un servicio
                            digno y compasivo durante los momentos más difíciles para las familias.
                        </p>
                        <div class="flex items-center space-x-4">
                            <div class="flex items-center space-x-2">
                                <div class="w-3 h-3 bg-blue-600 rounded-full"></div>
                                <span class="text-blue-700 font-medium">15+ años de experiencia</span>
                            </div>
                        </div>
                        <div class="flex items-center space-x-4 mt-3">
                            <div class="flex items-center space-x-2">
                                <div class="w-3 h-3 bg-blue-600 rounded-full"></div>
                                <span class="text-blue-700 font-medium">Miles de familias atendidas</span>
                            </div>
                        </div>
                    </div>

                    <div class="relative">
                        <div class="bg-blue-100/50 rounded-2xl p-8">
                            <div class="text-center">
                                <div
                                    class="w-20 h-20 bg-blue-200 rounded-full flex items-center justify-center mx-auto mb-6">
                                    <svg class="w-12 h-12 text-blue-700" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z">
                                        </path>
                                    </svg>
                                </div>
                                <h3 class="text-xl font-serif font-semibold text-blue-800 mb-4">Nuestro Compromiso</h3>
                                <p class="text-blue-600 leading-relaxed">
                                    Tratamos a cada mascota como si fuera nuestra propia familia,
                                    con el amor y respeto que se merecen.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Nuestra Misión Section -->
        <section id="mision" class="py-20 px-4 sm:px-6 lg:px-8 bg-white/50">
            <div class="max-w-6xl mx-auto">
                <div class="text-center mb-16">
                    <h2 class="text-3xl sm:text-4xl font-serif font-bold text-blue-800 mb-4">Nuestra Misión</h2>
                    <div class="w-24 h-1 bg-blue-300 mx-auto mb-8"></div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12">
                    <div class="text-center">
                        <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-6">
                            <svg class="w-8 h-8 text-blue-700" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-serif font-semibold text-blue-800 mb-4">Dignidad</h3>
                        <p class="text-blue-600">
                            Tratar a cada mascota con el respeto y dignidad que merece
                        </p>
                    </div>

                    <div class="text-center">
                        <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-6">
                            <svg class="w-8 h-8 text-blue-700" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-serif font-semibold text-blue-800 mb-4">Compasión</h3>
                        <p class="text-blue-600">
                            Brindar apoyo emocional a las familias en su momento de dolor
                        </p>
                    </div>

                    <div class="text-center">
                        <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-6">
                            <svg class="w-8 h-8 text-blue-700" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-serif font-semibold text-blue-800 mb-4">Excelencia</h3>
                        <p class="text-blue-600">
                            Mantener los más altos estándares de calidad en todos nuestros servicios
                        </p>
                    </div>
                </div>

                <div class="text-center">
                    <p class="text-lg text-blue-600 max-w-3xl mx-auto leading-relaxed mb-8">
                        Nuestra misión es proporcionar un servicio de cremación que honre la memoria de tu mascota
                        y te ayude a encontrar paz en estos momentos difíciles. Creemos que cada mascota deja
                        huellas imborrables en nuestros corazones, y es nuestro deber honrar esas huellas con
                        respeto y amor.
                    </p>

                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="tel:+1234567890"
                            class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-3 rounded-lg font-medium transition-colors duration-200 inline-flex items-center justify-center">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                                </path>
                            </svg>
                            Llamar Ahora
                        </a>
                        <a href="https://wa.me/1234567890" target="_blank"
                            class="bg-green-500 hover:bg-green-600 text-white px-8 py-3 rounded-lg font-medium transition-colors duration-200 inline-flex items-center justify-center">
                            <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.488" />
                            </svg>
                            WhatsApp
                        </a>
                    </div>
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
                    Honrando la memoria de tus mascotas con amor y respeto
                </p>
                <div class="border-t border-blue-700 pt-6">
                    <p class="text-blue-300 text-sm">
                        © 2024 Huellas en el Cielo. Todos los derechos reservados.
                    </p>
                </div>
            </div>
        </footer>
    </div>

    <!-- JavaScript for smooth scrolling -->
    <script>
        document.addEventListener('livewire:init', () => {
            Livewire.on('scroll-to-section', (event) => {
                const sectionId = event.sectionId;
                const element = document.getElementById(sectionId);
                if (element) {
                    // Cerrar el menú móvil si está abierto
                    @this.set('isMenuOpen', false);

                    // Scroll suave a la sección
                    element.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Cerrar menú móvil al hacer click fuera de él
        document.addEventListener('click', function(event) {
            const mobileMenu = document.querySelector('.md\\:hidden');
            const menuButton = document.querySelector('[wire\\:click="toggleMenu"]');

            if (mobileMenu && menuButton && !mobileMenu.contains(event.target) && !menuButton.contains(event
                    .target)) {
                @this.set('isMenuOpen', false);
            }
        });

        // Cerrar menú móvil al redimensionar la ventana
        window.addEventListener('resize', function() {
            if (window.innerWidth >= 768) { // md breakpoint
                @this.set('isMenuOpen', false);
            }
        });
    </script>
</div>
