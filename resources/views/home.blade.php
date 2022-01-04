@extends('layouts.app')

@section('content')
<div class="container mt-5 pt-5 pb-5 mb-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border-0">
                

                <div class="card-body mx-auto" style="font-size: 25px">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in as ').Auth::user()->role }}

                    @if(Auth::user()->role == 'helper')
                        <p>
                            
                        <a href="{{ url('helper/tickets') }}" class="button card-header mx-auto d-flex justify-content-center" style="width: 300px; text-align: center;" ><span>Available requests</span></a>
                        </p>
                    @else
                        <p>
                            
                            <a href="{{ url('my_tickets') }}" class="button card-header mx-auto d-flex justify-content-center" style="width: 300px; text-align: center;" ><span>My requests</span></a>

                        </p>
                        <p>
                            
                            <a href="{{ url('shopping') }}" class="button card-header mx-auto d-flex justify-content-center" style="width: 300px; text-align: center;" ><span>Shopping request</span></a>

                        </p>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
