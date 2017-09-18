
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const LoadingSpinner = require('./components/LoadingSpinner.vue');
const TableStats = require('./components/TableStats.vue');

const app = new Vue({
    el: '#app',
    data: {
        target: 0,
        loading: { display: 'block' }
    },
    methods: {
        completeAjax: function() {
            this.loading = { display: 'none' };
        },
        previousValue: function(ev) {
            this.target -= 1;
        },
        nextValue: function(ev) {
            this.target += 1;
        }
    },
    components: {
        'loading-spinner': LoadingSpinner,
        'table-stats': TableStats
    }
});
