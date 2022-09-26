<template>
    <div class="relative p-3">
        <div class="flex w-full justify-end mb-5">
            <div class="flex">
                <div @click="showmenu" class="bg-rose-500 flex rounded-lg w-8 h-8 text-white cursor-pointer">
                    <div class="m-auto"><i class="fa-solid fa-gear"></i></div>
                </div>
                <div v-if="show" v-click-outside="focusout"
                     class="absolute right-6 translate-y-1/2 bg-white shadow-md rounded-md px-5 z-50">
                    <div class="grid grid-cols-1">
                        <div class="cursor-pointer" @click="deleteitem">
                            Delete
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-3 gap-5">
            <div class="col-span-1 grid grid-cols-1 gap-3">
                <div class="flex relative h-60">
                    <img ref="previewimg" class="object-cover h-full rounded-xl"
                         v-if="this.$store.state.workspace.items[index].content.foto != null">
                    <div class="absolute p-1 w-full h-full">
                        <div class="justify-center border-2 border-gray-300 border-dashed rounded-xl h-full"
                             :class="this.$store.state.workspace.items[index].content.foto != null ? 'opacity-0 hover:opacity-100 text-white ' : ''">
                            <input type="file" :name="'inputFile'+indexfile" id="fileupload" @change="previewImage"
                                   :class="this.$store.state.workspace.items[index].content.foto != null ? 'file:bg-blue-50 file:text-blue-700 text-white' : 'file:bg-blue-700 file:text-blue-50'"
                                   class="block m-auto text-sm p-5 text-center h-full text-slate-500 cursor-pointer
                                  file:py-2 file:px-4
                                  file:rounded-full file:border-0
                                  file:text-sm file:font-semibold
                        "/>
                            <input type="hidden" :name="'nameFile'+indexfile"
                                   :value="$store.state.workspace.items[index].content.foto">
                        </div>
                    </div>
                </div>
                <div class="">
                    <div class="">
                        <input
                            class="flex-1 block w-full rounded-xl focus:outline-none px-3 py-2 border border-gray-300"
                            type="date" name="date" v-model="$store.state.workspace.items[index].content.date">
                    </div>
                    <div class="flex justify-between w-full mt-3"><input
                        class="flex-1 rounded-xl w-full focus:outline-none px-3 py-2 border border-gray-300" type="time"
                        name="date" v-model="$store.state.workspace.items[index].content.time_start"> <span
                        class="m-auto mx-2">s/d</span> <input
                        class="flex-1 w-full rounded-xl focus:outline-none px-3 py-2 border border-gray-300" type="time"
                        name="date" v-model="$store.state.workspace.items[index].content.time_end"></div>
                    <div class="mt-3 flex">
                        <div class="rounded-l-xl border border-r-0 border-gray-300 flex px-2"><i class="m-auto text-xl fa-solid fa-link"></i></div>
                        <input
                            class="flex-1 w-full rounded-r-xl focus:outline-none px-3 py-2 border border-gray-300" placeholder="Link Meeting" type="url"
                            name="url" v-model="$store.state.workspace.items[index].content.url">
                    </div>
                </div>
            </div>
            <div class="col-span-2">
                <h1 class="text-3xl" v-if="inputMode === false" @dblclick="inputOn">
                    {{ $store.state.workspace.items[index].content.title }}</h1>
                <form class="h-20" action="#" @submit="inputOff" v-if="inputMode === true">
                    <input type="text" class="text-3xl w-full"
                           v-model="$store.state.workspace.items[index].content.title">
                    <div class="p-1 bg-yellow-200 italic text-sm">
                        Click enter to Save
                    </div>
                </form>
                <input type="hidden" name="title0" v-model="$store.state.workspace.items[index].content.title">
                <div class="h-96">
                    <editor
                        api-key="no-api-key"
                        :init="{
                     height: 400,
                     menubar: false,
                     plugins: [
                       'advlist autolink lists link image charmap print preview anchor',
                       'searchreplace visualblocks code fullscreen',
                       'insertdatetime table paste code help wordcount',
                       'lists link paste help wordcount'
                     ],
                     automatic_uploads: true,
                     toolbar:
                       'undo redo | formatselect | bold italic backcolor | \
                       alignleft aligncenter alignright alignjustify | \
                       bullist numlist outdent indent | removeformat | help | image'
                   }"
                        v-model="$store.state.workspace.items[index].content.description"
                    />
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import Editor from '@tinymce/tinymce-vue'

export default {
    name: "EventWorkspace",
    data() {
        return {
            inputMode: true,
            indexfile: null,
            show: false
        }
    },
    components: {
        'editor': Editor,
    },
    props: ['content', 'index', 'editmode', 'urlasset'],
    mounted() {
        this.$store.state.file++
        this.indexfile = this.$store.state.file
        if (this.$props.editmode === 'true') {
            var name = this.$store.state.workspace.items[this.$props.index].content.foto
            var filename = '/' + name
            this.filename = this.urlasset + filename
            const preview = this.$refs.previewimg
            preview.src = this.filename
        }
    },
    created() {
        // this.$store.state.workspace.items[this.$props.index].content = {
        //     foto: null,
        //     date: null,
        //     time_start: null,
        //     time_end: null,
        //     title: null,
        //     description: null
        // }
    },
    methods: {
        previewImage: function () {
            this.$store.state.workspace.items[this.$props.index].content.foto = Math.random().toString(16).substr(2, 8) + '_' + event.target.files[0].name
            const reader = new FileReader();
            reader.readAsDataURL(event.target.files[0]);
            reader.onload = () => {
                const preview = this.$refs.previewimg
                preview.src = reader.result;
            };
        },
        inputOff: function () {
            this.inputMode = false
        },
        inputOn: function () {
            this.inputMode = true
        },
        deleteitem: function () {
            this.$store.commit('deleteData', this.$props.index)
        },
        showmenu: function () {
            this.show = true
        },
        focusout: function () {
            this.show = false
        },
    }
}
</script>

<style scoped>

</style>
