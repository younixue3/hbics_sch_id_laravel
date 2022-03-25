<template>
    <form id="formPublish" method="get" class="grid grid-cols-1 gap-x-5 gap-y-4 my-5">
        <item-render-function v-for="(item, index) in items" v-bind:type="item.type" v-bind:content="item.content" v-bind:index="index">
        </item-render-function>
        <div class="grid grid-cols-6 gap-5 overflow-x-scroll">
            <div class="cursor-pointer text-center bg-amber-400 rounded-md" @click="bindDataItems('paragraph')">
                <div>
                    <i class="fa-solid inline-block fa-paragraph"></i>
                </div>
                <div class="text-sm">Paragraph</div>
            </div>
            <div class="cursor-pointer text-center bg-amber-400 rounded-md" @click="bindDataItems('title')">
                <div>
                    <i class="fa-solid fa-heading"></i>
                </div>
                <div class="text-sm">Title</div>
            </div>
            <div class="cursor-pointer text-center bg-amber-400 rounded-md" @click="bindDataItems('image')">
                <div>
                    <i class="fa-solid fa-image"></i>
                </div>
                <div class="text-sm">Image</div>
            </div>
            <div class="cursor-pointer text-center bg-amber-400 rounded-md" @click="bindDataItems('video')">
                <div>
                    <i class="fa-solid fa-video"></i>
                </div>
                <div class="text-sm">video</div>
            </div>
        </div>
    </form>
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
