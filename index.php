<?php
declare(strict_types=1);

$perfil    = require __DIR__ . '/data/perfil.php';
$proyectos = require __DIR__ . '/data/projects.php';

$categorias = [
    'todos'    => 'Todos',
    'webapp'   => 'Web Apps',
    'ecommerce' => 'E-commerce',
    'api'      => 'APIs',
];

function e(string $valor): string
{
    return htmlspecialchars($valor, ENT_QUOTES, 'UTF-8');
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?= e($perfil['nombre']) ?> · Portafolio</title>
<meta name="description" content="<?= e($perfil['resumen']) ?>">
<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<header class="site-header">
    <nav class="navbar container">
        <a href="#inicio" class="logo">&lt;<span>Dev</span>/&gt;</a>
        <ul class="nav-links">
            <li><a href="#inicio">Inicio</a></li>
            <li><a href="#sobre-mi">Sobre mí</a></li>
            <li><a href="#proyectos">Proyectos</a></li>
            <li><a href="#contacto">Contacto</a></li>
        </ul>
        <button class="nav-toggle" aria-label="Abrir menú">&#9776;</button>
    </nav>
</header>

<main>
    <section id="inicio" class="hero">
        <div class="hero-inner container">
            <span class="tag">PORTAFOLIO EN DESARROLLO</span>
            <h1><?= e($perfil['nombre']) ?> <span class="highlight">.</span></h1>
            <p class="handle">@<?= e($perfil['usuario']) ?></p>
            <p class="subtitle"><?= e($perfil['titulo']) ?></p>
            <p class="summary"><?= e($perfil['resumen']) ?></p>
            <div class="hero-actions">
                <a href="#proyectos" class="btn btn-primary">Ver proyectos</a>
                <a href="#contacto" class="btn btn-outline">Contactar</a>
            </div>
        </div>
    </section>

    <section id="sobre-mi" class="section">
        <div class="container">
            <div class="section-heading">
                <span class="eyebrow">Sobre mí</span>
                <h2>Cómo trabajo</h2>
            </div>

            <div class="about-text">
                <?php foreach ($perfil['sobre_mi'] as $parrafo): ?>
                    <p><?= e($parrafo) ?></p>
                <?php endforeach; ?>
            </div>

            <h3 class="about-subheading">Habilidades y tecnologías</h3>
            <div class="skills-grid">
                <?php foreach ($perfil['habilidades'] as $habilidad): ?>
                    <span class="skill-badge"><?= e($habilidad) ?></span>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section id="proyectos" class="section">
        <div class="container">
            <div class="section-heading">
                <span class="eyebrow">Galería</span>
                <h2>Proyectos con Laravel</h2>
                <p>Una selección de proyectos demo construidos con Laravel y su ecosistema. Haz clic en cualquiera para ver más detalles.</p>
            </div>

            <div class="filters">
                <?php foreach ($categorias as $clave => $etiqueta): ?>
                    <button
                        class="filter-btn <?= $clave === 'todos' ? 'active' : '' ?>"
                        data-filter="<?= e($clave) ?>"
                    ><?= e($etiqueta) ?></button>
                <?php endforeach; ?>
            </div>

            <div class="gallery-grid">
                <?php foreach ($proyectos as $proyecto): ?>
                    <article
                        class="project-card"
                        data-categoria="<?= e($proyecto['categoria']) ?>"
                        data-titulo="<?= e($proyecto['titulo']) ?>"
                        data-descripcion="<?= e($proyecto['descripcion']) ?>"
                        data-imagen="<?= e($proyecto['imagen']) ?>"
                        data-stack="<?= e(implode('|', $proyecto['stack'])) ?>"
                        data-demo="<?= e($proyecto['demo']) ?>"
                        data-repo="<?= e($proyecto['repo']) ?>"
                        <?php if (!empty($proyecto['demo_credenciales'])): ?>
                            data-demo-email="<?= e($proyecto['demo_credenciales']['email']) ?>"
                            data-demo-password="<?= e($proyecto['demo_credenciales']['password']) ?>"
                        <?php endif; ?>
                    >
                        <div class="project-thumb">
                            <img src="<?= e($proyecto['imagen']) ?>" alt="<?= e($proyecto['titulo']) ?>" loading="lazy">
                            <span class="project-status"><?= e($proyecto['estado']) ?></span>
                        </div>
                        <div class="project-body">
                            <h3><?= e($proyecto['titulo']) ?></h3>
                            <p><?= e($proyecto['descripcion']) ?></p>
                            <ul class="stack-list">
                                <?php foreach ($proyecto['stack'] as $tech): ?>
                                    <li><?= e($tech) ?></li>
                                <?php endforeach; ?>
                            </ul>
                            <?php if (!empty($proyecto['demo_credenciales'])): ?>
                                <p class="demo-credentials">
                                    Demo: <code><?= e($proyecto['demo_credenciales']['email']) ?></code> / <code><?= e($proyecto['demo_credenciales']['password']) ?></code>
                                </p>
                            <?php endif; ?>
                            <div class="project-links">
                                <a href="<?= e($proyecto['demo']) ?>" onclick="event.stopPropagation()" target="_blank" rel="noopener">Ver demo &rarr;</a>
                                <a href="<?= e($proyecto['repo']) ?>" onclick="event.stopPropagation()" target="_blank" rel="noopener">Código &rarr;</a>
                            </div>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>

            <p class="empty-state">No hay proyectos en esta categoría todavía.</p>
        </div>
    </section>

    <section id="contacto" class="section">
        <div class="container">
            <div class="contact-card">
                <div class="section-heading">
                    <span class="eyebrow">Contacto</span>
                    <h2>¿Hablamos de tu proyecto?</h2>
                    <p>Estoy disponible para trabajos freelance y oportunidades a tiempo completo.</p>
                </div>
                <div class="contact-actions">
                    <a class="btn btn-primary" href="mailto:<?= e($perfil['email']) ?>"><?= e($perfil['email']) ?></a>
                    <a class="btn btn-outline" href="<?= e($perfil['github']) ?>" target="_blank" rel="noopener">GitHub</a>
                    <a class="btn btn-outline" href="<?= e($perfil['linkedin']) ?>" target="_blank" rel="noopener">LinkedIn</a>
                </div>
            </div>
        </div>
    </section>
</main>

<footer class="site-footer">
    <div class="container">
        &copy; <?= date('Y') ?> <?= e($perfil['nombre']) ?>. Todos los derechos reservados.
    </div>
</footer>

<div class="modal-overlay">
    <div class="modal">
        <button class="modal-close" aria-label="Cerrar">&times;</button>
        <img src="" alt="">
        <div class="modal-body">
            <h3 class="modal-title"></h3>
            <p class="modal-desc"></p>
            <ul class="stack-list modal-stack"></ul>
            <p class="demo-credentials modal-credentials" style="display:none;"></p>
            <div class="project-links">
                <a class="modal-demo" href="#" target="_blank" rel="noopener">Ver demo &rarr;</a>
                <a class="modal-repo" href="#" target="_blank" rel="noopener">Código &rarr;</a>
            </div>
        </div>
    </div>
</div>

<script src="assets/js/main.js"></script>
</body>
</html>
