<template>
    <ul class="select-menu">
        <span class="glyphicon glyphicon-menu-left" v-on:click="previousColumn"></span>
        <li>none</li>
        <li></li>
        <span class="glyphicon glyphicon-menu-right" v-on:click="nextColumn"></span>
    </ul>
</template>

<script>
    export default {
        data() {
            return {
                count: ''
            }
        },
        created() {
            const self = this;
            const instance = axios.create({
                baseURL: location.origin,
                headers: { 'Content-Type': 'application/json' }
            });
            instance.get('/api/stats')
                .then(function(response) {
                    self.count = response.data['count'];
                    self.$emit('fetch');
                    console.log(response);
                }).catch(function(response) {
                    console.log(response);
                });
        }
    }
</script>