/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

// require('./bootstrap');

import Vue from 'vue';
import Vuex from "vuex";
import vClickOutside from 'v-click-outside'

window.Vue = require('vue').default;
Vue.use(Vuex)

const store = new Vuex.Store({
    state: {
        csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
        modalvalidation: {
            item: null,
            massage: null,
            url: {
                url_req: null,
                validation_form: null,
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
                status: false
            },
            modaladd: {
                status: false
            },
            modalstaff: {
                status: false
            }
        },
        workspace: {items: []},
        file: 0
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
        },
        toggleModalAdd (state) {
            state.modal.modaladd.status = state.modal.modaladd.status === false;
            if (state.modal.modaladd.status === true) {
                document.body.classList.add('removescrollbar', 'overflow-hidden')
            } else {
                document.body.classList.remove('removescrollbar', 'overflow-hidden')
            }
        },
        toggleModalChangePassword (state) {
            state.modal.modalstaff.status = state.modal.modalstaff.status === false;
            if (state.modal.modalstaff.status === true) {
                document.body.classList.add('removescrollbar', 'overflow-hidden')
            } else {
                document.body.classList.remove('removescrollbar', 'overflow-hidden')
            }
        },
        pushData(state, item) {
            state.workspace.items.push(item)
        },
        deleteData(state, item) {
            // console.log(item)
            if (state.workspace.items[item].type === 'image' || state.workspace.items[item].type === 'video') {
                state.file = state.file - 1
            }
            state.workspace.items.splice(item, 1);
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
Vue.component('mac-card-component', require('./components/widget/MacCardComponent').default)
Vue.component('nav-bar-dash-component', require('./components/layout/NavBarDashComponent').default)
Vue.component('modal-show-component', require('./components/widget/ModalShowComponent').default)
Vue.component('notification-component', require('./components/widget/NotificationComponent').default)
Vue.component('multiple-select-component', require('./components/widget/MutipleselectComponent').default)

//FUNCTION
Vue.component('modal-add-function', require('./components/function/form/ModalAddFunction').default)
Vue.component('modal-validation-function', require('./components/function/ModalValidationFunction').default)
Vue.component('modal-edit-function', require('./components/function/form/ModalEditFunction').default)
Vue.component('button-add-function', require('./components/function/ButtonAddFunction').default)

//FASILITAS Widget
////FRONT
Vue.component('fasilitas-component', require('./components/widget/FasilitasComponent').default)
////DASHBOARD
Vue.component('card-fasilitas-component', require('./components/widget/CardFasilitasComponent').default)

//STAFF Widget & Function
Vue.component('form-staff-component', require('./components/widget/staff/FormStaffComponent').default)
Vue.component('form-staff-edit-component', require('./components/widget/staff/FormEditComponent').default)
Vue.component('form-staff-change-password-component', require('./components/widget/staff/FormChangePasswordComponent').default)
Vue.component('modal-staff-change-password-function', require('./components/function/form/staff/ModalChangePassword').default)
Vue.component('modal-remove-superadmin', require('./components/function/form/staff/ModalRemoveSuperadmin').default)
Vue.component('button-show-component', require('./components/widget/ButtonShowComponent').default)

//Publikasi Widget & Function
Vue.component('workspace-publikasi-function', require('./components/function/publikasi/WorkspacePublikasiFunction').default)
Vue.component('button-dot-menu-component', require('./components/widget/publikasi/ButtonDotMenuComponent').default)
Vue.component('item-render-function', require('./components/function/publikasi/ItemRenderFunction').default)
Vue.component('button-gear-menu-component', require('./components/widget/publikasi/ButtonGearMenuComponent').default)
////Publikasi Workspace Component
Vue.component('title-workspace', require('./components/workspace/TitleWorkspace').default)
Vue.component('paragraph-workspace', require('./components/workspace/ParagraphWorkspace').default)
Vue.component('image-workspace', require('./components/workspace/ImageWorkspace').default)
Vue.component('video-workspace', require('./components/workspace/VideoWorkspace').default)

//PRESTASI Widget & Function
Vue.component('form-prestasi-component', require('./components/widget/prestasi/FormPrestasiComponent').default)
Vue.component('form-prestasi-edit-component', require('./components/widget/prestasi/FormEditComponent').default)

//KOMUNITAS Widget & Function
Vue.component('form-komunitas-component', require('./components/widget/komunitas/FormKomunitasComponent').default)
Vue.component('form-komunitas-edit-component', require('./components/widget/komunitas/FormEditComponent').default)


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
Vue.use(vClickOutside)

const app = new Vue({
    el: '#app',
    store: store,
    computed: {
        storeCall() {
            return this.$store.state
        }
    },
    directives: {
        clickOutside: vClickOutside.directive
    },
});
