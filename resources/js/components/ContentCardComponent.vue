<template>
    <div @mouseover="onHover()" @mouseleave="onLeave()" :class="[column ? 'md:col-span-2' : 'md:col-span-1', rows ? 'md:row-span-2' : 'md:row-span-1']" class="relative bg-cover h-52 md:h-full bg-center transition-all ease-in-out duration-200 rounded-2xl shadow-lg shadow-neutral-300" :style="{ backgroundImage: `url('${imagecontent}')` }">
        <div class="absolute rounded-t-xl bg-white w-full bottom-0 transition-all ease-in-out duration-200 rounded-b-2xl overflow-hidden px-2 py-" :class="showup ? 'h-1/3' : 'h-1/6'">
            <div class="grid grid-rows-2">
                <div>
                    <span class="text-lg font-bold truncate">{{title}}</span>
                    <p class="mt-2 h-12 leading-4 overflow-hidden text-ellipsis text-sm font-light" :class="rows ? '' : 'hidden'">{{content}}</p>
                </div>
                <div class="h-5 flex justify-between self-center">
                    <div class="flex h-5 gap-x-1">
                        <img class="rounded-full h-5 w-5" :src="imagecontent">
                        <span>Ricko Tiaka</span>
                    </div>
                    <div class="flex h-5 gap-x-5">
                        <button class="text-lg"><i class="fas fa-heart"></i></button>
                        <button class="text-lg"><i class="fas fa-share"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            showup: false,
            column: false,
            rows: false,
        }
    },
    props: ['imagecontent', 'id', 'insight', 'title', 'content'],
    created() {
        if (this.insight > 40) {
            this.column = true;
            this.rows = true;
        } else if (this.insight > 30 ) {
            this.column = false;
            this.rows = true;
        } else if (this.insight > 20) {
            this.column = true;
            this.rows = false;
        }
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
