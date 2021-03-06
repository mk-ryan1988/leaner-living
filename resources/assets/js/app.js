
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
import VeeValidate from 'vee-validate';
import { Form, HasError, AlertError } from 'vform'
// import Vuetify from 'vuetify';

// Vue.use(Vuetify);

// import 'vuetify/dist/vuetify.min.css';

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// Vue.component('navbar', require('./components/navbar.vue'));
Vue.component('parqForm', require('./components/par-q.vue'));

const app = new Vue({
    el: '#app'
});
