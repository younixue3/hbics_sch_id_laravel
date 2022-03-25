<template>
    <div>
        <video ref="previewvideo" class="w-full object-contain" :class="inputMode === false ? 'h-96' : ''" @dblclick="inputOn" controls allow></video>
        <div v-if="inputMode">
            <input type="file" :name="inputFile + index" @change="previewVideo">
            <button class="px-2 mt-5 bg-emerald-500 rounded-md text-white" @click="inputOff">Save Changes</button>
        </div>
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
