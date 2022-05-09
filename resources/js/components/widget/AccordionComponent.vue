<template>
    <div>
        <div @click="clickactiv" class="border-2 h-14 flex justify-between py-3 px-5 cursor-pointer"
             :class="status ? 'bg-blue-300 hover:bg-blue-200' : 'bg-gray-100'">
            <div>{{ title }}</div>
            <div class="w-5 h-5">
                <i class="fas fa-chevron-up my-auto transition-all ease-in-out duration-300"
                   :class="status ? 'rotate-180' : 'rotate-0'"></i>
            </div>
        </div>
        <div class="bg-white text-sm transition-all ease-in-out duration-300 overflow-hidden text-left"
             :class="status ? 'h-60 border-b-2 border-x-2' : 'h-0'">
            <div class="p-5">
                <slot></slot>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "AccordionComponent",
    data() {
        return {
            status: false,
        }
    },
    props: ['title'],
    methods: {
        clickactiv: function () {
            this.status = this.status !== true;
        }
    }
}
</script>

<style scoped>

</style>
