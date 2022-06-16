<template>
    <div class="relative w-full h-72 px-1 md:px-5">
        <div class="h-60 border-2 grid grid-cols-3">
            <div v-for="(value, index) in this.arrTestimoni.person" :class="value.status === null ? 'translate-x-52' : value.status === 'active first' ? 'col-start-3' : value.status === 'active' ? 'col-start-2' : value.status === 'active last' ? 'col-start-1' : value.status === 'out' ? '-translate-x-52' : null"
                 class="col-span-1 transition-all ease-in-out bg-white rounded-xl shadow-lg border-2">
                <div class="self-start pl-1 pt-5 w-2/6">
                    <img class="rounded-full w-32 h-32 bg-gray-200 object-cover"
                         :src="pathfoto + value.picture">
                </div>
                <div class="w-4/6 relative px-5">
                    <span class="text-lg font-bold truncate" v-if="show">{{ value.name }}</span>
                    <div class="text-amber-500 font-semibold truncate" v-if="show">{{ value.status }}</div>
                    <p v-if="show"
                       class="mt-2 leading-3 overflow-hidden text-ellipsis text-sm font-light transition-all ease-in-out duration-300 h-20 leading-4">
                        {{ value.pesan }}
                    </p>
                </div>
                <div class="">
                    <button
                        class="rounded-full h-7 w-7 md:h-10 md:w-10 hover:bg-gray-200 md:text-lg border hover:border-0 border-black"
                        v-on:click="nextButton"><i class="fas fa-angle-right"></i></button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import axios from "axios";

export default {
    data() {
        return {
            show: true,
            data: {},
            counter: 0,
            pathfoto: window.location.origin + '/Upload/foto_komunitas/',
            arrTestimoni: {
                count: 1,
                person: []
            },
        }
    },
    props: ['get_req'],
    created() {
        axios
            .get(this.$props.get_req)
            .then(response => {
                this.arrTestimoni.person = response.data
                this.data = this.arrTestimoni.person[0]
                for (let i in this.arrTestimoni.person) {
                    this.arrTestimoni.person[i]['status'] = null
                }
                this.arrTestimoni.person[0]['status'] = 'active first'
            })
        this.data = this.arrTestimoni.person[0]
    },
    methods: {
        nextButton() {
            for (let i in this.arrTestimoni.person) {
                if (this.arrTestimoni.person[i].status === 'active first') {
                    console.log(i)
                    let recenti = i
                    if()
                    this.arrTestimoni.person[recenti].status = 'active'
                    this.arrTestimoni.person[++recenti].status = 'active first'
                    if(--recenti >= 0) {
                        this.arrTestimoni.person[--recenti].status = 'out'
                    }
                    if(-recenti >= 0) {
                        this.arrTestimoni.person[-recenti].status = 'active last'
                    }
                    break
                }
            }
            // this.counter = this.counter + 1
            // if (this.counter === 4) {
            //     this.counter = 0
            // }
            // this.show = false
            // this.data = this.arrTestimoni.person[this.counter]
            // setTimeout(() => this.show = true, 200);
        },
        handleScroll() {
            // console.log(this.$refs.snapSpace.scrollWidth)
            // console.log(document.getElementById('activeSnap').getBoundingClientRect().left)
        },
    }
}
</script>

<style scoped>
</style>
