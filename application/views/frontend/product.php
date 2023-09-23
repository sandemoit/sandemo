<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
</head>

<body>
    <style>
        body,
        html {
            height: 100%;
            margin: 0;
        }

        .bgimg {
            background-image: url('./assets/frontend/images/bg.jpeg');
            height: 100%;
            background-position: center;
            background-size: cover;
            position: relative;
            color: white;
            font-family: "Courier New", Courier, monospace;
            font-size: 25px;
        }

        .topleft {
            position: absolute;
            top: 0;
            left: 16px;
        }

        .mid {
            position: absolute;
            text-align: center;
            top: 70%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .middle {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
        }

        hr {
            margin: auto;
            width: 40%;
        }

        a {
            display: block;
            background-color: #eaf1dd;
            color: #060;
            text-decoration: none;
            font-family: Verdana, Geneva, sans-serif;
            font-size: 25px;
            padding: 6px 15px;
            margin: 4px;
            border-radius: 50px;
        }

        a:hover {
            color: #030;
        }

        .timer {
            font-size: 50px;

        }
    </style>

    <body>

        <div class="bgimg">
            <div class="topleft">
                <p>SANDEMO.ID</p>
            </div>
            <div class="middle">
                <h1>COMING SOON</h1>
                <hr>
                <p class="timer" id="demo"></p>
            </div>
            <div class="mid">
                <p><a href="<?= site_url('') ?>">Back To Home</a></p>
            </div>
        </div>


        <script>
            // Set the date we're counting down to
            var countDownDate = new Date("Dec 15, 2022 00:00:00").getTime();

            // Update the count down every 1 second
            var x = setInterval(function() {

                // Get todays date and time
                var now = new Date().getTime();

                // Find the distance between now an the count down date
                var distance = countDownDate - now;

                // Time calculations for days, hours, minutes and seconds
                var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                // Display the result in an element with id="demo"
                document.getElementById("demo").innerHTML = days + "d " + hours + "h " +
                    minutes + "m " + seconds + "s ";

                // If the count down is finished, write some text
                if (distance < 0) {
                    clearInterval(x);
                    document.getElementById("demo").innerHTML = "EXPIRED";
                }
            }, 1000);
        </script>
    </body>

</html>