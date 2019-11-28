<template>
    <li class="list-group-item flex-column align-items-start">
        <div class="d-flex w-10 justify-content-between">
            {{ item.exhibition_name }}
        </div>
        <small>
            {{ item.start_exhibition | moment('DD.MM.YYYY hh:mm A') }}
            - {{ item.end_exhibition  | moment('DD.MM.YYYY hh:mm A') }}
        </small>
    </li>
</template>

<script>
    export default {
        props: {
            item: {
                required: true,
            }
        },
    }
</script>