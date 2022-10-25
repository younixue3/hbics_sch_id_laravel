<template>
    <div>
        <editor
            api-key="no-api-key"
            tag-name="test"
            :init="{
                     height: 300,
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
                     toolbar:
                       'undo redo | formatselect | bold italic backcolor | \
                       alignleft aligncenter alignright alignjustify | \
                       bullist numlist outdent indent | removeformat | help | image'
                   }"
        />
    </div>
</template>

<script>
import Editor from '@tinymce/tinymce-vue'

export default {
    name: "ParagraphComponent",
    data() {
        return {

        }
    },
    components: {
        'editor': Editor
    },
}
</script>

<style scoped>

</style>
