<?php
/**
 * Fuente de datos de los proyectos de la galería.
 * Reemplaza estos datos por los tuyos, o conéctalo a una base de datos
 * (por ejemplo, leyendo desde una tabla `projects` de tu propia app Laravel).
 */

return [
    [
        'id'          => 'eventz',
        'titulo'      => 'Eventz — Plataforma de Eventos',
        'descripcion' => 'Plataforma completa de gestión de eventos: panel web para organizadores (Laravel), API REST con Sanctum, y dos apps móviles en Flutter (organizador y asistentes) con reserva de entradas, entrada digital con QR y escáner de check-in.',
        'categoria'   => 'webapp',
        'stack'       => ['Laravel', 'Sanctum', 'Flutter', 'SQLite', 'App iOS', 'App Android'],
        'imagen'      => 'https://picsum.photos/seed/eventz-platform/640/420',
        'demo'        => 'https://github.com/1101D/proyecto1',
        'repo'        => 'https://github.com/1101D/proyecto1',
        'estado'      => 'Demo completa',
    ],
    [
        'id'          => 'control-finanzas',
        'titulo'      => 'Control de Ingresos y Gastos',
        'descripcion' => 'Aplicación Laravel para gestión financiera: ingresos y gastos con categorías y subcategorías, gastos vinculados a su categoría de ingreso de origen, entradas de comisiones, e informes diarios, semanales, mensuales, anuales o por rango de fechas.',
        'categoria'   => 'webapp',
        'stack'       => ['Laravel', 'Breeze', 'Tailwind CSS', 'SQLite'],
        'imagen'      => 'https://picsum.photos/seed/control-finanzas/640/420',
        'demo'        => 'https://github.com/1101D/proyecto2',
        'repo'        => 'https://github.com/1101D/proyecto2',
        'estado'      => 'Demo completa',
    ],
    [
        'id'          => 'api-inventario',
        'titulo'      => 'API de Inventario',
        'descripcion' => 'API RESTful para control de stock, con autenticación mediante Sanctum y documentación con Swagger.',
        'categoria'   => 'api',
        'stack'       => ['Laravel', 'Sanctum', 'PostgreSQL', 'Swagger'],
        'imagen'      => 'https://picsum.photos/seed/api-inventario/640/420',
        'demo'        => '#',
        'repo'        => '#',
        'estado'      => 'Demo',
    ],
    [
        'id'          => 'blog-cms',
        'titulo'      => 'CMS de Blog',
        'descripcion' => 'Sistema de gestión de contenido con editor enriquecido, categorías, comentarios y roles de usuario.',
        'categoria'   => 'webapp',
        'stack'       => ['Laravel', 'Blade', 'MySQL', 'Bootstrap'],
        'imagen'      => 'https://picsum.photos/seed/blog-cms/640/420',
        'demo'        => '#',
        'repo'        => '#',
        'estado'      => 'En desarrollo',
    ],
    [
        'id'          => 'reservas-restaurante',
        'titulo'      => 'Reservas de Restaurante',
        'descripcion' => 'Plataforma para reservar mesas online, con calendario disponible, confirmación por correo y panel de gestión.',
        'categoria'   => 'webapp',
        'stack'       => ['Laravel', 'Alpine.js', 'MySQL', 'Tailwind CSS'],
        'imagen'      => 'https://picsum.photos/seed/reservas-restaurante/640/420',
        'demo'        => '#',
        'repo'        => '#',
        'estado'      => 'En producción',
    ],
    [
        'id'          => 'api-pagos',
        'titulo'      => 'Microservicio de Pagos',
        'descripcion' => 'Microservicio para procesar pagos y suscripciones, integrado con webhooks y colas de trabajo.',
        'categoria'   => 'api',
        'stack'       => ['Laravel', 'Queues', 'Redis', 'MySQL'],
        'imagen'      => 'https://picsum.photos/seed/api-pagos/640/420',
        'demo'        => '#',
        'repo'        => '#',
        'estado'      => 'Demo',
    ],
];
