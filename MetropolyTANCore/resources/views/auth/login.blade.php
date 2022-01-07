@extends('app')

@section('content')
    <div class="w-full h-screen flex items-center justify-center bg-gray-800">
        <div class="bg-gray-200 w-96 h-auto rounded-lg pt-8 pb-8 px-8 flex flex-col items-center">
            <label class="font-light text-4xl mb-4">metropoly<span class="font-bold">TAN</span></label>
            <x-form method="POST" action="{{ route('login') }}"
                  class="shadow-lg w-80 p-4 flex flex-col bg-white rounded-lg">
                <x-email type="text" name="email"
                       class="w-full h-12 rounded-lg px-4 text-lg focus:ring-blue-600 mb-4 @error('email') is-invalid @enderror"
                       placeholder="Email" required="true"/>
                <x-error field="email" class="text-red-500">
                    <ul>
                        @foreach ($component->messages($errors) as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </x-error>
                <input type="password" name="password"
                       class="w-full h-12 rounded-lg px-4 text-lg focus:ring-blue-600 mb-4 @error('password') is-invalid @enderror"
                       placeholder="Password" required/>
                <x-error field="password" class="text-red-500">
                    <ul>
                        @foreach ($component->messages($errors) as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </x-error>
                <label class="w-full inline-flex items-center mb-3 pl-3">
                    <input type="checkbox"  name="remember" id="remember" class="form-checkbox h-5 w-5 text-blue-600" {{ old('remember') ? 'checked' : '' }}><span
                        class="ml-2 text-gray-700">Remember Me</span>
                </label>
{{--                @if($errors->any())--}}
{{--                    {!! implode('', $errors->all('<div>:message</div>')) !!}--}}
{{--                @endif--}}
                <button
                    class="w-full h-12 rounded-lg bg-blue-600 text-gray-200 uppercase font-semibold hover:bg-blue-700 text-gray-100 transition mb-4">
                    Login
                </button>
                @if (Route::has('password.request'))
                    <p class="text-right mb-4"><a href="{{ route('password.request') }}"
                                                  class="text-blue-400 text-center my-2">{{ __('Forgot Your Password?') }}</a>
                    </p>
                @endif
            </x-form>
            {{--            <label class="text-gray-800 mb-4">or</label>--}}
            {{--            <button class="w-full h-12 rounded-lg bg-red-600 text-gray-200 uppercase font-semibold hover:bg-red-700 text-gray-100 transition mb-4">Sign with Google</button>--}}
            {{--            <button class="w-full h-12 rounded-lg bg-blue-600 text-gray-200 uppercase font-semibold hover:bg-blue-700 text-gray-100 transition mb-4">Sign with Facebook</button>--}}
            {{--            <button class="w-full h-12 rounded-lg bg-gray-800 text-gray-200 uppercase font-semibold hover:bg-gray-900 text-gray-100 transition mb-4">Sign with Github</button>--}}
        </div>
    </div>
@endsection
