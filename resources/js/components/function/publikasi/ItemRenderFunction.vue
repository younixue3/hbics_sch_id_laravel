<script>
export default {
    data() {
        return {}
    },
    props: ['type', 'content', 'index', 'urlasset', 'editmode'],
    render: function (createElement) {
        if (this.type === 'title') {
            return createElement('title-workspace', {
                props: {
                    content: this.content,
                    index: this.index
                }
            })
        } else if (this.type === 'paragraph') {
            return createElement('paragraph-workspace', {
                props: {
                    content: this.content,
                    index: this.index
                }
            })
        } else if (this.type === 'image') {
            return createElement('image-workspace', {
                props: {
                    content: this.content,
                    index: this.index,
                    urlasset: this.urlasset,
                    editmode: this.editmode
                }
            })
        } else if (this.type === 'video') {
            return createElement('video-workspace', {
                props: {
                    content: this.content,
                    index: this.index,
                    urlasset: this.urlasset,
                    editmode: this.editmode
                }
            })
        } else if (this.type === 'event') {
            return createElement('event-workspace', {
                props: {
                    content: this.content,
                    index: this.index,
                    urlasset: this.urlasset,
                    editmode: this.editmode
                }
            })
        } else if (this.type === 'accordion') {
            return createElement('accordion-component', {
                props: {
                    content: this.content,
                    index: this.index,
                    title: this.title
                }
            })
        }
    }
}
</script>

<style scoped>

</style>
