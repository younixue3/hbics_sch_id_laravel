<template>
    <div class="relative flex w-full">
        <div class="h-full w-full grid grid-cols-3 gap-5 transition-all ease-in-out">
            <div v-for="(value, index) in this.arrTestimoni.person" :class="value.deleted_at === null ? 'translate-x-52 hidden' : value.deleted_at === 'active first' ? 'col-start-3' : value.deleted_at === 'active' ? 'col-start-2' : value.deleted_at === 'active last' ? 'col-start-1' : value.deleted_at === 'out' ? '-translate-x-52 hidden' : null"
                 class="col-span-1 transition-all ease-in-out bg-white rounded-xl shadow-lg transition-all ease-in-out flex p-2">
                <div class="self-start w-2/6 h-full flex">
                    <img class="rounded-full w-32 h-32 bg-gray-200 object-cover m-auto"
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
                <button @click="prevButton" class="m-auto bg-black text-white w-8 h-8 p-1"><i class="fas fa-angle-left"></i></button>
            </div>
            <div class="flex h-full">
                <button @click="nextButton"class="m-auto bg-black text-white w-8 h-8 p-1"><i class="fas fa-angle-right"></i></button>
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
                    this.arrTestimoni.person[i]['deleted_at'] = null
                }
                this.arrTestimoni.person[0].deleted_at = 'active last';
                this.arrTestimoni.person[1].deleted_at = 'active';
                this.arrTestimoni.person[2].deleted_at = 'active first'
            })
        this.data = this.arrTestimoni.person[0]
    },
    methods: {
        nextButton() {
            for (let i in this.arrTestimoni.person) {
                if (i == this.arrTestimoni.person.length - 1) {
                    break
                } else {
                    if (this.arrTestimoni.person[i].deleted_at === 'active first') {
                        let recenti = i
                        this.arrTestimoni.person[recenti].deleted_at = 'active'
                        this.arrTestimoni.person[parseInt(recenti) - 1].deleted_at = 'active last'
                        this.arrTestimoni.person[1 + parseInt(recenti)].deleted_at = 'active first'
                        this.arrTestimoni.person[parseInt(recenti) - 2].deleted_at = 'out'
                        // if(2 - parseInt(recenti) >= 0) {
                        //     console.log('out')
                        //     this.arrTestimoni.person[2 - parseInt(recenti)].deleted_at = 'out'
                        // }
                        // console.log(parseInt(recenti) - 1)
                        // if(parseInt(recenti) - 1 >= 0) {
                        //     console.log('active last')
                        //     this.arrTestimoni.person[parseInt(recenti) - 1].deleted_at = 'active last'
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
                if (this.arrTestimoni.person[i].deleted_at === 'active last') {
                    let recenti = i
                    console.log(recenti)
                    this.arrTestimoni.person[recenti].deleted_at = 'active'
                    this.arrTestimoni.person[parseInt(recenti) + 2].deleted_at = null
                    this.arrTestimoni.person[1 + parseInt(recenti)].deleted_at = 'active first'
                    this.arrTestimoni.person[parseInt(recenti) - 1].deleted_at = 'active last'
                    // if(2 + parseInt(recenti) >= this.arrTestimoni.person.length - 1) {
                    //     this.arrTestimoni.person[2 + parseInt(recenti)].deleted_at = null
                    // }
                    // if(1 + parseInt(recenti) <= this.arrTestimoni.person.length - 1) {
                    //     console.log(this.arrTestimoni.person[1 + parseInt(recenti)].deleted_at)
                    //     this.arrTestimoni.person[1 + parseInt(recenti)].deleted_at = 'active first'
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
