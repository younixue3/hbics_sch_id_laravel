<template>
    <Transition name="fade-rdev">
        <div v-if="$store.state.modal.modaledit.status" class="fixed w-screen h-screen bg-black bg-opacity-25 backdrop-blur-sm flex z-50 transition-all ease-in-out duration-300 text-center" :class="$store.state.modal.modaledit.status ? 'opacity-100' : 'opacity-0'">
            <div class="w-[35rem] bg-white m-auto rounded-3xl relative">
                <button @click="closeModal" class="transition-all ease-in-out duration-300 bg-gray-700 bg-opacity-50 hover:bg-opacity-75 w-10 h-10 text-white text-xl rounded-xl -mt-5 -mr-5 absolute right-0">
                    <!-- Heroicon name: outline/x -->
                    <i class="fa-solid fa-xmark"></i>
                </button>
                <div class="p-5 w-full">
                    <label class="block text-lg font-medium text-gray-700">
                        Profile Picture
                    </label>
                    <form id="formEditFasilitas" action="" name="formEditFasilitas" class="mt-1 flex justify-center border-2 border-gray-300 border-dashed rounded-xl mb-2" method="POST">
                        <input type="hidden" name="_token" :value="$store.state.csrf">
                        <input type="file" name="fileupload" id="fileupload" class="block w-full h-full text-sm p-5 text-center text-slate-500 cursor-pointer
                                  file:mr-4 file:py-2 file:px-4
                                  file:rounded-full file:border-0
                                  file:text-sm file:font-semibold
                                  file:bg-violet-50 file:text-violet-700
                                  hover:file:bg-violet-100
                                "/>
                    </form>
                    <div class="mt-5 grid grid-cols-2 gap-5">
                        <button @click="submitModal" class="bg-indigo-500 text-white text-center rounded-2xl shadow-md px-5 py-1 w-full"><span class="align-text-top">Submit</span></button>
                        <button @click="closeModal" class="border-2 border-red-500 text-red-500 text-center rounded-2xl shadow-md px-5 py-1 w-full"><span class="align-text-top">Cancel</span></button>
                    </div>
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
            // this.$store.state.modal.modaledit = null
            // this.$store.state.modal.modaledit.type = null
            this.$store.commit('toggleModalEdit')
        },
        submitModal: function () {
            console.log('submit')
            this.$store.state.modalvalidation.item = this.$store.state.modal.modaledit.item
            this.$store.state.modalvalidation.massage = "Apakah anda yakin untuk menghapus data ini?"
            this.$store.state.modalvalidation.url.edit_req = "formEditFasilitas"
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
