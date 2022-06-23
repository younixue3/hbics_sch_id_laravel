<template>
    <div>
        <button-gear-menu-component v-if="inputMode" v-bind:items="index"></button-gear-menu-component>
        <div class="border-2 h-14 flex rounded-t-2xl justify-between py-3 px-5"
             :class="status ? 'bg-blue-300 hover:bg-blue-200' : 'bg-gray-100'">
            <div v-if="!inputMode">{{ $store.state.workspace.items[index].content.title }}</div>
            <input class="w-full focus:outline-none mr-5" :class="status ? ' bg-blue-50 hover:bg-blue-100' : 'bg-gray-200'" v-if="inputMode" v-model="$store.state.workspace.items[index].content.title">
            <div class="w-5 h-5 cursor-pointer" @click="clickactiv">
                <i class="fas fa-chevron-up my-auto transition-all ease-in-out duration-300"
                   :class="status ? 'rotate-180' : 'rotate-0'"></i>
            </div>
        </div>
        <div class="bg-white text-sm transition-all ease-in-out duration-300 rounded-b-2xl overflow-hidden text-left"
             :class="status ? 'h-60 border-b-2 border-x-2' : 'h-0'">
            <div class="p-5" v-if="!inputMode">
                {{$store.state.workspace.items[index].content.field}}
            </div>
            <div class="p-5" v-if="inputMode">
                <textarea class="bg-gray-100 w-full focus:outline-none resize-none" :class="status ? 'h-48' : ''" v-model="$store.state.workspace.items[index].content.field"></textarea>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "AccordionComponent",
    data() {
        return {
            status: false,
            inputMode: true,
        }
    },
    props: ['title', 'content', 'index', 'editmode'],
    methods: {
        clickactiv: function () {
            this.status = this.status !== true;
        }
    },
    created() {
        if (this.$props.editmode === 'true') {
            this.inputMode = false
        }
    }
}
</script>

<style scoped>

</style>
