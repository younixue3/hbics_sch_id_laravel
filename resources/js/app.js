/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

// require('./bootstrap');

import Vue from 'vue';
window.Vue = require('vue').default;

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

// Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('nav-bar-component', require('./components/layout/NavBarComponent.vue').default);
Vue.component('content-card-component', require('./components/widget/ContentCardComponent').default)
Vue.component('testimoni-component', require('./components/widget/TestimoniComponent').default)
Vue.component('hero-component', require('./components/widget/HeroComponent').default)
Vue.component('hero-alumni-component', require('./components/widget/HeroAlumniComponent').default)
Vue.component('snap-component', require('./components/widget/SnapComponent').default)
Vue.component('snap-alumni-component', require('./components/widget/SnapAlumniComponent').default)

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
