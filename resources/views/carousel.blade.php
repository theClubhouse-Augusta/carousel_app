<head>
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="css/app.css">
</head>
<h1>Does this work?</h1>

<div id="app" >
        <carousel-component v-bind:image-paths='{{ json_encode($imagePaths) }}' ></carousel-component>
</div>

<script src="js/app.js" ></script>