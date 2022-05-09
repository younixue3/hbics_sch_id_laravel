<template>
    <div class="grid grid-cols-1 gap-x-5 gap-y-4 my-5">
        <item-render-output v-for="(item, index) in this.$store.state.workspace.items" v-bind:type="item.type"
                            v-bind:content="item.content" v-bind:index="index" v-bind:urlasset="urlasset"
                            v-bind:editmode="editmode">
        </item-render-output>
    </div>
</template>

<script>
export default {
    data() {
        return {
            items: [],
            jsonstring: JSON.stringify(this.$store.state.workspace)
        }
    },
    props: ['fetchdata', 'store_link', 'urlasset', 'editmode'],
    created() {
        if (this.$props.fetchdata !== null) {
            this.$store.state.workspace = JSON.parse(this.fetchdata)
            // this.items = this.$store.state.workspace.item
        }
        if (editmode === 'true') {
            for (var item in this.$store.state.workspace.items) {
                this.$store.state.workspace.file++
            }
        }
    },
    methods: {
        bindDataItems: function (type) {
            // this.items.push({type: type, content: null})
            // store.commit('addCustomer', { id: '2', name: 'User 2'})
            // this.$store.state.workspace.items.push({type: type, content: null})
            this.$store.commit('pushData', {type: type, content: null})
        },
        transferData: function () {
            this.jsonstring = JSON.stringify(this.$store.state.workspace)
        }
    },
    watch: {
        items: function (val) {
            this.jsonstring = JSON.stringify(this.$store.state.workspace)
        }
    }
}
</script>

<style scoped>

</style>
