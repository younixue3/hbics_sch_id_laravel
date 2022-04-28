<template>
    <div class="relative">
        <div class="flex w-full justify-end mb-5">
            <div class="flex">
                <div  @click="showmenu" class="bg-rose-500 flex rounded-lg w-8 h-8 text-white cursor-pointer">
                    <div class="m-auto"><i class="fa-solid fa-gear"></i></div>
                </div>
                <div v-if="show" v-click-outside="focusout" class="absolute right-6 translate-y-1/2 bg-white shadow-md rounded-md px-5 z-50">
                    <div class="grid grid-cols-1">
                        <div class="cursor-pointer" @click="deleteitem">
                            Delete
                        </div>
                        <div class="cursor-pointer" @click="edititem">
                            Edit
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <img ref="previewimg" class="w-full object-cover rounded-3xl m-5" :class="inputMode === false ? 'h-96' : 'h-32 border border-black'" @dblclick="inputOn">
        <div :class="inputMode ? '' : 'hidden'">
            <input type="file" :name="'inputFile'+indexfile" @change="previewImage" :src="$store.state.workspace.items[index].content">
            "<input type="hidden" :name="'nameFile'+indexfile" @change="previewImage" :value="Math.random().toString(16).substr(2, 8) + '_' + $store.state.workspace.items[index].content">"
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
            filename: null,
            show: false
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
        },
        showmenu: function () {
            this.show = true
        },
        focusout: function () {
            this.show = false
        },
        deleteitem: function () {
            this.$store.commit('deleteData', this.$props.index)
        },
        edititem: function () {
            this.inputMode = true
        }
    }
}
</script>

<style scoped>

</style>
