<x-guest-layout>
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gradient-to-br from-blue-50 to-indigo-100">
        <div class="w-full sm:max-w-md mt-6 px-6 py-8 bg-white shadow-lg overflow-hidden sm:rounded-lg">
            <div class="flex justify-center">
                <div class="w-20 h-20 rounded-full bg-indigo-100 flex items-center justify-center mb-6">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                </div>
            </div>

            <h1 class="text-center text-2xl font-bold text-gray-800 mb-8">Create your account</h1>

            <x-validation-errors class="mb-4" />

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="space-y-5">
                    <div>
                        <x-label for="name" value="{{ __('Name') }}" class="block text-sm font-medium text-gray-700" />
                        <div class="mt-1">
                            <x-input id="name" class="w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                        </div>
                    </div>

                    <div>
                        <x-label for="email" value="{{ __('Email') }}" class="block text-sm font-medium text-gray-700" />
                        <div class="mt-1">
                            <x-input id="email" class="w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" type="email" name="email" :value="old('email')" required autocomplete="username" />
                        </div>
                    </div>

                    <div>
                        <x-label for="password" value="{{ __('Password') }}" class="block text-sm font-medium text-gray-700" />
                        <div class="mt-1">
                            <x-input id="password" class="w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" type="password" name="password" required autocomplete="new-password" />
                        </div>
                    </div>

                    <div>
                        <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" class="block text-sm font-medium text-gray-700" />
                        <div class="mt-1">
                            <x-input id="password_confirmation" class="w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" type="password" name="password_confirmation" required autocomplete="new-password" />
                        </div>
                    </div>

                    @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                        <div class="flex items-start">
                            <div class="flex items-center h-5">
                                <x-checkbox name="terms" id="terms" required class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded" />
                            </div>
                            <div class="ml-3">
                                <label for="terms" class="font-medium text-sm text-gray-700">
                                    {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                            'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="text-indigo-600 hover:text-indigo-500">'.__('Terms of Service').'</a>',
                                            'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="text-indigo-600 hover:text-indigo-500">'.__('Privacy Policy').'</a>',
                                    ]) !!}
                                </label>
                            </div>
                        </div>
                    @endif

                    <div>
                        <x-button class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            {{ __('Register') }}
                        </x-button>
                    </div>
                </div>
            </form>

            <div class="mt-6 text-center">
                <p class="text-sm text-gray-600">
                    {{ __('Already have an account?') }}
                    <a href="{{ route('login') }}" class="font-medium text-indigo-600 hover:text-indigo-500">
                        {{ __('Sign in') }}
                    </a>
                </p>
            </div>
        </div>
    </div>
</x-guest-layout>
