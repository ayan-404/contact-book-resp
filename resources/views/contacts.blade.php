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
            min-height: 100vh;
            height: auto;
            max-height: 10000vh;
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
            <h3 class="uk-card-title uk-text-muted">Contacts</h3>
        </div>
        <div>
            <button class="uk-button uk-button-primary uk-text-bold"><a style="color:black;"
                    href="{{ url('/app/contacts/create') }}">Add
                    Contact</a></button>
        </div>
        @if ($message = Session::get('success'))
        <div class="uk-alert-danger" uk-alert>
            <a class="uk-alert-close" uk-close></a>
            <p>{{ $message }}</p>
        </div>
        @endif

        <table class="uk-table uk-table-divider">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Contact Name</th>
                    <th>Contact Num.</th>
                    <th>Contact Adrs</th>
                    <th width="280px">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($contacts as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->contact_name }}</td>
                    <td>{{ $item->contact_number }}</td>
                    <td>{{ $item->contact_address }}</td>
                    <td width="280px">
                        <a class="uk-button uk-button-primary" href="{{ url('/app/contacts/' . $item->id) }}">Show</a>
                        <a class="uk-button uk-button-primary"
                            href="{{ url('/app/contacts/' . $item->id . '/edit') }}">Edit</a>
                        <form action="{{ url('/app/contacts' . '/'  . $item->id) }}" method="POST"
                            accept-charset="UTF-8">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button class="uk-button uk-button-danger uk-text-bold uk-margin-small-top">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>

</html>
