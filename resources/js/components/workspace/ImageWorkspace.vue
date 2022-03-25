<template>
    <div>
        <img ref="previewimg" class="w-full object-cover" :class="inputMode === false ? 'h-96' : 'h-20'" @dblclick="inputOn">
        <div v-if="inputMode">
            <input type="file" :name="inputFile + index" @change="previewImage">
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
        previewImage: function () {
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
