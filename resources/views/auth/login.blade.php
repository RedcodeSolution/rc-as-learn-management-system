<x-guest-layout>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}" class="max-w-md mx-auto p-10 bg-white ">
        @csrf
        <!-- Title -->
        <h2 style="font-size: 40px; font-weight: bold; color: #333; text-align: center; margin-bottom: 5px;">Login</h2>
        <h3 style="font-size: 16px; color: #777; text-align: center; margin-bottom: 34px;">Welcome Back! You Be Missed.</h3>

        <!-- Email Address -->
        <div style="margin-bottom: 16px">
            <x-input-label for="email" :value="('Email')" style="font-weight: bold; margin-bottom: 8px; font-size: 16px;"/>
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" placeholder="Email" style="padding: 12px; border: 1px solid #ccc; border-radius: 8px; font-size: 14px;"/>
            <x-input-error :messages="$errors->get('email')" class="mt-2" style="color: red; font-size: 12px;"/>
        </div>

        <!-- Password -->
        <div class="mt-4" style="margin-bottom: 16px">
            <x-input-label for="password" :value="('Password')" style="font-weight: bold; margin-bottom: 8px; font-size: 16px;"/>
            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password"
                            placeholder="Password"
                            style="padding: 12px; border: 1px solid #ccc; border-radius: 8px; font-size: 14px;"/>
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>


        <!-- Login Button -->
        <div class="flex items-center justify-center mt-6">
            <x-primary-button class="ms-3" style=" border-radius:70px; padding: 12px 24px; font-size: 16px; color: white; cursor: pointer;">
                {{ __('Login') }}
            </x-primary-button>
        </div>

        <!-- Forgot Password -->
        <div class="flex items-center justify-center mt-4">
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}" style="color: #007bff; ">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif
        </div>

        <!-- Divider
        <div style="display: flex; align-items: center; justify-content: center; margin-top: 30px;">
            <hr style="width: 100%; border: none; border-top: 1px solid #ddd; position: relative;" />
            <span style="position: absolute; background-color: white; padding: 0 10px; color: #777; font-size: 14px;">Or Continue With</span>
        </div>

         Google Login
        <div class="flex items-center justify-center mt-4 " style= "margin-top: 24px;">
            <a href="#" class="google-login-button" style="display: inline-flex; align-items: center; border: 1px solid #ddd; padding: 8px 24px; border-radius: 22px; font-size: 14px; color: #555; text-decoration: none;">
                <img src="{{ asset('images/google-icon.png') }}" alt="Google" style="width: 24px; height: 24px; margin-right: 8px;" /> Login with Google
            </a>
        </div> -->

        <!-- Sign Up Link -->
        <div class="flex items-center justify-center mt-4">
            <p style="font-size: 14px; color: #777;">Don't have an account?

            <a href="{{ route('register') }}" style="color:#ff9999;font-weight: bold;padding-left: 5px;">Sign up</a></p>
        </div>
    </form>
</x-guest-layout>