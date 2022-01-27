<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.9.4/dist/css/uikit.min.css" />

    <!-- UIkit JS -->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.9.4/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.9.4/dist/js/uikit-icons.min.js"></script>

    <!-- Include Title in main thing -->
    <title>Contacts Book</title>

    <style>
        @import  url('https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap');

        body {
            background: #2d2d30;
            height: 100vh;
            font-family: 'Poppins', sans-serif;
        }

        .center {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
        .welcome {
            background: #2d2d30;
        }
    </style>
</head>

<body>
    <nav class="uk-navbar-container uk-navbar-transparent" uk-navbar>
        <div class="uk-navbar-left">
            <ul class="uk-navbar-nav">
                <li><a href="/app">Home</a></li>
                <li><a href="/app/contacts">Contacts</a></li>
            </ul>
        </div>
    </nav>
        <div class="center welcome uk-text-uppercase uk-text-large">
            Welcome
        </div>
</body>

</html><?php /**PATH /var/www/html/laravelworkspace/contacts-book/resources/views/index.blade.php ENDPATH**/ ?>