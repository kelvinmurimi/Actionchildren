@extends('frontend.base')

@section('content')
    @include('frontend.includes.banner')
    <style>
        .paypal-button {
            background-color: #4CAF50;
            /* Change background color */
            color: white;
            /* Change text color */
            border: none;
            /* Remove border */
            padding: 10px 20px;
            /* Add padding */
            text-align: center;
            /* Center text */
            text-decoration: none;
            /* Remove underline */
            display: inline-block;
            /* Make it inline */
            font-size: 16px;
            /* Change font size */
            margin: 4px 2px;
            /* Add margins */
            cursor: pointer;
            /* Change cursor */
            border-radius: 5px;
            /* Round corners */
        }

        .paypal-button:hover {
            background-color: #45a049;
            /* Change color on hover */
        }
    </style>
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
    <div class="container">
        <div class="row justify-content-center" style="margin-top: 50px;">
            <div class="col-auto">
                <h6 class="text-primary">Than you for choosing to touch childrens life .
                    follow donate button below to proceed to donation methods.
                </h6>
                <div>
                    <form action="https://www.paypal.com/donate" method="post" target="_top ">
                        <input type="hidden" name="hosted_button_id" value="LU7GDTJZH7NLG" />
                        <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif"
                            border="0" name="submit"  class="paypal-button"  title="PayPal - The safer, easier way to pay online!"
                            alt="Donate with PayPal button" />
                        <img alt="" border="0" src="https://www.paypal.com/en_KE/i/scr/pixel.gif" width="1"
                            height="1" />
                    </form>
                </div>
            </div>
        </div>
    </div>


    @include('frontend.includes.BecomeVolunteer')
@endsection
