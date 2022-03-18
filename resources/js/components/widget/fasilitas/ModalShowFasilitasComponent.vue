<template>
    <Transition name="fade-rdev">
        <div v-if="$store.state.modal.modalshow.status" class="fixed w-screen h-screen bg-black bg-opacity-25 backdrop-blur-sm flex z-50 transition-all ease-in-out duration-300 text-center" :class="$store.state.modal.modalshow.status ? 'opacity-100' : 'opacity-0'">
            <div class="w-auto bg-white m-auto rounded-3xl relative">
                <button @click="closeModal" class="transition-all ease-in-out duration-300 bg-gray-700 bg-opacity-50 hover:bg-opacity-75 w-10 h-10 text-white text-xl rounded-xl -mt-5 -mr-5 absolute right-0">
                    <i class="fa-solid fa-xmark"></i>
                </button>
                <div class="p-5 w-full">
                    <img class="h-96 rounded-2xl" v-if="$store.state.modal.modalshow.type === 'img'" :src="$store.state.modal.modalshow.item">
                    <video class="h-96 rounded-2xl" v-if="$store.state.modal.modalshow.type === 'video'">
                        <source :src="$store.state.modal.modalshow.item">
                    </video>
                </div>
            </div>
        </div>
    </Transition>
</template>

<script>
export default {
    data() {
        return {

        }
    },
    methods: {
        closeModal: function () {
            this.$store.state.modal.modalshow.item = null
            this.$store.state.modal.modalshow.type = null
            this.$store.commit('toggleModalShow')
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
