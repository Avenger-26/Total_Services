{{-- <x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout> --}}

<x-guest-layout>
    <!DOCTYPE html>
    <html>

    <head>
        <title>Registration Page</title>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
        <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/a81368914c.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>

    <body>
        <!-- ========== Background Image ======= -->
        <img class="wave-rp" src="{{ asset('assets\img\loginpage\img\wave_2.png') }}">
        <!-- ========== Background Image ======= -->
        <!-- ================================== Main Container ===================================== -->
        <div class="container-lp">
            <!-- ============================== Login Content ===================================== -->
            <div class="login-content-rp">
                {{-- <x-jet-validation-errors class="mb-4" /> --}}
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <img src="{{ asset('assets\img\loginpage\img\register.png') }}"
                        style="filter: drop-shadow(0px 0px 3px black)">
                    <h2 class="title">Registration</h2>
                    <x-jet-validation-errors />
                    <div class="input-div one">
                        <div class="i-lp">
                            <i class="fas fa-user"></i>
                        </div>
                        <div class="div">
                            <h5>Username</h5>
                            <input id="name" type="text" name="name" :value="old('name')" required=""
                                autocomplete="name" class="input">
                        </div>
                    </div>

                    <div class="input-div one">
                        <div class="i-lp">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="div">
                            <h5>Email ID</h5>
                            <input id="email" type="email" name="email" :value="old('email')" required=""
                                class="input">
                        </div>
                    </div>

                    <div class="input-div one">
                        <div class="i-lp">
                            <i class="fas fa-lock"></i>
                        </div>
                        <div class="div">
                            <h5>Password</h5>
                            <input id="password" type="password" name="password" required="" autocomplete="new-password"
                                class="input">
                        </div>
                    </div>
                    <div class="input-div one">
                        <div class="i-lp">
                            <i class="fas fa-user-lock"></i>
                        </div>
                        <div class="div">
                            <h5>Confirm-Password</h5>
                            <input id="password_confirmation" type="password" name="password_confirmation" required
                                autocomplete="new-password" class="input">
                        </div>
                    </div>
                    <div class="input-div">
                        <div class="i-lp">
                            <i class="fas fa-users"></i>
                        </div>
                        <div class="select">
                            <select name="registeras" id="registeras">
                                <option value=" " selected disabled>Register As</option>
                                <option value="CST">Customer</option>
                                <option value="SPV">Service Provider</option>
                            </select>
                        </div>
                    </div>
                    <div>
                        <button type="submit" class="btn-lp">Register</button>
                    </div>
                    <div class="">
                        <!-- ================== Redirect on Login page =========================  -->
                        <div class="span-r">
                            <a class="" href="{{ route('login') }}">Already a member? Login Now !</a>
                        </div><br>
                        <span class="span-r">
                            <a href="/">Back to Home</a>
                        </span>
                        <!-- ================== Redirect on Login page =========================  -->
                    </div>
                </form>

            </div>
            <!-- =================================== Login Content  =============================== -->
            <div class="img-rp">
                <img src="{{ asset('assets\img\loginpage\img\rp-2.svg') }}">
            </div>
        </div>
        <!-- ================================ Login Container ====================================== -->
        <!-- ================== Script of page =========================== -->
        <script type="text/javascript" src="{{ asset('assets\js\login\main.js') }}"></script>
        <!-- ================== Script of page =========================== -->
    </body>

    </html>
</x-guest-layout>
