<template>
    <div class="relative flex w-full h-72">
        <div class="h-full w-full grid grid-cols-3 gap-5 transition-all ease-in-out">
            <div v-for="(value, index) in this.arrTestimoni.person" :class="value.status === null ? 'translate-x-52 hidden' : value.status === 'active first' ? 'col-start-3' : value.status === 'active' ? 'col-start-2' : value.status === 'active last' ? 'col-start-1' : value.status === 'out' ? '-translate-x-52 hidden' : null"
                 class="col-span-1 transition-all ease-in-out bg-white rounded-xl shadow-lg transition-all ease-in-out">
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
            </div>
        </div>
        <div class="absolute w-full h-full flex justify-between">
            <div class="flex h-full">
                <button @click="prevButton" class="m-auto">Prev</button>
            </div>
            <div class="flex h-full">
                <button @click="nextButton" class="m-auto">Next</button>
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
                this.arrTestimoni.person[0].status = 'active last';
                this.arrTestimoni.person[1].status = 'active';
                this.arrTestimoni.person[2].status = 'active first'
            })
        this.data = this.arrTestimoni.person[0]
    },
    methods: {
        nextButton() {
            for (let i in this.arrTestimoni.person) {
                if (i == this.arrTestimoni.person.length - 1) {
                    break
                } else {
                    if (this.arrTestimoni.person[i].status === 'active first') {
                        let recenti = i
                        this.arrTestimoni.person[recenti].status = 'active'
                        this.arrTestimoni.person[parseInt(recenti) - 1].status = 'active last'
                        this.arrTestimoni.person[1 + parseInt(recenti)].status = 'active first'
                        this.arrTestimoni.person[parseInt(recenti) - 2].status = 'out'
                        // if(2 - parseInt(recenti) >= 0) {
                        //     console.log('out')
                        //     this.arrTestimoni.person[2 - parseInt(recenti)].status = 'out'
                        // }
                        // console.log(parseInt(recenti) - 1)
                        // if(parseInt(recenti) - 1 >= 0) {
                        //     console.log('active last')
                        //     this.arrTestimoni.person[parseInt(recenti) - 1].status = 'active last'
                        // }
                        break
                    }
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
        prevButton() {
            for (let i in this.arrTestimoni.person) {
                if (this.arrTestimoni.person[i].status === 'active last') {
                    let recenti = i
                    console.log(recenti)
                    this.arrTestimoni.person[recenti].status = 'active'
                    this.arrTestimoni.person[parseInt(recenti) + 2].status = null
                    this.arrTestimoni.person[1 + parseInt(recenti)].status = 'active first'
                    this.arrTestimoni.person[parseInt(recenti) - 1].status = 'active last'
                    // if(2 + parseInt(recenti) >= this.arrTestimoni.person.length - 1) {
                    //     this.arrTestimoni.person[2 + parseInt(recenti)].status = null
                    // }
                    // if(1 + parseInt(recenti) <= this.arrTestimoni.person.length - 1) {
                    //     console.log(this.arrTestimoni.person[1 + parseInt(recenti)].status)
                    //     this.arrTestimoni.person[1 + parseInt(recenti)].status = 'active first'
                    // }
                    break
                }
            }
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
