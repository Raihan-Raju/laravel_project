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

<body>
    <div class="row justify-content-center" top="100">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header text-center">
                    <h4>Registeration Form</h4>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <!-- Name -->
                        <div>
                            <label for="name">Name</label>
                            <input id="name" class="form-control" type="text" name="name"
                                value="{{ old('name') }}" required autofocus autocomplete="name" />

                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Email Address -->
                        <div class="form-group mt-4">
                            <label for="email">Email</label>
                            <input id="email" class="form-control" type="email" name="email"
                                value="{{ old('email') }}" required autocomplete="username" />

                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Password -->
                        <div class="form-group mt-4">
                            <label for="password">Password</label>

                            <input id="password" class="form-control" type="password" name="password" required
                                autocomplete="new-password" />

                            @error('password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Confirm Password -->
                        <div class="form-group mt-4">
                            <label for="password_confirmation">Confirm Password</label>

                            <input id="password_confirmation" class="form-control" type="password"
                                name="password_confirmation" required autocomplete="new-password" />

                            @error('password_confirmation')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group mt-4">
                            <a class="" href="{{ route('login') }}"> Already registered? </a>

                            <input type="submit" class="btn btn-primary" value="Submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
