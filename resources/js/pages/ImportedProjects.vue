<template>
    <div>
        <h1>Imported</h1>
        <ul class="list-group" v-for="exhibition in exhibitions">
            <project-items v-if="$auth.check() || exhibition.id % 2 === 0" :item="exhibition"></project-items>
        </ul>
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
                axios.get("/imported", {headers: {}})
                    .then(response => (this.exhibitions = response.data))
            },
        },
        mounted() {
            this.loadData();
        },
        components: {
            ProjectItems
        }
    }
</script>