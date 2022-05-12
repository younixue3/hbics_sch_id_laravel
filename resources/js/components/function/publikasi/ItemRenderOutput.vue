<script>
export default {
    data() {
        return {}
    },
    props: ['type', 'content', 'index', 'urlasset', 'editmode'],
    render: function (createElement) {
        if (this.type === 'title') {
            return createElement('title-workspace-output', {
                props: {
                    content: this.content,
                    index: this.index
                }
            })
        } else if (this.type === 'paragraph') {
            return createElement('paragraph-workspace-output', {
                props: {
                    content: this.content,
                    index: this.index
                }
            })
        } else if (this.type === 'image') {
            return createElement('image-workspace-output', {
                props: {
                    content: this.content,
                    index: this.index,
                    urlasset: this.urlasset,
                }
            })
        } else if (this.type === 'video') {
            return createElement('video-workspace-output', {
                props: {
                    content: this.content,
                    index: this.index,
                    urlasset: this.urlasset,
                }
            })
        } else if (this.type === 'event') {
            return createElement('event-workspace-output', {
                props: {
                    content: this.content,
                    index: this.index,
                    urlasset: this.urlasset,
                    urlregister: window.location.href + '/event'
                }
            })
        }
    }
}
</script>

<style scoped>

</style>
