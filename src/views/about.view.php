<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    <title>About Me</title>
    <script src="https://cdn.tailwindcss.com?plugin=forms">
    </script>
    <script>
        function myLocation() {
            location = "/";
        }
    </script>
    <style>
        .questions {
            text-align: justify;
            padding-right: 20%;
            padding-left: 20%;
        }

        .starter {
            text-align: justify;
            padding-left: 20%;
            padding-right: 20%;
        }

        .center {
            padding-left: 37%;
        }

        .nav {
            font-size: 25px;
            font-weight: bold;
        }

        .logo {
            display: block;
            margin: 25px auto;
        }

        }
    </style>
</head>
<body>
<header>
    <nav class="nav h-12 bg-gray-600 text-white">
        <ul class="flex items-center justify-evenly h-full ">
            <li>ABOUT ME</li>
        </ul>
    </nav>
</header>
<a href="/"> <img class="logo" src='img/logo.png' alt=”Logo” height='120' width='120'></a>

<main id="catch">
    <div class="starter">
        <p>I'm David and I built One-Time Secret COPY as a way to share sensitive information that's both simple and
            secure. We help people to share their secrets. All the code is open-source and available on <a
                    href="https://github.com/jordanoskidavid" style="color: orangered " target="_blank">Github</a>.
            <br>
            <br>Happy sharing, <a href="https://www.linkedin.com/in/david-jordanoski-39047023a/"
                                  style="color: orangered" target="_blank"> David Jordanoski</a>
        </p>
    </div>
    <div class="questions">
        <p>
            <br>
            <b>Why would I use this?</b>
            When you send people passwords and private links via email or chat, there are copies of that information
            stored in many places. If you use a one-time link instead, the information persists for a single viewing
            which means it can't be read by someone else later. This allows you to send sensitive information in a safe
            way knowing it's seen by one person only. Think of it like a self-destructing message.
            <br>
            <b>Why can't I send pictures or other kinds of files?</b>
            The challenge with sending files, images in particular, is that there's no way to absolutely guarantee it
            wasn't copied or shared with other people. In order to ensure that no one's private information is
            unknowingly shared, we decided to err on the side of simplicity.
            <br>
            <b>But I can copy the secret text. What's the difference?</b>
            True but all you have is text. With images and other files types, they can contain metadata and other
            potentially revealing information about who is the sender or recipient. Again, this is simply to ensure that
            no
            private information is shared outside the intended recipient.
            <br>
            <b>Can I retrieve a secret that has already been shared?</b>
            Nope. We display it once and then delete it. After that it's gone forever.
            <br>
            <b>How long do you keep non-viewed secrets?</b>
            We keep secrets for up to 7 days for anonymous users. After that they are deleted automatically and gone
            forever. (Note: by the time you read a secret, it's already deleted from our servers.)
            <br>
            <b>What is the maximum message size?</b>
            The maximum size is 255 characters.
            <br>
            <b>Why should I trust you?</b>
            General we can't do anything with your information even if we wanted to (which we don't). If it's a password
            for example, we don't know the username or even the application that the credentials are for.

        </p>
    </div>
</main>

</body>
</html>