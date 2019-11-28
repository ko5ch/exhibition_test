<template>
    <div id="projects">
        <h1>Projects</h1>
        <ul class="list-group" v-for="exhibition in exhibitions">
            <project-items :item="exhibition"></project-items>
        </ul>
        <button type="button"
                class="btn btn-success btn-lg btn-block"
                v-if="exhibitions.length"
                @click="store()"
        >Import</button>
    </div>
</template>

<script>
    import ProjectItems from './partials/ProjectItems';

    export default {
        data() {
            return {
                exhibitions: [],
            }
        },
        watch: {},
        methods: {
            loadData() {
                axios.get("https://cors-anywhere.herokuapp.com/https://dev.standpoint.com.ua/developer", {headers: {}})
                    .then(response => (this.exhibitions = response.data))
            },
            store() {
                this.axios.post("/auth/import", {
                    exhibitions: this.exhibitions,
                    success: function () {
                         app.success = true;
                    },
                    error: function (res) {
                        console.log(res.response.data.errors);
                        app.has_error = true;
                        app.error = res.response.data.error;
                        app.errors = res.response.data.errors || {}
                    }
                })
            }
        },
        mounted() {
            this.loadData();
        },
        components: {
            ProjectItems
        }
    }
</script>