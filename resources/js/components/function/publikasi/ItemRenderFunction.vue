<script>
export default {
    data() {
        return {

        }
    },
    props: ['type', 'content', 'index', 'urlasset'],
    render: function (createElement) {
        if (this.type === 'title') {
            return createElement('title-workspace', {
                props: {
                    content: this.content,
                    index: this.index
                }
            })
        } else if(this.type === 'paragraph') {
            return createElement('paragraph-workspace', {
                props: {
                    content: this.content,
                    index: this.index
                }
            })
        } else if(this.type === 'image') {
            return createElement('image-workspace', {
                props: {
                    content: this.content,
                    index: this.index,
                    urlasset: this.urlasset,
                    editmode: this.editmode
                }
            })
        } else if(this.type === 'video') {
            return createElement('video-workspace', {
                props: {
                    content: this.content,
                    index: this.index,
                    urlasset: this.urlasset,
                    editmode: this.editmode
                }
            })
        }
    }
}
</script>

<style scoped>

</style>
