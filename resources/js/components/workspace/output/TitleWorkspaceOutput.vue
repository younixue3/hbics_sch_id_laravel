<template>
    <div class="relative">
        <h1 class="text-5xl" @dblclick="inputOn">{{$store.state.workspace.items[index].content}}</h1>
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
