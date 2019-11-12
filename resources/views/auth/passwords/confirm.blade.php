@extends('layouts.app-single-screen')

@section('content')
    <div class="h-screen flex items-center justify-center">
        <div class="max-w-sm">
            <div class="py-4">{{ __('Confirm Password') }}</div>
            <div class="">
                {{ __('Please confirm your password before continuing.') }}

                <form method="POST" action="{{ route('password.confirm') }}">
                    @csrf

                    <label class="block mt-4">
                        <div class="form-label">Confirm Password: @error('password')<br>{{ $message }}@enderror</div>
                        <input type="password" wire:model.lazy="password" name="password" id="password"
                               autocomplete="current-password" autocapitalize="off"
                               class="form-input block w-full @error('password') error @enderror"
                               placeholder=""/>
                    </label>

                    <div class="mt-4">

                        <button type="submit" class="btn brand w-full mt-6">
                            {{ __('Login') }}
                        </button>
                    </div>
                    <div class="mt-4 text-xs text-primary font-bold text-center ">
                        @if (Route::has('password.request'))
                            <a class="text-gray-600" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
