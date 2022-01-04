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

                    {{ __('Hello HELPER, You are logged in!') }}
                </div>
                <div >
                        <a href="{{ route('help-requests') }}" class="button card-header mx-auto d-flex justify-content-center" style="width: 300px; text-align: center;" ><span>Help requests</span></a>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection
