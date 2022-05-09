<template>
    <a @mouseover="onHover()" @mouseleave="onLeave()" :href="urlshow"
         :class="[column ? 'md:col-span-2' : 'md:col-span-1', rows ? 'md:row-span-2' : 'md:row-span-1']"
         class="relative bg-cover bg-center transition-all ease-in-out duration-200 rounded-2xl shadow-lg flex justify-end"
         :style="{ backgroundImage: `url('${windowspath + item.thumbnail}')` }">
        <video class="rounded-2xl absolute w-full h-full z-0 object-cover" v-if="item.type = 'video'" autoplay loop muted>
            <source :src="windowspath + item.thumbnail">
        </video>
        <div
            class="transition-all ease-in-out duration-200 overflow-hidden m-auto h-full w-full rounded-b-2xl bg-gradient-to-t to-transparent pt-3 pb-5 px-3 lg:px-6 z-10"
            :class="showup ? 'from-gray-700' : 'from-black'">
            <div class="h-full relative">
                <div class="static text-white">
                    <div class="mb-5">
                        <span class="px-1 py-0.5 pt-1 rounded-md bg-red-600">
                            <i class="fas fa-fire-alt text-xl mt-0.5"></i>
                            <span class="hidden md:inline">Trending</span>
                        </span>
                    </div>
                    <div class="font-bold leading-4 z-10 overflow-hidden"
                          :class="[column === true && rows === true ? 'text-lg md:text-3xl lg:text-5xl' : [column ? 'text-lg md:text-3xl h-16' : '', column === false && rows === false ? 'text-lg md:text-2xl h-16' : '']]">
                        {{ item.title }}</div>
                    <h4 class="text-amber-500 font-semibold truncate text-xs md:text-sm leading-4">{{ item.created_at }}</h4>
                    <p class="my-4 leading-6 overflow-hidden text-ellipsis text-lg font-light transition-all ease-in-out duration-300 h-12" :class="column === false && rows === false ? 'hidden' : ''">
                        {{ item.title }}</p>
                </div>
                <div class="w-full absolute flex justify-between text-white bottom-0">
                    <div class="flex h-6 gap-x-1 align-text-bottom">
                        <img class="rounded-full h-6 w-6 md:h-8 md:w-8 object-cover" :src="pathprofile + author_pic">
                        <div class="m-auto text-xs md:text-base truncate">
                            {{ author.name }}
                        </div>
                    </div>
                    <div class="flex h-5 gap-x-5">
                        <button class="text-xs md:text-lg"><i class="fas fa-heart"></i></button>
                        <button class="text-xs md:text-lg"><i class="fas fa-share"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </a>
</template>

<script>
export default {
    data() {
        return {
            showup: false,
            column: false,
            rows: false,
            item: null,
            windowspath: window.location.origin + '/Upload/foto_content/',
            pathprofile: window.location.origin + '/Upload/foto_profile/',
        }
    },
    props: ['insight', 'item', 'author', 'author_pic', 'urlshow'],
    created() {
        const months = ["Jan", "Feb", "Mar","Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];
        if (this.insight === '1') {
            this.column = true;
            this.rows = true;
        } else if (this.insight === '2') {
            this.column = true;
            this.rows = false;
        }
        this.item = JSON.parse(this.$props.item)
        this.author = JSON.parse(this.$props.author)
        this.item.created_at = new Date(this.item.created_at)
        this.item.created_at = this.item.created_at.getDate() + " " + months[this.item.created_at.getMonth()] + ", " + this.item.created_at.getFullYear()
    },
    methods: {
        onHover() {
            this.showup = true;
        },
        onLeave() {
            this.showup = false;
        }
    }
}
</script>

<style scoped>

</style>
