@extends('layouts.app-single-screen')

@section('content')
    <div class="flex flex-col flex-grow justify-center text-gray-700">
        <div class="px-6 max-w-sm w-full mx-auto">
            <div class=" py-6 text-xl text-brand-700">{{  __('Reset Password')  }}</div>

            @if (session('status'))
                <div class="p-4 mb-4 rounded text-sm" role="alert">
                    hello {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('password.email') }}">
                @csrf
                <div class="mb-2 text-sm">{{  __('Verify your email address')  }}</div>
                <label class="block">
                    <div class="form-label">Email: @error('email')<br>{{ $message }}@enderror</div>
                    <input type="email" wire:model.lazy="email" name="email" id="email" autocomplete="email" autocapitalize="off"
                           class="form-input block w-full @error('email') error @enderror"
                           placeholder="your@email.com" />
                </label>

                <div class="mt-2">

                    <button type="submit" class="btn brand w-full mt-6">
                        {{ __('Send Password Reset Link') }}
                    </button>
                </div>
            </form>
        </div>
    </div>

@endsection
