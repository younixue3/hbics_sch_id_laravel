<template>
    <div class="flex relative w-full py-3">
        <div ref="scrollsnap"
             class="snap-x flex gap-6 snap-mandatory overflow-x-auto overflow-y-hidden removescrollbar scroll-smooth pb-10 px-2">
            <div v-for="(item, index) in arrFasilitas.fasilitas" :id="'testing' + index"
                 class="snap-center scroll-mx-6 shrink-0 md:mx-2 rounded-3xl shadow-xl">
                <!--                <img class="h-44 lg:h-56 rounded-3xl" :src="item.image" />-->
                <div class="flex relative">
                    <img v-if="item.type === 'img'" class="h-44 lg:h-56 w-[27rem] object-cover rounded-3xl"
                         :class="index === 5 ? 'blur-sm' : ''" :src="asset + item.name"/>
                    <video v-if="item.type === 'video'" class="h-44 lg:h-56 w-[27rem] object-cover rounded-3xl"
                           :class="index === 5 ? 'blur-sm' : ''">
                        <source :src="asset + item.name">
                    </video>
                    <a :href="fasilitaspath" class="absolute w-full h-full flex" v-if="index === 5">
                        <div class="m-auto text-3xl text-white">
                            Show More +
                        </div>
                    </a>
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
import axios from 'axios';

export default {
    data() {
        return {
            fasilitaspath: window.location.origin + '/fasilitas',
            counter: 0,
            scrolcount: 0,
            arrFasilitas: {
                count: 0,
                fasilitas: []
            },
        }
    },
    props: ['url', 'asset'],
    created() {
        axios
            .get(this.$props.url)
            .then(response => (this.arrFasilitas.fasilitas = response.data))
    },
    methods: {
        nextButton() {
            var scroller = this.$refs.scrollsnap

            var element = document.getElementById('testing1').getBoundingClientRect().width
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
