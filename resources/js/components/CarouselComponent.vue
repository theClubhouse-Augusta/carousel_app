<template>
    <div>
        <p>Here we go this is the start of everything.</p>
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner" >
                <div v-bind:key="image" v-for="image in imagePaths" class="carousel-item" data-interval="1000" >
                    <img v-bind:src='image' class="d-block w-100" alt="...">
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    mounted() {
        document.querySelector('.carousel-inner')['childNodes'][0].classList.add('active');
        console.log("Component was Mounted and we're workin");
    },
    props: ['imagePaths']
}
</script>

<style lang="sass">
img 
    width:200px
</style>

