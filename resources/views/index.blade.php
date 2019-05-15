<style>
form {
    display: inline-block;
    position: relative;
}
img {
    max-width: 200px;
    margin: 20px;
    visibility: hidden;
}
input {
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
    background-color: transparent;
    border: none;
    box-shadow: none;
    background-size: contain;
    background-repeat: no-repeat;
}

input:hover {
    cursor: pointer;
}
</style>
        <?php

            // Test if navigated here by GET
            if (isset($imagePaths) && !empty($imagePaths)) {
                foreach ($imagePaths as $imagePath) {
                    $imageId = explode('/', $imagePath);
                    $imageId = implode('/', array_slice($imageId, 3, (sizeof($imageId) - 1))); ?>

                    <form action="{{route('image.destroy', ['image' => $imageId])}}" method="post">
                        @csrf
                        <input type="hidden" name="_method" value="DELETE">
                        <!-- <input type="hidden" name="id" value="{{ $imageId }}" > -->
                        <img src="<?php echo $imagePath; ?>" alt="">
                        <input type="submit" value="" style="background-image: url( <?php echo $imagePath; ?>); " >
                    </form>

                    <?php
                }
            }

            // Test for If we get here on a POST
            if (isset($url) && !empty($url)) {
                echo '<br><br>';
                var_dump($url);
            }
        ?>
    </body>
</html>