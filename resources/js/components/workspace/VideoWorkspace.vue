<template>
    <div class="relative">
        <button-gear-menu-component v-bind:items="index"></button-gear-menu-component>
        <video ref="previewvideo" class="object-cover rounded-3xl m-5" :class="inputMode === false ? 'w-full h-96' : 'w-96'" @dblclick="inputOn" controls allow></video>
        <div :class="inputMode ? '' : 'hidden'">
            <input type="file" :name="'inputFile'+indexfile" @change="previewVideo" :src="$store.state.workspace.items[index].content">
            <span class="px-2 mt-5 bg-emerald-500 rounded-md text-white" @click="inputOff">Save Changes</span>
        </div>
        <div class=""></div>
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
    created() {
        this.indexfile = this.$store.state.file
        this.$store.state.file++
    },
    props: ['content', 'index'],
    methods: {
        inputOn: function () {
            this.inputMode = true
        },
        inputOff: function () {
            this.inputMode = false

        },
        previewVideo: function () {
            this.$store.state.workspace.items[this.$props.index].content = event.target.files[0].name
            const reader = new FileReader();
            reader.readAsDataURL(event.target.files[0]);
            reader.onload = () => {
                const preview = this.$refs.previewvideo
                preview.src = reader.result;
            };
        }
    }
}
</script>

<style scoped>

</style>
