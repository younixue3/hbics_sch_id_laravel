<template>
    <div @mouseover="onHover()" @mouseleave="onLeave()"
         :class="[column ? 'md:col-span-2' : 'md:col-span-1', rows ? 'md:row-span-2' : 'md:row-span-1']"
         class="relative bg-cover bg-center transition-all ease-in-out duration-200 rounded-2xl shadow-lg flex justify-end"
         :style="{ backgroundImage: `url('${imagecontent}')` }">
        <div
            class="transition-all ease-in-out duration-200 overflow-hidden mt-auto rounded-b-2xl bg-gradient-to-t to-transparent pt-3 pb-5 px-3 lg:px-6" :class="showup ? 'from-gray-700' : 'from-black'">
            <div class="">
                <div class="static text-white">
                    <div class="mb-5">
                        <span class="md:w-16 px-1 py-0.5 pt-1 rounded-md bg-red-600 md:flex md:justify-between">
                            <i class="fas fa-fire-alt text-xl mt-0.5"></i>
                            <span class="hidden md:block">Viral</span>
                        </span>
                    </div>
                    <span class="font-bold truncate leading-4 z-10" :class="[column === true && rows === true ? 'text-lg md:text-3xl lg:text-5xl' : [column ? 'text-lg md:text-3xl' : '', column === false && rows === false ? 'text-lg md:text-2xl' : '']]">{{ title }}</span>
                    <h4 class="text-amber-500 font-semibold truncate text-xs md:text-sm leading-4">06 April, 2022</h4>
                    <p class="my-4 leading-6 overflow-hidden text-ellipsis text-lg font-light transition-all ease-in-out duration-300 h-12">
                        {{ content }}</p>
                </div>
                <div class="w-full flex justify-between text-white">
                    <div class="flex h-6 gap-x-1 align-text-bottom">
                        <img class="rounded-full h-6 w-6 md:h-8 md:w-8" :src="imagecontent">
                        <div class="m-auto text-xs md:text-base truncate">
                            Ricko Tiaka
                        </div>
                    </div>
                    <div class="flex h-5 gap-x-5">
                        <button class="text-xs md:text-lg"><i class="fas fa-heart"></i></button>
                        <button class="text-xs md:text-lg"><i class="fas fa-share"></i></button>
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
