<template>
    <div class="flex relative w-full">
        <div ref="scrollsnap"
             class="snap-x flex gap-6 snap-mandatory overflow-x-auto overflow-y-hidden removescrollbar scroll-smooth pb-5">
            <div v-for="(item, index) in arrTestimoni.alumni" :id="'testing' + index"
                 class="snap-center scroll-mx-6 shrink-0 rounded-3xl px-2">
                <!--                <img class="h-44 lg:h-56 rounded-3xl" :src="item.image" />-->
                <div class="flex relative py-3">
                    <div class="bg-white h-44 lg:h-56 lg:w-[30rem] rounded-3xl shadow-xl p-5"
                         :class="index === 5 ? 'blur-sm brightness-75' : ''">
                        <div class="md:flex h-full">
                            <div class="md:w-1/3 m-auto flex">
                                <img class="h-20 w-20 rounded-full m-auto" :src="item.image">
                            </div>
                            <div class="md:w-2/3 m-auto">
                                <span class="text-sm md:text-lg">Queen Callie Tatang</span>
                                <div class="text-base md:text-2xl font-semibold">Juara Harapan 2</div>
                                <div class="text-xs md:text-sm">Dinas Pendidikan Kota Balikpapan (Cinta Cagar Budaya)
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="absolute w-full h-full flex" v-if="index === 5">
                        <div class="m-auto text-3xl text-white">
                            Show More +
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
export default {
    data() {
        return {
            counter: 0,
            scrolcount: 0,
            arrTestimoni: {
                count: 0,
                alumni: [
                    {
                        image: 'https://images.unsplash.com/photo-1604999565976-8913ad2ddb7c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=320&h=160&q=80',
                    },
                    {
                        image: 'https://images.unsplash.com/photo-1604999565976-8913ad2ddb7c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=320&h=160&q=80',
                    },
                    {
                        image: 'https://images.unsplash.com/photo-1604999565976-8913ad2ddb7c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=320&h=160&q=80',
                    },
                    {
                        image: 'https://images.unsplash.com/photo-1604999565976-8913ad2ddb7c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=320&h=160&q=80',
                    },
                    {
                        image: 'https://images.unsplash.com/photo-1604999565976-8913ad2ddb7c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=320&h=160&q=80',
                    },
                    {
                        image: 'https://images.unsplash.com/photo-1604999565976-8913ad2ddb7c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=320&h=160&q=80',
                    },
                ]
            },
        }
    },
    mounted() {
        // this.scrolcount = this.$refs.scrollsnap.scrollWidth
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
