@extends('frontend.base')
@section('content')
@include('frontend.includes.banner')
<div class="alert alert-success">
    please visit later this page is  currently under maintainance.
</div>

<div class="text-primary">
    for more information contact us  <a href="{{ route('contact') }}"  rel="noopener noreferrer"></a> 
</div>

@endsection

