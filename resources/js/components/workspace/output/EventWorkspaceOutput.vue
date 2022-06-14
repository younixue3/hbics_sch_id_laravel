<template>
    <div class="p-3">
        <div class="bg-white p-5 rounded-xl shadow-xl grid grid-cols-3 gap-5">
            <div class="col-span-1 grid grid-cols-1 gap-3">
                <div class="flex relative h-60">
                    <img ref="previewimg" class="object-cover h-full rounded-xl"
                         :src="this.urlasset + '/' + this.$store.state.workspace.items[this.$props.index].content.foto">
                </div>
                <div class="">
                    <div class="">
                        <input disabled
                               class="flex-1 block w-full rounded-xl focus:outline-none px-3 py-2 border border-gray-300"
                               type="date" name="date" v-model="$store.state.workspace.items[index].content.date">
                    </div>
                    <div class="flex justify-between w-full mt-3"><input disabled
                                                                         class="flex-1 rounded-xl w-full focus:outline-none px-3 py-2 border border-gray-300"
                                                                         type="time" name="date"
                                                                         v-model="$store.state.workspace.items[index].content.time_start">
                        <span class="m-auto mx-3">s/d</span> <input disabled
                                                                    class="flex-1 w-full rounded-xl focus:outline-none px-3 py-2 border border-gray-300"
                                                                    type="time" name="date"
                                                                    v-model="$store.state.workspace.items[index].content.time_end">
                    </div>
<!--                    <form :action="urlregister">-->
                        <a :href="$store.state.workspace.items[index].content.url" class="w-full px-3 my-3 py-1 bg-amber-500 hover:bg-amber-400 rounded-xl text-white font-bold">Open Meeting</a>
<!--                        <button @click="openModalAdd" type="submit" class="w-full px-3 my-3 py-1 bg-amber-500 hover:bg-amber-400 rounded-xl text-white font-bold">Register</button>-->
<!--                    </form>-->
                </div>
            </div>
            <div class="col-span-2 grid grid-rows-3">
                <div class="row-span-2">
                    <h1 class="text-3xl">{{ $store.state.workspace.items[index].content.title }}</h1>
                    <div v-html="$store.state.workspace.items[index].content.description">
                    </div>
                </div>

            </div>
        </div>
    </div>
</template>

<script>
import axios from "axios";
export default {
    name: "EventWorkspaceOutput",
    data() {
        return {}
    },
    props: ['content', 'index', 'editmode', 'urlasset', 'urlregister'],
    mounted() {
    },
    methods: {
        openModalAdd: function () {
            this.$store.state.modalvalidation.url.url_req = this.$props.urlregister
            this.$store.commit('toggleModalAdd')
        },
    }
}
</script>

<style scoped>

</style>
