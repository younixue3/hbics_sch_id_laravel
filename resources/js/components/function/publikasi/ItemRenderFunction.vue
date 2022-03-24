<script>
export default {
    data() {
        return {

        }
    },
    props: ['type', 'content'],
    render: function (createElement) {
        if (this.type === 'title') {
            return createElement('title-workspace', {
                props: {
                    content: this.content
                }
            })
        } else if(this.type === 'paragraph') {
            return createElement('paragraph-workspace', {
                props: {
                    content: this.content
                }
            })
        }
    }
}
</script>

<style scoped>

</style>
