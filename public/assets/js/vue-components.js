globalThis.app.component('card-projects', {
    props: ['cards'],
    mixins: [mixins],
    template: `
        <div class="row g-4">
            <div
                class="col-md-6 col-lg-6"
                v-for="card in cards"
                :key="card.title"
            >
                <div class="card-project card border-0 shadow-sm rounded-4 overflow-hidden">
                    <img
                        :src="asset(card.img)"
                        class="card-img-top"
                        alt="Projet"
                    >

                    <div class="card-body bg-white d-flex flex-column justify-content-evenly">
                        <h5 class="card-title fw-bold mb-2">
                            {{ card.title }}
                        </h5>

                        <p class="card-text text-muted">
                            {{ card.desc }}
                        </p>

                        <div>
                            <a :href="card.link" class="btn btn-primary rounded-pill px-4">
                                Voir le projet
                            </a>
                        </div>
                    </div>
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


globalThis.app.component('my-primary-skills', {
    props: ['skills'],
    template: `
        <div class="mb-4 ps-4">
            <div
                v-for="(skill, index) in skills"
                :key="index"
                v-if="skills.length"
                class="mb-2 ps-3 border border-primary border-top-0 border-end-0 border-bottom-0 border-4"
            >
                <h4>{{ skill.name }}</h4>
                <p class="text-muted">{{ skill.desc }}</p>
            </div>
        </div>
    `
});


globalThis.app.component('my-secondary-skills', {
    props: ['skills'],
    template: `
    <div class="mb-4">
        <div class="row">
            <div v-for="(skill, index) in skills" class="mb-4 col-sm-6 col-md-4 col-12">
                <div
                    :key="index"
                    v-if="skills.length"
                    class="h-100 px-3 py-3 bg-section-light card border-0 shadow-sm"
                >
                    <h4 class="mb-3 fs-bold">{{ skill.name }}</h4>
                    <p class="text-muted">{{ skill.desc }}</p>
                </div>
            </div>
        </div>
    </div>
    `
});