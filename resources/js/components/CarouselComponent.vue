<template>
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner" >
            <div v-bind:key="image" v-for="image in imagePaths" class="carousel-item" data-interval="5000" >
                <!-- <div class="imageContainer d-block w-100">
                    <img v-bind:src='image' alt="...">
                </div> -->
                <div role='img' class="imageContainer d-block w-100" v-bind:style="{ 'background-image': 'url(' + image + ')' }">
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
.imageContainer
    height: 100vh
    position: relative
    overflow: hidden
    background-size: cover
    background-position: center

img 
    min-height: 100vh
    position: absolute
    top: 0
    left: 0
    width: 100%
</style>

