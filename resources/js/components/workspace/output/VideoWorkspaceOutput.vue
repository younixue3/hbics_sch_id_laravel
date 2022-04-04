<template>
    <div class="relative">
        <video ref="previewvideo" class="object-cover rounded-3xl w-full h-[35rem] my-20" controls>
            <source :src="this.urlasset + '/' + this.content">
        </video>
    </div>
</template>

<script>
import vClickOutside from "v-click-outside";

export default {
    data() {
        return {
            inputMode: true,
            imageAsset: null,
            indexfile: null,
            filename: null,
            show: false,
            // states : this.$store.state.workspace
        }
    },
    mounted() {
    },
    props: ['content', 'index', 'urlasset'],
    methods: {
    }
}
</script>

<style scoped>

</style>
