<template>
    <div @mouseover="onHover()" @mouseleave="onLeave()"
         :class="[column ? 'md:col-span-2' : 'md:col-span-1', rows ? 'md:row-span-2' : 'md:row-span-1']"
         class="relative bg-cover h-52 md:h-full bg-center col-span-1 transition-all ease-in-out duration-200 rounded-2xl shadow-lg"
         :style="{ backgroundImage: `url('${imagecontent}')` }">
        <div
            class="absolute bg-white w-full bottom-0 transition-all ease-in-out duration-200 rounded-b-2xl overflow-hidden px-7 py-5"
            :class="showup ? 'h-52' : 'md:h-32'">
            <div class="relative h-full">
                <div class="static">
                    <span class="text-lg font-bold truncate">{{ title }}</span>
                    <div class="text-amber-500 font-semibold truncate">{{ title }}</div>
                    <p class="mt-2 leading-3 overflow-hidden text-ellipsis text-sm font-light transition-all ease-in-out duration-300"
                       :class="[showup ? 'h-9 md:h-12 translate-y-0 opacity-100' : 'h-5 translate-y-10 opacity-0', column ? '' : '']">
                        {{ content }}</p>
                </div>
                <div
                    class="absolute w-full bottom-0 h-5 flex justify-between self-end mt-12 transition-all ease-in-out mb-2 flex"
                    :class="showup ? 'translate-y-0 opacity-100' : 'translate-y-10 opacity-0'">
                    <div class="flex h-5 gap-x-1">
                        <img class="rounded-full h-5 w-5" :src="imagecontent">
                        <span class="text-xs">Ricko Tiaka</span>
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
        } else if (this.insight > 30) {
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
