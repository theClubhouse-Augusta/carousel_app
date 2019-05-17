<style>
form {
    display: inline-block;
    position: relative;
}
.delete {
    position: relative;
}
.delete>p {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
    font-weight: bold;
    opacity: 0;
}
img {
    max-width: 200px;
    margin: 5px;
    opacity: 1;
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
    opacity: 0;
}

form:hover .delete>img {
    opacity: .2;
}
form:hover .delete>p {
    opacity: .8;
}


</style>

<nav>
    <a href="image/create"><button>Want to add some images?</button></a>
</nav>
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
                        <div class="delete" >
                            <p>Delete!</p>
                            <img src="<?php echo $imagePath; ?>" alt="">
                        </div>
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