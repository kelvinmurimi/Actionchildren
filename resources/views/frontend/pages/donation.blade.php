@extends('frontend.base')

@section('content')
    @include('frontend.includes.banner')

    @if (session('success'))
    <div class="container">
        <div class="row">
            <div class="col-">
                <div class="alert alert-success ">
                    <span>{{ session('success') }}</span>
                </div>
            </div>
        </div>
    </div>
@endif
    @include('frontend.includes.BecomeVolunteer')
@endsection
