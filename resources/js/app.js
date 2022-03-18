/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

// require('./bootstrap');

import Vue from 'vue';
import Vuex from "vuex";

window.Vue = require('vue').default;
Vue.use(Vuex)

const store = new Vuex.Store({
    state: {
        csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
        modalvalidation: {
            item: null,
            massage: null,
            url: {
                edit_req: null,
                delete_req: null
            },
            status: false,
        },
        modal: {
            modalshow: {
                item: null,
                type: null,
                status: false
            },
            modaledit: {
                item: null,
                status: false
            }
        }
    },
    mutations: {
        toggleModalValidationView (state) {
            state.modalvalidation.status = state.modalvalidation.status === false;
            if (state.modalvalidation.status === true) {
                document.body.classList.add('removescrollbar', 'overflow-hidden')
            } else {
                document.body.classList.remove('removescrollbar', 'overflow-hidden')
            }
        },
        toggleModalShow (state) {
            state.modal.modalshow.status = state.modal.modalshow.status === false;
            if (state.modal.modalshow.status === true) {
                document.body.classList.add('removescrollbar', 'overflow-hidden')
            } else {
                document.body.classList.remove('removescrollbar', 'overflow-hidden')
            }
        },
        toggleModalEdit (state) {
            state.modal.modaledit.status = state.modal.modaledit.status === false;
            if (state.modal.modaledit.status === true) {
                document.body.classList.add('removescrollbar', 'overflow-hidden')
            } else {
                document.body.classList.remove('removescrollbar', 'overflow-hidden')
            }
        }
    }
})
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
Vue.component('fasilitas-component', require('./components/widget/FasilitasComponent').default)
Vue.component('mac-card-component', require('./components/widget/MacCardComponent').default)
Vue.component('nav-bar-dash-component', require('./components/layout/NavBarDashComponent').default)
Vue.component('add-fasilitas-function', require('./components/function/AddFasilitasFunction').default)
Vue.component('modal-validation-function', require('./components/function/ModalValidationFunction').default)
Vue.component('card-fasilitas-component', require('./components/widget/CardFasilitasComponent').default)
Vue.component('modal-show-fasilitas-component', require('./components/widget/fasilitas/ModalShowFasilitasComponent').default)
Vue.component('modal-edit-fasilitas-function', require('./components/function/fasilitas/ModalEditFunction').default)

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    store: store,
});
