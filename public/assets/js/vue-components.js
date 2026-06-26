globalThis.app.component('card-project', {
    props: ['title', 'desc', 'link', 'img'],
    mixins: [mixins],
    template: `
    <div class="card-project card border-0 shadow-sm rounded-4 overflow-hidden">
        <img
            v-bind:src="asset(img)"
            class="card-img-top"
            alt="Projet"
        >

        <div class="card-body bg-white d-flex flex-column justify-content-evenly">
            <h5 class="card-title fw-bold mb-2">
                {{ title }}
            </h5>

            <p class="card-text text-muted">
                {{ desc }}
            </p>

            <div>
                <a v-bind:href="link" class="btn btn-primary rounded-pill px-4">
                    Voir le projet
                </a>
            </div>
        </div>
    </div>
    `
});


globalThis.app.component('progress-bar', {
    props: ['title', 'value'],
    template: `
    <div class="mb-4">
        <div class="d-flex justify-content-between text-primary mb-2">
            <div>{{ title }}</div>
            <div>{{ value }} %</div>
        </div>

        <div class="bg-section-light rounded-pill w-100">
            <div class="bg-primary rounded-pill" v-bind:style="'width:' + value + '%'">.</div>
        </div>
    </div>
    `
});