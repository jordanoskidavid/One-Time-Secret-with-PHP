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
            text-transform: uppercase;
            font-weight: bold;
            font-size: 25px;
            color: #484454;
            padding-top: 15px;
        }
        .logo {
            display: block;
            padding-left: 0;
            margin: 25px auto;
        }

        .facts {
            font-size: 25px;
            font-family: Arial, Helvetica, sans-serif;
            font-weight: bold;
            text-align: center;
            color: #04bca4;
            margin-top: 1%;
            margin-bottom: 0.5%;

        }
    </style>
</head>
<body>
<header>
    <nav class="h-12 bg-gray-600 text-white">
        <ul class="flex items-center justify-evenly h-full">
            <li><a href="/about">About Me</a></li>
        </ul>
    </nav>
</header>

<a href="/"> <img class="logo" src='img/logo.png' alt=”Logo” height='120' width='120'></a>
<h1 class="title">Paste a password, secret message or private link below.</h1>
<main style="margin-bottom: 0">

    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8" style="padding-bottom: 0; margin-bottom: 0;">
        <form method="POST">
            <div class="space-y-12">
                <div class="border-b border-gray-900/10 pb-12">
                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <div class="col-span-full">

                            <div class="mt-2">

                                <label for="body" class=" block text-sm font-medium leading-6 text-gray-600">Keep
                                    sensitive info out of your email and chat logs.</label>
                                <textarea id="body" name="body" rows="3" style="padding-left: 4px; padding-right: 4px;"
                                          class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 "
                                          placeholder=" Secret content goes here"></textarea>
                                <span class="text-red-500"><?= $errors['body'] ?></span>

                                <div class="mt-6 flex items-center justify-end gap-x-6">
                                    <button type="submit" name="pressed" value="2" id="btn"
                                            class="rounded-md bg-gray-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-gray-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                                        Create random password
                                    </button>
                                    <button type="submit" name="pressed" value="1" id="#GFG_Button"
                                            class="rounded-md bg-gray-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-gray-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                                        Create a secret link
                                    </button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>


            </div>


        </form>

    </div>
    <div>
        <div class="facts"><p>FACTS ABOUT RANDOM NUMBERS</p></div>
        <div style="padding-left: 8.2%; padding-top: 1%; margin-bottom: 1%;">
            <label>
                <textarea style="resize: none; background-color: #1dd0a6; font-weight: bold; font-size:18px ;padding-left: 1px; margin-bottom: 1px; margin-left: 4%; margin-right: 3%; text-align: center; color: white" readonly rows="1" cols="120" class="rounded-md border-0 py-1.5 shadow-sm ring-2 ring-inset ring-gray-300 focus:ring-5 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 "><?php echo $number ?>-><?php echo $trivia ?></textarea>
            </label>
        </div>
    </div>

</main>

</body>
</html>