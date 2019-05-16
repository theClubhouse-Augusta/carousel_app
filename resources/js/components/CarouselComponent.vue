<template>
    <div>
        <p>Here we go this is the start of everything.</p>
        <div v-bind:key="image" v-for="image in imagePaths" >
            <img  v-bind:src='image' alt="">
        </div>
    </div>
</template>
<script>
export default {
    mounted() {
        console.log("Component was Mounted and we're workin");
    },
    props: ['imagePaths']
}
</script>

<style lang="sass">
img 
    width:200px
</style>

