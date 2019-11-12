@extends('layouts.app-with-nav-single-screen')

@section('content')
    <div class="flex flex-col flex-grow justify-center">
        <div class="px-6 max-w-sm w-full mx-auto">
            <div class="text-white py-6 text-xl">{{  __('Reset Password')  }}</div>
            <div class="text-white shadow-lg px-6 py-6 bg-white-transparent-1 text-sm rounded">

                @if (session('status'))
                    <div class="bg-white-transparent-2 p-4 mb-4 rounded text-xs" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('password.update') }}">
                    @csrf

                    <label class="block">
                        <div class="form-label">Email: @error('email')<br>{{ $message }}@enderror</div>
                        <input type="email" wire:model.lazy="email" name="email" id="email" autocomplete="email" autocapitalize="off"
                               class="form-input block w-full @error('email') error @enderror"
                               placeholder="your@email.com" />
                    </label>

                    <label class="block">
                        <div class="form-label">Password: @error('password')<br>{{ $message }}@enderror</div>
                        <input type="password" wire:model.lazy="password" name="password" id="password" autocomplete="new-password" autocapitalize="off"
                               class="form-input block w-full @error('password') error @enderror"
                               placeholder="" />
                    </label>
                    <label class="block">
                        <span class="form-label">Password Confirmation:</span>
                        <input type="password" wire:model.lazy="password" name="password_confirmation" id="password_confirmation" autocomplete="new-password" autocapitalize="off"
                               class="form-input block w-full @error('password_confirmation') error @enderror"
                               placeholder="" />
                    </label>

                    <div class="mt-8">
                        <button type="submit" class="btn brand w-full mt-6">
                            {{ __('Reset Password') }}
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
