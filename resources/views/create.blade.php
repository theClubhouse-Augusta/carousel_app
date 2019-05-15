<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }
            .most-height {
                height: 80vh
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref most-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            <div class="content">
                <div class="title m-b-md">
                    Carousel Admin
                </div>
                <form method="post" enctype="multipart/form-data" action="{{route('image.store')}}" >
                    @csrf
                    <input type="file" name="imgfile">
                    <br>
                    <br>
                    <input type="submit" name="submit" value="upload">
                </form>
                <div class="response" >
                <?php
                    if (!empty($_GET['uploadSuccess']) && isset($_GET['uploadSuccess'])) {
                        $nullUpload = $_GET['nullUpload'];
                        $uploadSuccess = $_GET['uploadSuccess'];
                        $lastUpload = $_GET['lastUpload'];
                    }
                    var_dump($nullUpload);
                    echo '<br>';
                    var_dump($uploadSuccess);
                    echo '<br>';
                    var_dump($lastUpload);
                    if ((int) $nullUpload !== 0) {
                        ?>
                    <p><?php echo "Didn't get anything. Did you even try and upload a file?"; ?></p>
                <?php
                    }
                    if ((int) $uploadSuccess !== 0) {
                        ?>
                        <p>Your Last upload was: </p>
                        <img src="<?php echo $lastUpload; ?>" style="max-width: 200px;"  alt="<?php echo $lastUpload; ?>">
                    <?php
                    } ?>
                </div>
            </div>
        </div>