<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    <title>Share a secret - One Time</title>
    <script src="https://cdn.tailwindcss.com?plugin=forms"></script>
    <style>
        .title {
            text-align: center;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 25px;
            padding-top: 15px;
        }

        .textarea1 {
            text-align: center;
            justify-content: center;
            display: flex;
        }

        .logo {
            display: block;
            margin: 25px auto;
        }


    </style>

    <header>
        <nav class="h-12 bg-gray-600 text-white">
            <ul class="flex items-center justify-evenly h-full">
                <li><a href="/register">Sign Up</a></li>
                <li><a href="/login">Sign In</a></li>
                <li><a href="/about">About Me</a></li>
            </ul>
        </nav>
    </header>


</head>
<body>
<main>

    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <a href="/"> <img class="logo" src='img/logo.png' alt=”Logo” height='120' width='120'></a>
            <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Enter password to
                view the secret</h2>
        </div>

        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            <form class="space-y-6" method="POST">
                <div>
                    <div class="mt-2">
                        <input id="enteredpwd" name="enteredpwd" required
                               class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>
                <div>
                    <button type="submit" name="pressed" value="1"
                            class="flex w-full justify-center rounded-md bg-gray-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-gray-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                        Enter
                    </button>
                </div>
            </form>
        </div>
    </div>

</main>
</body>
</html>