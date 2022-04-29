<template>
    <div clas="relative">
        <button-gear-menu-component v-bind:items="index"></button-gear-menu-component>
        <div v-if="inputMode === false" @dblclick="inputOn" v-html="$store.state.workspace.items[index].content">

        </div>
        <div v-if="inputMode === true">
            <editor
                api-key="no-api-key"
                :init="{
                     height: 800,
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
                v-model="$store.state.workspace.items[index].content"
            />
            <button class="px-2 mt-5 bg-emerald-500 rounded-md text-white cursor-pointer disabled:bg-gray-300 disabled:text-black" :disabled="$store.state.workspace.items[index].content == ''" @click="inputOff">Save Changes</button>
        </div>
    </div>
</template>

<script>
import Editor from '@tinymce/tinymce-vue'

export default {
    data() {
        return {
            inputMode: true
        }
    },
    props: ['content', 'index'],
    components: {
        'editor': Editor
    },
    methods: {
        inputOn: function () {
            this.inputMode = true
        },
        inputOff: function () {
            this.inputMode = false
        },
        imageUploader: function (cb, value, meta) {
            const input = document.createElement('input');
            input.setAttribute('type', 'file');
            input.setAttribute('accept', 'image/*');
            // console.log(input)

            input.addEventListener('change', (e) => {
                const file = e.target.files[0];

                const reader = new FileReader();
                reader.addEventListener('load', () => {
                    /*
                      Note: Now we need to register the blob in TinyMCEs image blob
                      registry. In the next release this part hopefully won't be
                      necessary, as we are looking to handle it internally.
                    */
                    const id = 'blobid' + (new Date()).getTime();
                    const blobCache =  tinymce.activeEditor.editorUpload.blobCache;
                    const base64 = reader.result.split(',')[1];
                    const blobInfo = blobCache.create(id, file, base64);
                    blobCache.add(blobInfo);

                    /* call the callback and populate the Title field with the file name */
                    cb(blobInfo.blobUri(), { title: file.name });
                });
                reader.readAsDataURL(file);
            });

            input.click();
        }
    }
}
</script>

<style scoped>

</style>
