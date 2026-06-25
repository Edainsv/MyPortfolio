<!DOCTYPE html>
<html lang="fr">
<head>
    <title><?= $title ?? 'Mon portfolio' ?></title>

    <meta charset="UTF-8">

    <link rel="stylesheet" href="<?= asset('css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= asset('css/style.css') ?>">
    <link rel="stylesheet" href="<?= asset('css/fonts.css') ?>">

    <script src="<?= asset('js/helpers.js') ?>"></script>
    <script src="<?= asset('js/vue.js') ?>"></script>
    <script src="<?= asset('js/vue-mixins.js') ?>"></script>

    <script>
        globalThis.app = Vue.createApp({});
    </script>

    <script src="<?= asset('js/vue-components.js') ?>"></script>
    <script src="<?= asset('js/app.js') ?>" defer></script>
</head>
<body id="app">
    <header id="header">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container-fluid">
                <a class="navbar-brand fw-bold" href="#hero">E.V.</a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#about">À propos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#projects">Projets</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#skills">Compétences</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main class="px-0">
        <?= $content ?>
    </main>

    <footer class="bg-white border-top border-secondary py-5 px-4">
        <div class="container-fluid mx-auto">
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-center gap-4">
                <div class="d-flex gap-4">
                    <a href="#hero" class="text-decoration-hover text-body">Accueil</a>
                    <a href="#projects" class="text-decoration-hover text-body">Projets</a>
                    <a href="#about" class="text-decoration-hover text-body">À propos</a>
                    <a href="#contact" class="text-decoration-hover text-body">Contact</a>
                </div>

                <p class="text-muted fs-6 text-center text-md-end mb-0">
                    <p>&copy; <?= date('Y') ?> - Mon portfolio</p>
                </p>
            </div>
        </div>
    </footer>
</body>
</html>