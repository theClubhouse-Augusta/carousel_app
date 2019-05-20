<template>
    <div id="carouselExampleSlidesOnly" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner" >
            <div v-bind:key="image" v-for="image in imagePaths" class="carousel-item" data-interval="10000" >
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
// I don't know how to do a sweet carousel transition using boot strap carousel
// We'll get there though.
// This comment is for a server test

</script>

<style lang="sass">
.imageContainer
    height: 100vh
    position: relative
    overflow: hidden
    background-size: cover
    background-position: center

$carousel-transition: transform 2s ease, opacity .5s ease-out
</style>

