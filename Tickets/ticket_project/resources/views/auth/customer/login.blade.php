<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>

</head>

<body class="">
    <div class="">

    </div>
    <div class="row justify-content-center" top="100">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header text-center">
                    <h4>Login Form</h4>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('customer.login') }}" enctype="multipart/form-data">
                        @csrf

                        <!-- Email Address -->
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input id="email" class="form-control" type="email" name="email"
                                value="{{ old('email') }}" required autofocus autocomplete="username" />
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group mt-3">
                            <label for="password">Password</label>

                            <input id="password" class="form-control" type="password" name="password" required
                                autocomplete="current-password" />

                            @error('password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group mt-3">
                            <input type="submit" value="Login">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
