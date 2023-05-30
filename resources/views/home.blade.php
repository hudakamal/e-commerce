@extends('layouts.menu')

@section('content')
<div class="container-fluid p-0 position-relative">
    <img src="{{ asset('image/home.png') }}" class="img-fluid w-100" alt="Background Image" style="height: 350px;">
    <div class="position-absolute top-50 start-50 translate-middle">
        <div class="text-left">
            <h2 style="color:#FF6666;margin-bottom: 10px;">Sales 20% Off</h2>
            <h2 style="color:#4C4C6D;font-weight: bold;margin-bottom: 20px;">On Everything</h2>
            <p style="line-height: 1.5;">Massive Markdowns: Don't Miss Our Biggest Sale of the Year</p>
        </div>
        <button class="btn" style="background-color: #FF6666;">Shop Now</button>
    </div>
</div>
@endsection
