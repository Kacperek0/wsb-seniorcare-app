@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in as ').Auth::user()->role }}

                    @if(Auth::user()->role == 'helper')
                        <p>
                            See all <a href="{{ url('helper/tickets') }}">available requests</a>.
                        </p>
                    @else
                        <p>
                            See all your tickets <a href="{{ url('my_tickets') }}">tickets</a>.
                        </p>
                        <p>
                            Make shopping <a href="{{ url('shopping') }}">request</a>.
                        </p>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
