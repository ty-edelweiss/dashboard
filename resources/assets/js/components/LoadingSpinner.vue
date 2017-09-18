<template>
    <div class="loading-container" v-bind:style="loading">
        <div class="loading">
            <div class="spinner">
                <div class="double-bounce1"></div>
                <div class="double-bounce2"></div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: {
            loading: {
                type: Object,
                required: true
            }
        }
    }
</script>