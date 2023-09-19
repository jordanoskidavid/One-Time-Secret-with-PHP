<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    <title>Share a secret - One Time</title>
    <script src="https://cdn.tailwindcss.com?plugin=forms"></script>
    <script>
        function copyEvent() {
            let value = document.getElementById('copy');
            let content = document.getElementById('copy').textContent;
            window.getSelection().selectAllChildren(value);
            let clipboard = navigator.clipboard;

            if (clipboard === undefined) {
                document.execCommand("copy");
            } else {
                navigator.clipboard.writeText(content);
            }
        }
    </script>

    <style>
        .nav {
            font-size: 25px;
            font-weight: bold;
        }

        form .button-84 {
            position: absolute;
            top: 82%;
            left: 44.5%;
            align-items: center;
            background-color: initial;
            background-image: linear-gradient(#464d55, #25292e);
            border-radius: 8px;
            border-width: 0;
            box-shadow: 0 10px 20px rgba(0, 0, 0, .1), 0 3px 6px rgba(0, 0, 0, .05);
            box-sizing: border-box;
            color: #fff;
            cursor: pointer;
            display: inline-flex;
            flex-direction: column;
            font-family: expo-brand-demi, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            font-size: 18px;
            height: 50px;
            justify-content: center;
            line-height: 1;
            margin: 0;
            outline: none;
            overflow: hidden;
            padding: 0 32px;
            text-align: center;
            text-decoration: none;
            transform: translate3d(0, 0, 0);
            transition: all 150ms;
            vertical-align: baseline;
            white-space: nowrap;
            user-select: none;
            -webkit-user-select: none;
            touch-action: manipulation;
        }

        .button-84:hover {
            box-shadow: rgba(5, 5, 10, 7) 0 2px 8px;
            opacity: .85;
        }

        .button-84:active {
            outline: 0;
        }

        .button-84:focus {
            box-shadow: rgba(0, 0, 0, .5) 0 0 0 3px;
        }

        @media (max-width: 420px) {
            .button-84 {
                height: 48px;
            }
        }

        .button-77 {
            align-items: center;
            appearance: none;

            background-clip: padding-box;
            background-color: initial;
            background-image: none;
            border-style: none;
            box-sizing: border-box;
            color: #fff;
            cursor: pointer;
            display: inline-block;
            flex-direction: row;
            flex-shrink: 0;
            font-family: Eina01, sans-serif;
            font-size: 16px;
            font-weight: 800;
            justify-content: center;
            line-height: 24px;
            margin: 0;
            min-height: 64px;
            outline: none;
            overflow: visible;
            padding: 19px 26px;
            pointer-events: auto;
            position: relative;
            text-align: center;
            text-decoration: none;
            text-transform: none;
            user-select: none;
            -webkit-user-select: none;
            touch-action: manipulation;
            vertical-align: middle;
            width: auto;
            word-break: keep-all;
            z-index: 0;
            left: 45.21%;
            top: 24px;
        }

        @media (min-width: 768px) {
            .button-77 {
                padding: 19px 32px;
            }
        }

        .button-77:before,
        .button-77:after {
            border-radius: 80px;
        }

        .rectangle {
            height: 50px;
            width: 969px;
            top: 55%;
            margin-left: 19.8%;
            margin-top: 0.5%;
            background-color: #484454;
        }

        .button-77:before {
            background-color: rgba(249, 58, 19, .32);
            content: "";
            display: block;
            height: 100%;
            left: 0;
            overflow: hidden;
            position: absolute;
            top: 0;
            width: 100%;
            z-index: -2;
        }

        .button-77:after {
            background-color: initial;
            background-image: linear-gradient(92.83deg, #ff7426 0, #f93a13 100%);
            bottom: 4px;
            content: "";
            display: block;
            left: 4px;
            overflow: hidden;
            position: absolute;
            right: 4px;
            top: 4px;
            transition: all 100ms ease-out;
            z-index: -1;
        }

        .button-77:hover:not(:disabled):after {
            bottom: 0;
            left: 0;
            right: 0;
            top: 0;
            transition-timing-function: ease-in;
        }
        .button-77:active:not(:disabled) {
            color: #ccc;
        }

        .button-77:active:not(:disabled):after {
            background-image: linear-gradient(0deg, rgba(0, 0, 0, .2), rgba(0, 0, 0, .2)), linear-gradient(92.83deg, #ff7426 0, #f93a13 100%);
            bottom: 4px;
            left: 4px;
            right: 4px;
            top: 4px;
        }

        .button-77:disabled {
            cursor: default;
            opacity: .24;
        }

        .arrow {
            border: solid #f05c0c;
            border-width: 0 10px 10px 0;
            display: inline-block;
            padding: 3px;
            position: absolute;
            right: 48.3%;
            height: 50px;
            width: 50px;
        }

        .down {
            transform: rotate(45deg);
            -webkit-transform: rotate(45deg);
        }

        .scrmsg {
            position: relative;
            top: 55px;
            text-align: center;
            font-size: 29px;
            font-weight: bold;
            padding: 0;
            color: white;
        }

        .title {
            text-align: center;
            font-family: Arial, Helvetica, sans-serif;
            text-transform: uppercase;
            color: #484454;
            font-weight: bold;
            font-size: 40px;
            padding-top: 15px;
        }

        .logo {
            display: block;
            margin: 25px auto;
        }
    </style>


</head>
<body>
<nav class="nav h-12 bg-gray-600 text-white">
    <ul class="flex items-center justify-evenly h-full ">
        <li>THIS IS YOUR ONE TIME SECRET</li>
    </ul>
</nav>
<a href="/"> <img class="logo" src='img/logo.png' alt=”Logo” height='120' width='120'></a>

<h1 class="title">Here is your one time link.</h1>
<div><p>`<i class="arrow down"></i></p></div>
<div><p>`<i class="arrow down"></i></p></div>
<div><p>`<i class="arrow down"></i></p></div>
<main>

    <p class="scrmsg" id="copy">http://localhost/secret?id=<?php echo $privatelink ?></p>
    <p class="rectangle"></p>
    <button type="button" role="button" class="button-77" onclick="copyEvent('copy')">COPY LINK</button>
    <form method="POST">
        <button class="button-84" type="submit" name="pressed" value="1">Burn this secret</button>
    </form>


</main>

</body>
</html>