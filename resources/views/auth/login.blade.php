@extends('layouts.app-without-nav')

@section('content')
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="h-screen flex flex-col px-6">
            <div class="flex flex-col flex-grow justify-center mx-auto max-w-sm w-full">
                <div class="text-brand-600 py-6 text-3xl mx-auto">{{ config('app.name') }}</div>
                <label class="block">
                    <div class="form-label">Email: @error('email')<br>{{ $message }}@enderror</div>
                    <input type="email" wire:model.lazy="email" name="email" id="email" autocomplete="email" autocapitalize="off"
                           class="form-input block w-full @error('email') error @enderror"
                           placeholder="your@email.com" />
                </label>
                <label class="block mt-4">
                    <div class="form-label">Password: @error('password')<br>{{ $message }}@enderror</div>
                    <input type="password" wire:model.lazy="password" name="password" id="password" autocomplete="current-password" autocapitalize="off"
                           class="form-input block w-full @error('password') error @enderror"
                           placeholder="" />
                </label>
                <label class="inline-flex items-center mt-6">
                    <input type="checkbox" wire:model.lazy="" name="remember" id="remember" class="form-checkbox" value="1" @selected(1,1)>
                    <span class="ml-2 form-label">Remember Me</span>
                </label>

                <div class="mt-8">

                    <button type="submit" class="btn brand w-full mt-6">
                        {{ __('Login') }}
                    </button>
                </div>
                <div class="mt-4 text-xs text-primary font-bold flex mx-auto">
                    @if (Route::has('password.request'))
                        <a class="text-gray-600" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
                    @if (Route::has('password.request') && Route::has('register'))<div class="ml-4">|</div>@endif
                    @if (Route::has('register'))
                        <a class="ml-4 text-gray-600" href="{{ route('register') }}">
                            {{ __('Don\'t have an account?') }}
                        </a>
                    @endif
                </div>
            </div>

        </div>
    </form>
@endsection
