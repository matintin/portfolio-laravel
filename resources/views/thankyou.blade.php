<!DOCTYPE html>
<html>
    <head>
        <title>Thanks</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100,300" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="css/animate.css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
                position: relative;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
            a { 
                padding: .2em;
                text-decoration: none;
                color: tomato;
                font-weight: 100;
                font-size: 3em;
                position: absolute;
                top:1em;
                left: 3em;
            }
            a:hover {
                background-color: tomato;
                color: #fff;
            }

        </style>
        <script>
        window.onload = function(){

            var animate = document.getElementById('animate');

            animate.className = animate.className + 'animated bounceIn';

        };
        </script>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">Thanks for message</div>
            </div>
            <a href="{{url('index')}}" id="animate">Back</a>
        </div>
    </body>
</html>
