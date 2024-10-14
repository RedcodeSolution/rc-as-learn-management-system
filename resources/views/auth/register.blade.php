<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <!-- Title -->
        <h2 style="font-size: 40px; font-weight: bold; color: #333; text-align: center; margin-bottom: 5px;">Sign Up</h2>
        <h3 style="font-size: 16px; color: #777; text-align: center; margin-bottom: 34px;">Welcome ! Start Your Journey</h3>

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="('Name')"></x-input-label>
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name"></x-text-input>
            <x-input-error :messages="$errors->get('name')" class="mt-2"></x-input-error>
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="('Email')"></x-input-label>
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username"></x-text-input>
            <x-input-error :messages="$errors->get('email')" class="mt-2"></x-input-error>
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="('Password')"></x-input-label>

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password"></x-text-input>

            <x-input-error :messages="$errors->get('password')" class="mt-2"></x-input-error>
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="('Confirm Password')"></x-input-label>

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password"></x-text-input>

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2"></x-input-error>
        </div>

        <!-- Sign up button -->
        <div class="flex items-center justify-center mt-4">
            <x-primary-button class="ms-4" style=" border-radius:70px; padding: 12px 24px; font-size: 14px; color: white; cursor: pointer;">
                {{ __('Sign Up') }}
            </x-primary-button>
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

        <!-- Sign In Link -->
        <div class="flex items-center justify-center mt-4">
            <p style="font-size: 14px; color: #777;">
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                    {{ __('Already have Account?') }}
                </a>
                <a href="{{ route('login') }}" style="color:#ff9999;font-weight: bold;padding-left: 5px;">Sign In</a></p>
        </div>


    </form>
</x-guest-layout>