<template>
    <Transition name="fade-rdev">
        <div v-if="$store.state.modalvalidation.item" class="fixed w-screen h-screen bg-black bg-opacity-25 backdrop-blur-sm flex z-50 transition-all ease-in-out duration-500" :class="$store.state.modalvalidation.item ? 'opacity-100' : 'opacity-0'">
            <div class="w-auto md:w-96 bg-white m-auto rounded-3xl">
                <div class="flex px-5 lg:px-10 pt-5 pb-2">
                    <i class="fas fa-exclamation-circle text-5xl md:text-6xl text-yellow-500 mt-3"></i>
                    <div class="ml-8 text-left">
                        <h1 class="font-bold text-xl my-4">Are you sure?</h1>
                        <p class="w-auto">Are you sure you want to deactivate your account?</p>
                    </div>
                </div>
                <div class="bg-gray-100 py-3 rounded-b-3xl text-right px-5">
                    <button class="bg-blue-500 focus:bg-blue-600 transition duration-150 text-white text-center rounded-md shadow-md px-2"><span class="align-text-top">Submit</span></button>
                    <button class="bg-transparent focus:bg-red-200 transition duration-150 text-red-600 rounded-md text-center px-2" @click="closeModal"><span class="align-text-top">Cancel</span></button>
                </div>
            </div>
        </div>
    </Transition>
</template>

<script>
import CardFasilitasComponent from "../widget/CardFasilitasComponent";
export default {
    data() {
        return {
        }
    },
    methods: {
        closeModal: function () {
            this.$store.state.modalvalidation.item = null
            this.$store.commit('toggleModelView')
        }
    }
}
</script>

<style scoped>
.fade-rdev-enter-active,
.fade-rdev-leave-active {
    transition: opacity 0.5s ease;
}

.fade-rdev-enter-from,
.fade-rdev-leave-to {
    opacity: 0;
}
</style>
