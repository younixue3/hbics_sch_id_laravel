<template>
    <div>
        <h1 class="text-5xl" v-if="inputMode === false" @dblclick="inputOn">{{$store.state.workspace.items[index].content}}</h1>
        <form action="#" @submit="inputOff" v-if="inputMode === true">
            <input class="text-5xl" v-model="$store.state.workspace.items[index].content">
        </form>
        <input type="hidden" :name="'title'+index" v-model="$store.state.workspace.items[index].content">
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
