<template>
    <div>
        <video ref="previewvideo" class="w-full object-contain" :class="inputMode === false ? 'h-96' : ''" @dblclick="inputOn" controls allow></video>
        <div :class="inputMode ? '' : 'hidden'">
            <input type="file" :name="'inputFile' + index" @change="previewVideo" :src="$store.state.workspace.items[index].content">
            <div class="px-2 mt-5 bg-emerald-500 rounded-md text-white" @click="inputOff">Save Changes</div>
        </div>
        <div class=""></div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            inputMode: true,
            imageAsset: null
        }
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
