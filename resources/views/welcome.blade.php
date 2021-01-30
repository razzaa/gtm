
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>GTM - Coming Soon</title>
    <meta name="description" content="">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Raleway:wght@400;500;600;800&family=Roboto:wght@400;500&display=swap"
        rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        /* general styling */
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        html,
        body {
            height: 100%;
            margin: 0;
        }

        body {
            align-items: center;
            background-color: #1a1a1a;
            display: flex;
            font-family: 'Raleway', sans-serif;
        }

        .container {
            color: #fff;
            margin: 0 auto;
            text-align: center;
            max-width: 620px;
            padding: 20px;
        }

        .logo {
            margin-bottom: 26px;
        }

        .logo img {
            width: 220px;
        }

        h1 {
            font-weight: normal;
            letter-spacing: .125rem;
            text-transform: uppercase;
            font-size: 20px;
        }

        li {
            display: inline-block;
            font-size: 14px;
            list-style-type: none;
            padding: 1.5em;
            text-transform: capitalize;
            line-height: 1;
            font-weight: 300;
            font-family: 'Roboto', sans-serif;
        }

        li span {
            display: block;
            font-size: 5.5rem;
            font-family: 'Bebas Neue', sans-serif;
        }
		.page-links {
		    max-width: 550px;
		    padding: 0 20px;
		}
		.page-links a {
		    color: #fff;
		    text-decoration: none;
		    margin: 0 6px;
		    font-weight: 300;
		    line-height: 1.5;
		}
		.page-links a:hover {
		    color: #aaa;
		}
        .message {
            font-size: 4rem;
        }

        #content {
            display: none;
            padding: 1rem;
        }

        .emoji {
            padding: 0 .25rem;
        }

        @media all and (max-width: 768px) {
            h1 {
                font-size: 1.5rem;
            }

            li {
                font-size: 1.125rem;
                padding: .75rem;
            }

            li span {
                font-size: 3.375rem;
            }
            h1 {
                margin-bottom: 0;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="logo">
            <img src="images/220px-Avatar_2_logo.jpg" alt="GTM logo">
        </div>
        <h1 id="headline">New Era will live in:</h1>
        <div id="countdown">
            <ul>
                <li><span id="days"></span>days</li>
                <li><span id="hours"></span>Hours</li>
                <li><span id="minutes"></span>Minutes</li>
                <li><span id="seconds"></span>Seconds</li>
            </ul>
        </div>
	<br>
	<hr>
	<br>
	<div class="page-links">
        <a href="user-agreement.html">User Agreement</a>
        <a href="aml-policy.html">AML Policy</a>
        <br>
        <br>
        For updates, Follow us at
        <br>
        <br>
        <a href="" target="_blank" class="fb"><i class="fab fa-facebook-f"></i></a>
        <a href="" target="_blank" class="ins"><i class="fab fa-instagram"></i></a>
        <a href="" target="_blank" class="yt"><i class="fab fa-youtube"></i></a>
        <a href="" target="_blank" class="tw"><i class="fab fa-twitter"></i></a>
        <a href="" target="_blank" class="pi"><i class="fab fa-pinterest"></i></a>
        <a href="" target="_blank" class="tm"><i class="fab fa-tumblr"></i></a>
    </div>
        
    </div>
    <script>
        (function () {
            const second = 1000,
                minute = second * 60,
                hour = minute * 60,
                day = hour * 24;

            let birthday = "Jan 31, 2022 20:00:00",
                countDown = new Date(birthday).getTime(),
                x = setInterval(function () {

                    let now = new Date().getTime(),
                        distance = countDown - now;

                    document.getElementById("days").innerText = Math.floor(distance / (day)),
                        document.getElementById("hours").innerText = Math.floor((distance % (day)) / (hour)),
                        document.getElementById("minutes").innerText = Math.floor((distance % (hour)) / (minute)),
                        document.getElementById("seconds").innerText = Math.floor((distance % (minute)) / second);

                    //do something later when date is reached
                    if (distance < 0) {
                        let headline = document.getElementById("headline"),
                            countdown = document.getElementById("countdown"),
                            content = document.getElementById("content");

                        headline.innerText = "It's my birthday!";
                        countdown.style.display = "none";
                        content.style.display = "block";

                        clearInterval(x);
                    }
                    //seconds
                }, 0)
        }());
    </script>
</body>

</html>