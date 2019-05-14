<style>
img {
    max-width: 200px;
    margin: 20px;
}
</style>
<?php

    // Read images and displays them
    if (isset($read) && !empty($read)) {
        foreach ($read as $image) {
            echo "<img src='$image'/>";
        }
    }
?>