<template>
    <div class="grid grid-cols-1 gap-x-5 my-5">
        <item-render-function v-for="(item, index) in items" v-bind:type="item.type" v-bind:content="item.content" v-bind:index="index">
        </item-render-function>
        <div class="grid grid-cols-6 overflow-x-scroll">
            <button @click="bindDataItems('title')">Title</button>
            <button @click="bindDataItems('paragraph')">Paragraph</button>
            <button @click="bindDataItems('image')">Image</button>
            <button @click="bindDataItems('title')">Video</button>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            items: [
            ]
        }
    },
    props: ['fetchdata'],
    methods: {
        bindDataItems: function (type) {
            this.items.push({type: type, content: null})
            this.$store.state.workspace.items = this.items
        }
    }
}
</script>

<style scoped>

</style>
