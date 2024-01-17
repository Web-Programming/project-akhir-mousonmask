<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Catije- Sign Up</title>
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
</head>
<body>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="container">
            <div class="logo-container">
                <img src="{{ asset('images/logo.png') }}" alt="Catije Logo">
            </div>
            <div class="content-container">
                <div class="title">Sign Up</div>
                <div class="subtitle">
                    Already have an account? <span class="login-link"
                        onclick="window.location.href='{{ route('login') }}'">Log in</span>
                </div>

        <!-- Name -->
        <div class="input-container">
            <x-text-input id="name" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" placeholder="Username"/>
            @if ($errors->has('name'))
                                          <span class="error"> * {{ $errors->first('name') }}</span>
                                          @endif
        </div>

        <!-- Email Address -->
        <div class="input-container">
            <x-text-input id="email" type="email" name="email" :value="old('email')" required autocomplete="username" placeholder="Email Address"/>
            @if ($errors->has('email'))
                                          <span class="error">* {{ $errors->first('email') }}</span>
                                        @endif
        </div>

        <!-- Password -->
        <div class="input-container">
            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            placeholder="Password"
                            required autocomplete="new-password" />
                            <span class="password-icon" onclick="togglePassword('password')"></span>
                            @if ($errors->has('password'))
                                          <span class="error">* {{ $errors->first('password') }}</span>
                                        @endif
        </div>

        <!-- Confirm Password -->
        <div class="input-container">
            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation"
                            placeholder="Confirm Password"
                            required autocomplete="new-password" />
            <span class="password-icon" onclick="togglePassword('confirm_password')"></span>
            @if ($errors->has('password'))
                                          <span class="error">* {{ $errors->first('password_confirmation') }}</span>
                                        @endif
        </div>
           <div class="form-group mt-4 mb-0">
                                        <button class="btn btn-primary btn-block" type="submit">Daftar!</button>
                                    </div>
        </div>
        <div class="or">Or Sign Up with</div>
        <div class="social-buttons">
            <button class="social-button" onclick="window.location.href='{{ route('google') }}'">
                <img src="{{ asset('icons/google.png') }}" alt="Google Logo">
            </button>
            <button class="social-button" onclick="window.location.href='{{ route('phone') }}'">
                <img src="{{ asset('icons/phonee.png') }}" alt="Phone Logo">
            </button>
        </div>
    </div>

    <script>
        
        function navigateTo(page) {
            switch (page) {
                case 'google':
                    window.location.href = '{{ route('google') }}';
                    break;
                case 'phone':
                    window.location.href = '{{ route('phone') }}';
                    break;
            }
        }
    </script>
    </form>
</body>
</html>
