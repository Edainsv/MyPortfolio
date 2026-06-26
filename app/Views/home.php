<div id="home" class="container-fluid text-light">
    <div class="d-flex justify-content-center align-items-center flex-column">
        <h1 class="mb-4 fw-bold text-center">Applications web sur-mesure</h1>
        <p class="text-center fw-normal">Conception d'applications web sur-mesure, plateformes métiers et solutions SaaS performantes.</p>

        <div class="mt-4">
            <a href="#projects" class="btn btn-light btn-lg rounded-pill px-4 me-3">Voir mes réalisations</a>
            <a href="#contact" class="btn btn-outline-light btn-lg rounded-pill px-4">Me contacter</a>
        </div>
    </div>
</div>

<div class="container-fluid mb-5" id="about">
    <div class="w-75 m-auto">
        <h2 class="text-center py-5 fw-bold">Qui suis-je ?</h2>

        <div class="row align-items-center">
            

            <div class="col-auto text-center">
                <img src="<?= asset('images/avatar.png') ?>" alt="Photo de profil" class="rounded-circle avatar border border-2 border-primary">
            </div>

            <div class="col">
                <p class="text-center">
                    Je suis Edaïns Vignolle, développeur web freelance passionné par la création de solutions digitales performantes.
                    Avec plusieurs années d'expérience, j'aide les entreprises à concrétiser leurs projets numériques avec des outils modernes et sur-mesure.
                </p>

                <div class="mt-4">
                    <a href="" class="btn btn-primary btn-lg rounded-pill px-4 me-3">Télécharger mon CV</a>
                    <a href="#contact" class="btn btn-outline-secondary btn-lg rounded-pill px-4">Me contacter</a>
                </div>
            </div>

        </div>
    </div>
</div>


<div class="container-fluid pb-5 bg-section-light" id="projects">
    <div class="w-75 m-auto">
        <h2 class="text-center py-5 fw-bold">Mes réalisations</h2>

        <div class="row g-4">
            <card-projects v-bind:cards="<?= json($card_projects) ?>"></card-projects>
        </div>
    </div>
</div>

<div class="container-fluid pb-5" id="skills">
    <h2 class="text-center py-5 fw-bold">Mes expertises</h2>

    <div class="m-auto w-50">
        <h3 class="mb-4">Expertises principales</h3>

        <my-primary-skills v-bind:skills="<?= json($primary_skills) ?>"></my-primary-skills>

        <hr class="mt-5 border-muted mb-4">

        <div>
            <h3 class="text-muted text-uppercase mb-4">Autres technologies maîtrisées</h3>

            <my-secondary-skills v-bind:skills="<?= json($secondary_skills) ?>"></my-secondary-skills>
        </div>
    </div>
</div>

<div class="container-fluid pb-5 bg-section-light" id="contact">
    <h2 class="text-center pt-5 pb-4 fw-bold">Prêt à collaborer ?</h2>

    <p class="text-center text-muted">Discutons de votre projet. Envoyez-moi un message et je vous répondrai sous 24h.</p>

    <form class="w-50 m-auto">
        <div class="mb-3">
            <label class="form-label">Votre email</label>
            <input type="email" class="form-control form-control-lg" placeholder="Votre email">
        </div>

        <div class="mb-4">
            <label class="form-label">Votre message</label>
            <textarea class="form-control form-control-lg" rows="5" placeholder="Votre message"></textarea>
        </div>

        <div class="d-grid mb-4">
            <button type="submit" class="btn btn-dark btn-lg rounded-pill">
                Envoyer le message
            </button>
        </div>
    </form>
</div>