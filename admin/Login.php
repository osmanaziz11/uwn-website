<?php include_once "server/constants.php"  ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Boostrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <!-- Font Awsome  -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&display=swap" rel="stylesheet">
    <!-- Custom Css  -->
    <link rel="stylesheet" href="assects/css/login.css">
    <title>Admin Login</title>
</head>

<body>
    <div class="page">
        <div class="container">
            <div class="left">
                <div class="title">
                    <h1>UWN</h1>
                    <div class="eula">Urdu World News</div>
                    <h2>Admin Panel</h2>
                </div>

            </div>
            <div class="right">
                <svg viewBox="0 0 320 300">
                    <defs>
                        <linearGradient inkscape:collect="always" id="linearGradient" x1="13" y1="193.49992" x2="307"
                            y2="193.49992" gradientUnits="userSpaceOnUse">
                            <stop style="stop-color:#ff00ff;" offset="0" id="stop876" />
                            <stop style="stop-color:#ff0000;" offset="1" id="stop878" />
                        </linearGradient>
                    </defs>
                    <path
                        d="m 40,120.00016 239.99984,-3.2e-4 c 0,0 24.99263,0.79932 25.00016,35.00016 0.008,34.20084 -25.00016,35 -25.00016,35 h -239.99984 c 0,-0.0205 -25,4.01348 -25,38.5 0,34.48652 25,38.5 25,38.5 h 215 c 0,0 20,-0.99604 20,-25 0,-24.00396 -20,-25 -20,-25 h -190 c 0,0 -20,1.71033 -20,25 0,24.00396 20,25 20,25 h 168.57143" />
                </svg>

                <form action="" class="form">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" required autocomplete="off">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" required autocomplete="off">

                    <input type="submit" id="submit" value="Submit">
                    <h6 id="recover-btn">Forget Password?</h6>
                </form>

                <!-- Forget Password Container  -->
                <!-- <div class="forget-box">
                    <form action="" class="recovery-form">
                        <h6>Enter Your Username.</h6>
                        <input type="text" name="recUsername" id="recUsername" required>
                        <p class="text-center mt-2">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Expedita
                            perspiciatis ipsum, aliquid voluptatibus</p>

                        <button class="proceed-btn">
                            <h6>Proceed</h6>
                            <div class="loader-circle"></div>
                            <div class="check-icon"></div>
                        </button>
                        <i class="fas fa-arrow-left"></i>
                    </form>

                </div> -->
            </div>
        </div>
    </div>
    <!-- Imported Js Script  -->
    <script src="assects/Js/anime.min.js"></script>
    <script src="assects/Js/jquery.js"></script>

    <!-- Anime Custom Script  -->
    <script>
    //    Anime Animation 
    var current = null;
    document.querySelector('#username').addEventListener('focus', function(e) {
        if (current) current.pause();
        current = anime({
            targets: 'path',
            strokeDashoffset: {
                value: 0,
                duration: 700,
                easing: 'easeOutQuart'
            },
            strokeDasharray: {
                value: '240 1386',
                duration: 700,
                easing: 'easeOutQuart'
            }
        });
    });
    document.querySelector('#password').addEventListener('focus', function(e) {
        if (current) current.pause();
        current = anime({
            targets: 'path',
            strokeDashoffset: {
                value: -336,
                duration: 700,
                easing: 'easeOutQuart'
            },
            strokeDasharray: {
                value: '240 1386',
                duration: 700,
                easing: 'easeOutQuart'
            }
        });
    });
    document.querySelector('#submit').addEventListener('focus', function(e) {
        if (current) current.pause();
        current = anime({
            targets: 'path',
            strokeDashoffset: {
                value: -730,
                duration: 700,
                easing: 'easeOutQuart'
            },
            strokeDasharray: {
                value: '530 1386',
                duration: 700,
                easing: 'easeOutQuart'
            }
        });
    });
    </script>
    <!-- Funtion Script  -->
    <script>
    // Event Trigger: When Login Form Submit 
    $('form').submit(function(event) {
        event.preventDefault();
        const formData = new FormData(this); // Fetching Form Data
        var object = {};
        formData.forEach(function(value, key) {
            object[key] = value;
        });
        var json = JSON.stringify(object);
        fetch('server/api/login.php', {
                'method': 'post',
                'body': json,
            }).then(response => response.json())
            .then(res => {
                if (res.status == 1) {
                    sessionStorage.setItem("activeUser", res.record.email);
                    $('.right').removeClass('shadow');
                    $('.right').addClass('valid-error');
                    setTimeout(() => {
                        window.location.href = 'http://localhost:81/urduworldnews/admin/dashboard/';
                    }, 2000)
                } else {
                    $('.right').removeClass('shadow');
                    $('.right').addClass('invalid-error');
                    setTimeout(() => {
                        $('.right').addClass('shadow');
                        $('.right').removeClass('invalid-error');
                    }, 2000)
                }
            });
    });
    </script>
    <!-- iconify Script  -->
    <script src="https://code.iconify.design/2/2.0.3/iconify.min.js"></script>
</body>

</html>