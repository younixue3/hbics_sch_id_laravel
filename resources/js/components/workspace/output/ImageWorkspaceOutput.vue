<template>
    <div class="relative">
        <img ref="previewimg" class="w-full object-cover rounded-3xl h-96" v-if="this.$props.content.file"
             :src="this.urlasset + '/' + this.$store.state.workspace.items[index].content.file" :alt="this.$store.state.workspace.items[this.$props.index].content.alt">
        <div class="w-full flex h-96 bg-gray-200 rounded-3xl border border-black'">
            <i class="fa-regular fa-image m-auto text-center text-white text-6xl"></i>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            inputMode: true,
            imageAsset: null,
            indexfile: null,
            filename: null,
            show: false
        }
    },
    props: ['content', 'index', 'editmode', 'urlasset'],
    mounted() {
    },
    methods: {}
}
</script>

<style scoped>

</style>
