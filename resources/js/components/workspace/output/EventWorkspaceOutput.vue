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
                </div>
            </div>
            <div class="col-span-2">
                <h1 class="text-3xl">{{ $store.state.workspace.items[index].content.title }}</h1>
                <div class="h-96" v-html="$store.state.workspace.items[index].content.description">
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "EventWorkspaceOutput",
    data() {
        return {}
    },
    props: ['content', 'index', 'editmode', 'urlasset'],
    mounted() {
    },
    methods: {}
}
</script>

<style scoped>

</style>
