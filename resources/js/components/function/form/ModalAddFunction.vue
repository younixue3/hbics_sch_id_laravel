<template>
    <Transition name="fade-rdev">
        <div v-if="$store.state.modal.modaladd.status"
             class="fixed w-screen h-screen bg-black bg-opacity-25 backdrop-blur-sm flex z-50 transition-all ease-in-out duration-300 text-center"
             :class="$store.state.modal.modaladd.status ? 'opacity-100' : 'opacity-0'">
            <div class="bg-white m-auto rounded-3xl relative">
                <button @click="closeModal"
                        class="transition-all ease-in-out duration-300 bg-gray-700 bg-opacity-50 hover:bg-opacity-75 w-10 h-10 text-white text-xl rounded-xl -mt-5 -mr-5 absolute right-0">
                    <!-- Heroicon name: outline/x -->
                    <i class="fa-solid fa-xmark"></i>
                </button>
                <div class="p-5 w-full">
                    <h1 class="text-base font-raleway">Add Data</h1>
                    <form id="formAdd" :action="$store.state.modalvalidation.url.url_req" enctype="multipart/form-data"
                          name="formAdd" method="POST">
                        <input type="hidden" name="_token" :value="$store.state.csrf">
                        <input type="hidden" name="_method" value="post">
                        <slot></slot>
                    </form>
                    <div class="mt-5 grid grid-cols-2 gap-5">
                        <button @click="submitModal"
                                class="bg-indigo-500 text-white text-center rounded-2xl shadow-md px-5 py-1 w-full">
                            <span class="align-text-top">Submit</span></button>
                        <button @click="closeModal"
                                class="border-2 border-red-500 text-red-500 text-center rounded-2xl shadow-md px-5 py-1 w-full">
                            <span class="align-text-top">Cancel</span></button>
                    </div>
                </div>
            </div>
        </div>
    </Transition>
</template>

<script>
export default {
    data() {
        return {}
    },
    methods: {
        closeModal: function () {
            this.$store.commit('toggleModalAdd')
        },
        submitModal: function () {
            this.$store.state.modalvalidation.massage = "Apakah anda yakin menambahkan data ini?"
            this.$store.state.modalvalidation.url.validation_form = "formAdd"
            this.$store.commit('toggleModalValidationView')
        }
    }
}
</script>

<style scoped>
.fade-rdev-enter-active,
.fade-rdev-leave-active {
    transition: opacity 0.7s ease;
}

.fade-rdev-enter-from,
.fade-rdev-leave-to {
    opacity: 0;
}
</style>
