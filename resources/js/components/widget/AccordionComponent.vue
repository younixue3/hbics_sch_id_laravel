<template>
    <div>
        <button-gear-menu-component v-if="inputMode" v-bind:items="index"></button-gear-menu-component>
        <div class="border-2 h-14 flex rounded-t-2xl justify-between py-3 px-5"
             :class="status ? 'bg-blue-300 hover:bg-blue-200' : 'bg-gray-100'">
            <div v-if="!inputMode">{{ $store.state.workspace.items[index].content.title }}</div>
            <input class="w-full focus:outline-none mr-5" :class="status ? ' bg-blue-50 hover:bg-blue-100' : 'bg-gray-200'" v-if="inputMode" v-model="$store.state.workspace.items[index].content.title">
            <div class="w-5 h-5 cursor-pointer" @click="clickactiv">
                <i class="fas fa-chevron-up my-auto transition-all ease-in-out duration-300"
                   :class="status ? 'rotate-180' : 'rotate-0'"></i>
            </div>
        </div>
        <div class="bg-white text-sm transition-all ease-in-out duration-300 rounded-b-2xl overflow-hidden text-left"
             :class="status ? 'border-b-2 border-x-2' : 'h-0'">
            <div class="p-5" v-if="!inputMode" v-html="$store.state.workspace.items[index].content.field">
            </div>
            <div class="p-5" v-if="inputMode">
                <editor
                    api-key="no-api-key"
                    :init="{
                     height: 400,
                     menubar: true,
                     plugins: [
                       'advlist autolink lists link image charmap print preview anchor',
                       'searchreplace visualblocks code fullscreen',
                       'insertdatetime table paste code help wordcount',
                       'lists link image paste help wordcount'
                     ],
                     images_file_types: 'jpg,svg,webp',
                     file_picker_types: 'image',
                     automatic_uploads: true,
                     file_picker_callback: (cb, value, meta) => {imageUploader(cb, value, meta)},
                     toolbar:
                       'undo redo | formatselect | bold italic backcolor | \
                       alignleft aligncenter alignright alignjustify | \
                       bullist numlist outdent indent | removeformat | help | image'
                   }"
                    v-model="$store.state.workspace.items[index].content.field"
                />
            </div>
        </div>
    </div>
</template>

<script>
import Editor from '@tinymce/tinymce-vue'

export default {
    name: "AccordionComponent",
    components: {
      'editor': Editor
    },
    data() {
        return {
            status: false,
            inputMode: true,
        }
    },
    props: ['title', 'content', 'index', 'editmode'],
    methods: {
        clickactiv: function () {
            this.status = this.status !== true;
        }
    },
    created() {
        if (this.$props.editmode === 'true') {
            this.inputMode = false
        }
    }
}
</script>

<style scoped>

</style>
