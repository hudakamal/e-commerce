@extends('layouts.menu')

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

                    {{ __('Lorem ipsum dolor sit amit,consectetur eiusmdd tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit

amit,consectetur eiusmdd tempor incididunt ut labore et dolore magna') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
