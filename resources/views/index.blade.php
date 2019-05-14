<style>
img {
    max-width: 200px;
    margin: 20px;
}
</style>
        <?php

            // Test if navigated here by GET
            if (isset($imagePaths) && !empty($imagePaths)) {
                foreach ($imagePaths as $image) {
                    // echo Storage::getVisibility($image);
                    // var_dump($image);
                    // echo asset($read);
                    echo "<img src='$image'/>";
                    // echo "<img src='".asset($image)."'/>";
                    // echo "<br>$image";
                }
            }

            // Test for If we get here on a POST
            if (isset($url) && !empty($url)) {
                // echo $request->query('imgfile');
                echo '<br><br>';
                var_dump($url);
                // $hasFile = $hasfile > 0 ? true : false;
                // echo '<br> The File Exists: '.$hasFile;
                // echo '<br>The File is Valid: '.$isValid;
            }
        ?>
    </body>
</html>