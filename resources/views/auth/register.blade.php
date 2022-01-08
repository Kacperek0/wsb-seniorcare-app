@extends('layouts.app')

@section('content')
<div class="container mt-5 pt-5 pb-5 mb-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="login card">
                <div class="login_head card-header mx-auto border-0">{{ __('Welcome to Seniorcare') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">

                            <div class="col-md-6 mx-auto">
                                <input placeholder="Your name" id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">

                            <div class="col-md-6 mx-auto">
                                <input placeholder="Your email" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">

                            <div class="col-md-6 mx-auto">
                                <input placeholder="Here is place for your password" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">

                            <div class="col-md-6 mx-auto">
                                <input placeholder="Your password once again" id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mx-auto">
                            <label for="role" class="col-md-6 col-form-label text-md-right" style="color: white;">{{ __('Choose your role') }}</label>

                            <div class="col-3 mx-left">
                                <select name="role" id="role" style="width: 100px; height: 40px;">
                                    <option value="helper">Helper</option>
                                    <option value="senior">Senior</option>
                                </select>

                                @error('role')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mx-auto float-center">
                            <div class="col-md-6  mx-auto">
                                <button type="submit" class=" button_log btn btn-primary">
                                  <span>  {{ __('Register') }}</span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
