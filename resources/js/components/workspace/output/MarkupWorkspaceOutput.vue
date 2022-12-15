<template>
    <div clas="relative">
        <div class="border-l-4 border-blue-600 bg-blue-200 p-5 italic" @dblclick="inputOn" v-html="$store.state.workspace.items[index].content">

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
