<?php
/**
 * Fuente de datos de los proyectos de la galería.
 * Reemplaza estos datos por los tuyos, o conéctalo a una base de datos
 * (por ejemplo, leyendo desde una tabla `projects` de tu propia app Laravel).
 */

return [
    [
        'id'          => 'ecommerce-laravel',
        'titulo'      => 'Tienda Online',
        'descripcion' => 'E-commerce completo con carrito de compras, pasarela de pago simulada, panel de administración y control de inventario.',
        'categoria'   => 'ecommerce',
        'stack'       => ['Laravel', 'Livewire', 'MySQL', 'Tailwind CSS'],
        'imagen'      => 'https://picsum.photos/seed/ecommerce-laravel/640/420',
        'demo'        => '#',
        'repo'        => '#',
        'estado'      => 'Demo',
    ],
    [
        'id'          => 'gestor-tareas',
        'titulo'      => 'Gestor de Tareas',
        'descripcion' => 'Aplicación tipo Trello para organizar tareas en tableros, con drag & drop y notificaciones en tiempo real.',
        'categoria'   => 'webapp',
        'stack'       => ['Laravel', 'Vue.js', 'Pusher', 'MySQL'],
        'imagen'      => 'https://picsum.photos/seed/gestor-tareas/640/420',
        'demo'        => '#',
        'repo'        => '#',
        'estado'      => 'En producción',
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
