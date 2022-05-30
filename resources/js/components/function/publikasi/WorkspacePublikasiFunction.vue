<template>
    <form id="formPublish" :action="store_link" class="grid grid-cols-1 gap-x-5 divide-y-2 gap-y-4 my-5"
          enctype="multipart/form-data"
          name="formChangePassword" method="POST">
        <input type="hidden" name="_token" :value="$store.state.csrf">
        <item-render-function v-for="(item, index) in this.$store.state.workspace.items" v-bind:type="item.type"
                              v-bind:content="item.content" v-bind:index="index" v-bind:urlasset="urlasset"
                              v-bind:editmode="editmode">
        </item-render-function>
        <span class="flex group">
            <div
                class="grid grid-cols-6 gap-5 w-0 scale-0 group-hover:w-max group-hover:scale-100 transition-all ease-in-out overflow-hidden">
                <div class="cursor-pointer text-center bg-amber-400 w-32 rounded-md transition-all ease-in-out"
                     @click="bindDataItems('paragraph')">
                    <div>
                        <i class="fa-solid inline-block fa-paragraph"></i>
                    </div>
                    <div class="text-sm">Paragraph</div>
                </div>
                <div class="cursor-pointer text-center bg-amber-400 w-32 rounded-md" @click="bindDataItems('title')">
                    <div>
                        <i class="fa-solid fa-heading"></i>
                    </div>
                    <div class="text-sm">Title</div>
                </div>
                <div class="cursor-pointer text-center bg-amber-400 w-32 rounded-md" @click="bindDataItems('image')">
                    <div>
                        <i class="fa-solid fa-image"></i>
                    </div>
                    <div class="text-sm">Image</div>
                </div>
                <div class="cursor-pointer text-center bg-amber-400 w-32 rounded-md" @click="bindDataItems('video')">
                    <div>
                        <i class="fa-solid fa-video"></i>
                    </div>
                    <div class="text-sm">video</div>
                </div>
                <div class="cursor-pointer text-center bg-amber-400 w-32 rounded-md" @click="bindDataItems('event')">
                    <div>
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="text-sm">event</div>
                </div>
            </div>
            <div class="bg-green-400 w-10 h-10 text-center rounded-md text-xl group-hover:hidden flex">
                <div class="m-auto">
                    <i class="m-auto fa-solid fa-angle-right"></i>
                </div>
            </div>
        </span>
        <slot>

        </slot>
        <input type="hidden" name="item" v-model="jsonstring">
        <input type="hidden" name="totalfile" v-model="$store.state.file">
        <input class="bg-green-500 my-1 rounded-lg text-xl text-white" @mouseover="transferData" type="submit">
    </form>
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
        console.log(editmode === 'true')
        if (editmode === 'true') {
            for (var item in this.$store.state.workspace.items) {
                this.$store.state.workspace.file++
                console.log(this.$store.state.workspace.file++)
            }
        }
    },
    methods: {
        bindDataItems: function (type) {
            // this.items.push({type: type, content: null})
            // store.commit('addCustomer', { id: '2', name: 'User 2'})
            // this.$store.state.workspace.items.push({type: type, content: null})

            if (type === 'event') {
                this.$store.commit('pushData', {
                    type: type, content: {
                        foto: null,
                        date: null,
                        time_start: null,
                        time_end: null,
                        title: null,
                        description: null,
                        url: null
                    }
                })
            } else if (type === 'image') {
                this.$store.commit('pushData', {
                    type: type, content: {
                        image: null,
                        alt: null
                    }
                })
            } else {
                this.$store.commit('pushData', {type: type, content: null})
            }
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
