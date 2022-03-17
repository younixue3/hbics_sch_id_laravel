<template>
    <Transition name="fade-rdev">
        <div v-if="$store.state.modalfasilitas.status" class="fixed w-screen h-screen bg-black bg-opacity-25 backdrop-blur-sm flex z-50 transition-all ease-in-out duration-300 text-center" :class="$store.state.modalfasilitas.status ? 'opacity-100' : 'opacity-0'">
            <div class="w-auto bg-white m-auto rounded-3xl relative">
                <button @click="closeModal" class="transition-all ease-in-out duration-300 bg-gray-700 bg-opacity-50 hover:bg-opacity-75 w-10 h-10 text-white text-xl rounded-xl -mt-5 -mr-5 absolute right-0">
                    <!-- Heroicon name: outline/x -->
                    <i class="fa-solid fa-xmark"></i>
                </button>
                <div class="p-5 w-full">
                    <img class="h-96 rounded-2xl" v-if="$store.state.modalfasilitas.type === 'img'" :src="$store.state.modalfasilitas.item">
                    <video class="h-96 rounded-2xl" v-if="$store.state.modalfasilitas.type === 'video'">
                        <source :src="$store.state.modalfasilitas.item">
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
            this.$store.state.modalfasilitas.item = null
            this.$store.state.modalfasilitas.type = null
            this.$store.commit('toggleModelFasilitasView')
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
