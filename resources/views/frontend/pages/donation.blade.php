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
  <h3 class="text-primary">Than you for choosing to touch childrens life .
    follow donate button below to proceed to donation methods.
  </h3>
<form action="https://www.paypal.com/donate" method="post" target="_top">
    <input type="hidden" name="hosted_button_id" value="LU7GDTJZH7NLG" />
    <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" title="PayPal - The safer, easier way to pay online!" alt="Donate with PayPal button" />
    <img alt="" border="0" src="https://www.paypal.com/en_KE/i/scr/pixel.gif" width="1" height="1" />
    </form>
    @include('frontend.includes.BecomeVolunteer')
@endsection
