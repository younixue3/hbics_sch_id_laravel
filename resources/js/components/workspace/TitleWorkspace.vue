<template>
    <div class="relative py-4">
        <button-gear-menu-component v-bind:items="index"></button-gear-menu-component>
        <h1 class="text-5xl" v-if="inputMode === false" @dblclick="inputOn">
            {{ $store.state.workspace.items[index].content }}</h1>
        <form action="#" @submit="inputOff" v-if="inputMode === true">
            <input class="text-5xl w-full" v-model="$store.state.workspace.items[index].content">
            <div class="p-1 bg-yellow-200 italic text-sm">
                Click enter to Save
            </div>
        </form>
        <input type="hidden" :name="'title0'" v-model="$store.state.workspace.items[index].content">
    </div>
</template>

<script>
export default {
    data() {
        return {
            inputMode: true
        }
    },
    props: ['content', 'index'],
    methods: {
        inputOn: function () {
            this.inputMode = true
        },
        inputOff: function () {
            this.inputMode = false
        }
    }
}
</script>

<style scoped>

</style>
