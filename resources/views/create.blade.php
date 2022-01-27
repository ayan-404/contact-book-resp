<!DOCTYPE html <html lang="en">

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
    <title>Contacts</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap');

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

        .text-white {
            color: #fff;
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

    <div class="uk-card uk-card-body uk-light crud-app">
        <div class="uk-card-title">
            <h3 class="uk-card-title uk-text-muted">Add Contact</h3>
        </div>
        <div>
            <button class="uk-button uk-button-primary uk-text-bold"><a style="color:black;"
                    href="{{ url('/app/contacts') }}">
                    Back</a></button>
        </div>
        @if ($errors->any())
        <div class="uk-alert-danger" uk-alert>
            <a class="uk-alert-close" uk-close></a>
            <p>There were some problems with your input</p>
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <hr>

        <form action="{{ url('/app/contacts') }}" method="POST">
            {{ csrf_field() }}

            <fieldset class="uk-fieldset">
                <legend class="uk-legend">Please fill this form correctly to create a new contact</legend>
                <div class="uk-margin">
                    <input class="uk-input uk-form-width-large" type="text" placeholder="Contact Name"
                        name="contact_name" id="contact_name">
                </div>
                <div class="uk-margin">
                    <input class="uk-input uk-form-width-large" type="number" placeholder="Contact Number"
                        name="contact_number" id="contact_number">
                </div>
                <div class="uk-margin">
                    <input class="uk-input uk-form-width-large" type="text" placeholder="Contact Address"
                        name="contact_address" id="contact_address">
                </div>
                <div class="uk-margin uk-align-center">
                    <button type="submit" value="Save" class="uk-button uk-button-primary">Submit</button>
                </div>
            </fieldset>
        </form>
    </div>

</body>

</html>
