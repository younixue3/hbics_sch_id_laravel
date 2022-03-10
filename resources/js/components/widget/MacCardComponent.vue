<template>
    <div v-if="closed"
         class="transition-all duration-500 ease-in-out transform scale-100 bg-gray-200 rounded-t-xl rounded-b-md shadow-md overflow-hidden"
         :class="[layoutsize ? 'h-11' : 'h-full', scale ? 'scale-50' : 'scale-100']">
        <button @click="closeit()" class="ml-1.5 w-3 h-3 bg-red-500 rounded-full"></button>
        <button @click="maximise()" class="w-3 h-3 bg-amber-500 rounded-full"></button>
        <button @click="minimise()" class="w-3 h-3 bg-green-500 rounded-full"></button>
        {{ cardsname }}
        <div class="content h-full bg-gray-100 py-2 transition-all ease-in-out duration-300" :class="layoutsize ? 'pt-8' : 'pt-5'">
            <slot></slot>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            layoutsize: false,
            closed: true,
            scale: false
        }
    },
    props: ['cardsname'],
    methods: {
        minimise: function () {
            this.layoutsize = false
        },
        maximise: function () {
            this.layoutsize = true
        },
        closeit: function () {
            this.scale = true
            // setTimeout(this.closed = false, 400)
        }
    },
}
</script>

<style scoped>

</style>
