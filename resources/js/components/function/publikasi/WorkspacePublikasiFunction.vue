<template>
    <div class="grid grid-cols-1 gap-x-5 my-5">
        <item-render-function v-for="(item, index) in items" v-bind:type="item.type" v-bind:content="item.content">
        </item-render-function>
<!--        <div>-->
<!--            <button class="bg-green-400">add</button>-->
<!--            <input v-model="items">-->
<!--        </div>-->
    </div>
</template>

<script>
export default {
    data() {
        return {
            items: [
                {type: 'title', content: 'Testing'},
                {type: 'paragraph', content: '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin porta suscipit lacus, ut euismod velit bibendum et. Nam dictum dictum est, vel hendrerit nisl hendrerit vitae. In non leo dictum, dapibus elit ac, aliquet libero. In fermentum nulla ex, a sagittis risus ultricies nec. Sed venenatis sodales diam. Sed eu sagittis lectus, a rutrum dui. Nullam in lectus eu nibh ultricies lobortis pharetra id neque. Nam ultrices, mauris id ullamcorper lacinia, magna nunc finibus magna, non finibus arcu quam quis est. Ut suscipit nec tellus sed viverra. Fusce et risus fermentum, varius metus sed, rutrum lectus.</p>'}
            ]
        }
    },
    props: ['fetchdata'],
}
</script>

<style scoped>

</style>
