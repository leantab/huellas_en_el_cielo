<?php

declare(strict_types=1);

use function Pest\Laravel\get;

test('landing page loads successfully', function () {
    $response = get('/');

    $response->assertSuccessful();
    $response->assertSee('HUELLAS');
    $response->assertSee('EN EL CIELO');
});

test('landing page contains all required sections', function () {
    $response = get('/');

    // Verificar que todas las secciones estén presentes
    $response->assertSee('id="portada"');
    $response->assertSee('id="servicios"');
    $response->assertSee('id="quienes-somos"');
    $response->assertSee('id="mision"');
});

test('landing page contains navigation menu', function () {
    $response = get('/');

    // Verificar navegación
    $response->assertSee('Portada');
    $response->assertSee('Servicios');
    $response->assertSee('Quienes Somos');
    $response->assertSee('Nuestra Misión');
});

test('landing page contains action buttons', function () {
    $response = get('/');

    // Verificar botones de acción
    $response->assertSee('Llamar Ahora');
    $response->assertSee('WhatsApp');
    $response->assertSee('tel:+1234567890');
    $response->assertSee('wa.me/1234567890');
});

test('landing page contains services information', function () {
    $response = get('/');

    // Verificar información de servicios
    $response->assertSee('Cremación Individual');
    $response->assertSee('Recogida');
    $response->assertSee('Domicilio');
    $response->assertSee('Certificados');
});

test('landing page contains company information', function () {
    $response = get('/');

    // Verificar información de la empresa
    $response->assertSee('15+ años de experiencia');
    $response->assertSee('Miles de familias atendidas');
});

test('landing page contains mission values', function () {
    $response = get('/');

    // Verificar valores de la misión
    $response->assertSee('Dignidad');
    $response->assertSee('Compasión');
    $response->assertSee('Excelencia');
});

test('landing page route is accessible', function () {
    $response = get('/landing');

    $response->assertSuccessful();
    $response->assertSee('HUELLAS');
    $response->assertSee('EN EL CIELO');
});
