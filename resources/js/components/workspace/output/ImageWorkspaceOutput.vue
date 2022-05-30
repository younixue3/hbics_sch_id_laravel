<template>
    <div class="relative">
        <img ref="previewimg" class="w-full object-cover rounded-3xl h-96"
             :src="this.urlasset + '/' + this.$store.state.workspace.items[this.$props.index].content.file" :alt="this.$store.state.workspace.items[this.$props.index].content.alt">
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
