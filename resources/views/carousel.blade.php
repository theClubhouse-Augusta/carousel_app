<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="css/app.css">
</head>
<img src="images/theclubhouselogo.png" id="theclogo" alt="">
<!-- Sorry this is to disable the hover pausing animation for the slider -->
<div style="position: fixed; top: 0; left: 0; width: 100vw; height: 100vh;z-index: 20;" ></div>
<div id="app" >
        <carousel-component v-bind:image-paths='{{ json_encode($imagePaths) }}' ></carousel-component>
</div>

<script src="js/app.js" ></script>