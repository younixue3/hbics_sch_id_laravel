<template>
    <div class="relative">
        <button-gear-menu-component v-bind:items="index"></button-gear-menu-component>
        <img ref="previewimg" class="w-full object-cover rounded-3xl m-5" :class="inputMode === false ? 'h-96' : 'h-32 border border-black'" @dblclick="inputOn">
        <div :class="inputMode ? '' : 'hidden'">
            <input type="file" :name="'inputFile'+indexfile" @change="previewImage" :src="$store.state.workspace.items[index].content">
            <span class="px-2 mt-5 bg-emerald-500 rounded-md text-white" @click="inputOff">Save Changes</span>
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
            filename: null
        }
    },
    props: ['content', 'index', 'editmode', 'urlasset'],
    mounted() {
        if (this.$props.editmode === 'true') {
            this.inputMode = false
        }
        this.$store.state.file++
        this.indexfile = this.$store.state.file
        if (this.$props.editmode === 'true') {
            if (this.$store.state.workspace.items[this.$props.index].type === 'image' || this.$store.state.workspace.items[this.$props.index].type === 'video') {
                var name = this.$store.state.workspace.items[this.$props.index].content
                var filename = '/' + name
                this.filename = this.urlasset + filename
                const preview = this.$refs.previewimg
                preview.src = this.filename
            }
        }
    },
    methods: {
        inputOn: function () {
            this.inputMode = true
            this.$props.editmode = 'false'
        },
        inputOff: function () {
            this.inputMode = false

        },
        previewImage: function () {
            this.$store.state.workspace.items[this.$props.index].content = event.target.files[0].name
            const reader = new FileReader();
            reader.readAsDataURL(event.target.files[0]);
            reader.onload = () => {
                const preview = this.$refs.previewimg
                preview.src = reader.result;
            };
        }
    }
}
</script>

<style scoped>

</style>
