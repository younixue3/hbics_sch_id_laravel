<template>
    <div @mouseenter="mousein" @mouseleave="mouseout">
        <slot></slot>
    </div>
</template>

<script>
export default {
    name: "ActivityComponent",
    methods: {
        mouseout: function () {
            console.log('mouse out')
        },
        mousein: function () {
            console.log('mouse in')
        }
    }
}
</script>

<style scoped>

</style>
