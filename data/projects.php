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
        'demo'        => 'https://eventz.dangrares.cl',
        'repo'        => 'https://github.com/1101D/proyecto1',
        'estado'      => 'Demo completa',
        'demo_credenciales' => ['email' => 'demo@dangrares.cl', 'password' => 'demodemo123'],
    ],
    [
        'id'          => 'control-finanzas',
        'titulo'      => 'Control de Ingresos y Gastos',
        'descripcion' => 'Aplicación Laravel para gestión financiera: ingresos y gastos con categorías y subcategorías, gastos vinculados a su categoría de ingreso de origen, entradas de comisiones, e informes diarios, semanales, mensuales, anuales o por rango de fechas.',
        'categoria'   => 'webapp',
        'stack'       => ['Laravel', 'Breeze', 'Tailwind CSS', 'SQLite'],
        'imagen'      => 'https://picsum.photos/seed/control-finanzas/640/420',
        'demo'        => 'https://finanzas.dangrares.cl',
        'repo'        => 'https://github.com/1101D/proyecto2',
        'estado'      => 'Demo completa',
        'demo_credenciales' => ['email' => 'demo@dangrares.cl', 'password' => 'demodemo123'],
    ],
    [
        'id'          => 'gestion-inventario',
        'titulo'      => 'Gestión de Inventario y Despachos',
        'descripcion' => 'Sistema Laravel para control de almacén: productos con stock por ubicación y kardex, pedidos internos con flujo de estados y picking list, despachos con vehículos, órdenes de compra a proveedores, roles de usuario (admin/almacenista/despachador/consultor) e informes exportables a Excel y PDF.',
        'categoria'   => 'webapp',
        'stack'       => ['Laravel', 'Alpine.js', 'Tailwind CSS', 'SQLite'],
        'imagen'      => 'https://picsum.photos/seed/gestion-inventario/640/420',
        'demo'        => 'https://inventario.dangrares.cl',
        'repo'        => 'https://github.com/1101D/proyecto3',
        'estado'      => 'Demo completa',
        'demo_credenciales' => ['email' => 'admin@proyecto3.test', 'password' => 'admin12345'],
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
