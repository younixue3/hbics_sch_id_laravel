<script>
export default {
    data() {
        return {

        }
    },
    props: ['type', 'content', 'index'],
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
        }
    }
}
</script>

<style scoped>

</style>
