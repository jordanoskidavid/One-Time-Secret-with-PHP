<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    <title>Share a secret - One Time</title>
    <script src="https://cdn.tailwindcss.com?plugin=forms">
    </script>
    <script>
        function cursor() {
            document.getElementsByTagName("textarea")[0].style.cursor = "not-allowed";
        }
        function myLocation() {
            location = "/";
        }
    </script>

    <style>
        .center {
            margin: 0;
            padding: 0;
        }

        .show {
            margin: 0;
            position: absolute;
            top: 28%;
            left: 50%;
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
        }

        .newsecret {
            margin: 0;
            position: absolute;
            top: 75%;
            left: 50.2%;
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
        }

        .nav {
            font-size: 25px;
            font-weight: bold;
        }


        .title {
            text-align: center;
            font-family: Arial, Helvetica, sans-serif;
            text-transform: uppercase;
            font-weight: bold;
            font-size: 40px;
            color: #484454;
            padding-top: 3%;
            cursor: not-allowed;
        }

        .logo {
            display: block;
            margin: 25px auto;
        }

        textarea {
            text-align: center;
            top: 50%;
        }
    </style>
</head>
<body>
<header>
    <nav class="nav h-12 bg-gray-600 text-white">
        <ul class="flex items-center justify-evenly h-full ">
            <li>THIS IS YOUR ONE TIME SECRET</li>
        </ul>
    </nav>
</header>
<a href="/"> <img class="logo" src='img/logo.png' alt=”Logo” height='120' width='120'></a>
<form id="myForm" method="post">
    <div class="show mt-6 flex items-center justify-end gap-x-6">
        <button onclick="showOrHide()" id="submit-btn" type="button" name="deldb" value="1"
                class="rounded-md bg-orange-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-orange-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
            VIEW OR HIDE YOUR SECRET
        </button>
    </div>
</form>


<main id="catch" style="display: none">
    <h1 class="title">Here is your secret message.</h1>

    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <form>
            <div class="space-y-12">
                <div class="border-b border-gray-900/10 pb-12">
                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <div class="col-span-full">

                            <div class="mt-2">
                                <label for="body"></label>
                                <p class="center"><textarea id="body" name="body" rows="3" readonly
                                                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 "><?php echo $secret_msg ?></textarea>
                                </p>
                            </div>
                        </div>

                    </div>
                </div>


            </div>


        </form>

    </div>
    <div class="newsecret mt-6 flex items-center justify-end gap-x-6">
        <button onclick="myLocation()"
                class="mns rounded-md bg-orange-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-orange-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
            Make a new secret
        </button>
    </div>
</main>
<script>
    function showOrHide() {
        let x = document.getElementById("catch");

        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
    }
</script>
</body>
</html>