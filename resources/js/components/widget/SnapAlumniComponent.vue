<template>
    <div class="flex relative w-full">
        <div ref="scrollsnap"
             class="snap-x flex gap-6 snap-mandatory overflow-x-auto overflow-y-hidden removescrollbar scroll-smooth pb-5">
            <div v-for="(item, index) in arrTestimoni.alumni" :id="'testing' + index"
                 class="snap-center scroll-mx-6 shrink-0 rounded-3xl px-2">
                <!--                <img class="h-44 lg:h-56 rounded-3xl" :src="item.image" />-->
                <div class="flex relative py-3">
                    <div class="bg-white h-44 lg:h-56 lg:w-[30rem] rounded-3xl shadow-xl p-5">
                        <div class="md:flex h-full">
                            <div class="md:w-1/3 m-auto flex">
                                <img class="h-20 w-20 rounded-full m-auto object-cover" :src="imageurl + item.picture">
                            </div>
                            <div class="md:w-2/3 m-auto">
                                <span class="text-sm md:text-lg">{{ item.name }}</span>
                                <div class="text-base md:text-2xl font-semibold">{{ item.prestasi }}</div>
                                <div class="text-xs md:text-sm">{{ item.detail_prestasi }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="absolute flex h-full right-0 px-2">
            <button v-on:click="nextButton()"
                    class="rounded-full m-auto h-7 w-7 md:h-10 md:w-10 md:h-10 md:w-10 backdrop-blur-sm backdrop-brightness-75 text-2xl text-white transition-all ease-in-out">
                <i class="fas fa-angle-right"></i></button>
        </div>
        <div class="absolute flex h-full left-0 px-2">
            <button v-on:click="prevButton()"
                    class="rounded-full m-auto h-7 w-7 md:h-10 md:w-10 md:h-10 md:w-10 backdrop-blur-sm backdrop-brightness-75 text-2xl text-white transition-all ease-in-out">
                <i class="fas fa-angle-left"></i></button>
        </div>
    </div>
</template>

<script>
import axios from "axios";

export default {
    data() {
        return {
            imageurl: window.location.origin + '/Upload/foto_siswa/',
            counter: 0,
            scrolcount: 0,
            arrTestimoni: {
                count: 0,
                alumni: []
            },
        }
    },
    props: ['area'],
    mounted() {
        axios
            .get(this.$props.area)
            .then(response => this.arrTestimoni.alumni = response.data)
    },
    methods: {
        nextButton() {
            var scroller = this.$refs.scrollsnap

            var element = document.getElementById('testing1').getBoundingClientRect().width
            console.log(this.scrolcount)
            if (this.counter === 5) {
                this.counter = 0
                this.scrolcount = 0
            } else {
                this.counter = this.counter + 1
                this.scrolcount = this.scrolcount + element
            }
            scroller.scrollTo({behavior: 'smooth', left: this.scrolcount})
        },
        prevButton() {
            var scroller = this.$refs.scrollsnap
            var element = document.getElementById('testing' + this.counter).getBoundingClientRect().width
            if (this.counter === 0) {
                this.scrolcount = scroller.scrollWidth
                this.counter = 5
            } else {
                this.counter = this.counter - 1
                this.scrolcount = this.scrolcount - element
            }
            scroller.scrollTo({behavior: 'smooth', left: this.scrolcount})
        },
    }
}
</script>

<style scoped>

</style>
