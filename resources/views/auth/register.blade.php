@extends('layouts.app-without-nav')

@section('content')
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="h-screen flex flex-col px-6">
            <div class="flex flex-col flex-grow justify-center mx-auto max-w-sm w-full">
                <div class="text-brand-600 py-6 text-3xl mx-auto">{{ config('app.name') }}</div>
                <label class="block">
                    <div class="form-label">Name: @error('name')<br>{{ $message }}@enderror</div>
                    <input type="text" wire:model.lazy="name" name="name" id="name" autocomplete="" autocapitalize="off"
                           class="form-input block w-full @error('name') error @enderror"
                           placeholder="your name ..." />
                </label>

                <label class="block mt-4">
                    <div class="form-label">Email: @error('email')<br>{{ $message }}@enderror</div>
                    <input type="email" wire:model.lazy="email" name="email" id="email" autocomplete="email" autocapitalize="off"
                           class="form-input block w-full @error('email') error @enderror"
                           placeholder="your@email.com" />
                </label>
                <label class="block mt-4">
                    <div class="form-label">Password: @error('password')<br>{{ $message }}@enderror</div>
                    <input type="password" wire:model.lazy="password" name="password" id="password" autocomplete="new-password" autocapitalize="off"
                           class="form-input block w-full @error('password') error @enderror"
                           placeholder="" />
                </label>
                <label class="block mt-2">
                    <span class="form-label">Password Confirmation:</span>
                    <input type="password" wire:model.lazy="password" name="password_confirmation" id="password_confirmation" autocomplete="new-password" autocapitalize="off"
                           class="form-input block w-full @error('password_confirmation') error @enderror"
                           placeholder="" />
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
                    @if (Route::has('password.request') && Route::has('login'))<div class="ml-4">|</div>@endif
                    @if (Route::has('login'))
                        <a class="ml-4 text-gray-600" href="{{ route('login') }}">
                            {{ __('Already have an account?') }}
                        </a>
                    @endif
                </div>
            </div>

        </div>
    </form>
@endsection
