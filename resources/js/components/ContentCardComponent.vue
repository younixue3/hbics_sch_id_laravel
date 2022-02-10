<template>
    <div @mouseover="onHover()" @mouseleave="onLeave()" :class="[column ? 'col-span-2' : 'col-span-1', rows ? 'row-span-2' : 'row-span-1']" class="relative bg-cover h-96 bg-center transition-all ease-in-out duration-200" :style="{ backgroundImage: `url('${imagecontent}')` }">
        <div class="absolute bg-white w-full bottom-0 transition-all ease-in-out duration-200" :class="showup ? 'h-52' : 'h-20'">
            asd
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
    props: ['imagecontent', 'id', 'insight'],
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
