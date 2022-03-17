<template>
    <div v-if="active" class="absolute w-screen h-screen bg-black bg-opacity-25 backdrop-blur-sm flex z-50">
        <div>
            <h1 class="mb-4 text-3xl">Modals v2</h1>
            <div class="w-auto md:w-96 bg-white mx-auto rounded-3xl">
                <div class="flex px-5 lg:px-10 pt-5 pb-2">
                    <i class="fas fa-exclamation-circle text-5xl md:text-6xl text-yellow-500 mt-3"></i>
                    <div class="ml-8 text-left">
<!--                        <h1 class="font-bold text-xl my-4">Are you sure?</h1>-->
                        <h1 class="font-bold text-xl my-4" @openModal="testing">{{}}</h1>
                        <p class="w-auto">Are you sure you want to deactivate your account?</p>
                    </div>
                </div>
                <div class="bg-gray-100 py-3 rounded-b-3xl text-right px-5">
                    <button class="bg-blue-500 focus:bg-blue-600 transition duration-150 text-white text-center rounded-md shadow-md px-2"><span class="align-text-top">Submit</span></button>
                    <button class="bg-transparent focus:bg-red-200 transition duration-150 text-red-600 rounded-md text-center px-2"><span class="align-text-top">Cancel</span></button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import CardFasilitasComponent from "../widget/CardFasilitasComponent";
export default {
    data() {
        return {
            dataitem: null,
            active: this.$store
        }
    },
    created() {
        this.dataitem = this.$store.state.name
    },
}
</script>

<style scoped>

</style>
