@extends('layouts.app')
@section('title')
SIGN UP
@endsection
@section('content')
<div class="bg-night">
    <div class="container mx-auto grid grid-cols-1 sm:grid-cols-2 sm:py-9">
        <div class="hidden sm:block">
            <img src="{{asset('images/authbg.png')}}" alt="" class="w-full">
        </div>
        <div class="bg-gradient-to-tr from-mblue to-dblue flex justify-center items-center px-4 sm:px-20 py-9 sm:py-0">
            <form method="POST" action="{{ route('register') }}" id="signupform">
                @csrf
                @method('post')
                <h1 class="font-semibold text-white text-center text-4xl mb-7">SIGN UP</h1>
                <input type="text" class="w-full my-2.5 px-5 py-2.5 rounded-sm" name="firstname" id="firstname" placeholder="First Name">
                <input type="text" class="w-full my-2.5 px-5 py-2.5 rounded-sm" name="lastname" id="lastname" placeholder="Last Name">
                <input type="email" class="w-full my-2.5 px-5 py-2.5 rounded-sm" name="email" id="email" placeholder="Email Address">
                <input type="text" class="w-full my-2.5 px-5 py-2.5 rounded-sm" name="phone" id="phone" placeholder="Phone Number">
                <input type="text" class="w-full my-2.5 px-5 py-2.5 rounded-sm" name="nibnumber" id="nibnumber" placeholder="NIB Number">
                <input type="password" class="w-full my-2.5 px-5 py-2.5 rounded-sm" name="password" id="password" placeholder="Password">
                <input type="password" class="w-full my-2.5 px-5 py-2.5 rounded-sm" name="password_confirmation" id="password_confirmation" placeholder="Confirm Password">
                <input type="checkbox" class="hidden border-none bg-leaf checked:bg-leaf mr-2" name="acceptTerms" id="acceptTerms">
                <div class="">
                    <div class="">
                        <input type="checkbox" class=" bg-white checked:bg-blue mr-2" name="remember" id="remember">
                        <label for="acceptTerms" class="text-white"> Accept Terms & Conditions</label>
                    </div>
                </div>
                <div class="mt-6">
                    <input type="submit" class="inline py-2 px-5 bg-white text-blue mr-2 lg:mr-4 font-poppins font-semibold rounded-sm" value="Sign Up">
                </div>
                <div class="flex justify-center mt-6">
                    <p class="text-white ">Already have an account? <a href="{{route('login')}}" class="underline">Sign In.</a></p>
                </div>
            </form>
        </div>
        <div class=""></div>
    </div>
</div>
@endsection
@section('script')
<script>
    $('form#signupform').on('submit', function (e) {
        e.preventDefault();
    });

</script>
@endsection

