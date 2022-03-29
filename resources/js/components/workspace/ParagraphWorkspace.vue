<template>
    <div clas="relative">
        <button-gear-menu-component v-bind:items="index"></button-gear-menu-component>
        <div v-if="inputMode === false" @dblclick="inputOn" v-html="$store.state.workspace.items[index].content">

        </div>
        <div v-if="inputMode === true">
            <editor
                api-key="no-api-key"
                :init="{
                     height: 300,
                     menubar: false,
                     plugins: [
                       'advlist autolink lists link image charmap print preview anchor',
                       'searchreplace visualblocks code fullscreen',
                       'insertdatetime media table paste code help wordcount'
                     ],
                     toolbar:
                       'undo redo | formatselect | bold italic backcolor | \
                       alignleft aligncenter alignright alignjustify | \
                       bullist numlist outdent indent | removeformat | help'
                   }"
                v-model="$store.state.workspace.items[index].content"
            />
            <button class="px-2 mt-5 bg-emerald-500 rounded-md text-white cursor-pointer" @click="inputOff">Save Changes</button>
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
        }
    }
}
</script>

<style scoped>

</style>
