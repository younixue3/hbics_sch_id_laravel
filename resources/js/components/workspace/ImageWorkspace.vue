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
            indexfile: null
        }
    },
    props: ['content', 'index', 'editmode', 'urlasset'],
    mounted() {
        this.indexfile = this.$store.state.file
        this.$store.state.file++
        console.log('editmode true');
        if (this.$props.editmode === 'true') {
            for (var item in this.$store.state.workspace.items) {
                if (this.$store.state.workspace.items[item].type === 'image' || 'video') {
                    this.$store.state.workspace.items[item].content = this.urlasset + this.$store.state.workspace.items[item].content
                }
            }
        }
    },
    methods: {
        inputOn: function () {
            this.inputMode = true
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
