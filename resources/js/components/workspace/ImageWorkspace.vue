<template>
    <div>
        <img ref="previewimg" class="w-full object-cover" :class="inputMode === false ? 'h-96' : 'h-20'" @dblclick="inputOn">
        <div :class="inputMode ? '' : 'hidden'">
            <input type="file" :name="'inputfile'+index" @change="previewImage" :src="$store.state.workspace.items[index].content">
            <span class="px-2 mt-5 bg-emerald-500 rounded-md text-white" @click="inputOff">Save Changes</span>
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
