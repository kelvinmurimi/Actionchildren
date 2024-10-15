@extends('frontend.base')
@section('content')
    @include('frontend.includes.slider')
    @include('frontend.includes.SectionOne')
    @include('frontend.includes.Counter')

    @include('frontend.includes.DonateCard')
    @include('frontend.includes.BecomeVolunteer')

    @include('frontend.includes.HomeTeam')
    @include('frontend.includes.focusareas')
    @include('frontend.includes.Causes')
@endsection
