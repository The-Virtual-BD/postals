@extends('layouts.app')
@section('title')
Login
@endsection
@section('content')
<div class="bg-night">
    <div class="container mx-auto grid grid-cols-1 sm:grid-cols-2 sm:py-9">
        <div class="hidden sm:block">
            <img src="{{asset('images/authbg.png')}}" alt="" class="w-full">
        </div>
        <div class="bg-gradient-to-tr from-mblue to-dblue flex justify-center items-center px-4 sm:px-0 py-9 sm:py-0">
            <form method="POST" action="{{ route('login') }}" id="loginform">
                @csrf
                <h1 class="font-semibold text-white text-center text-4xl mb-7">LOGIN</h1>
                <input type="text" class="w-full my-2.5 px-5 py-2.5 rounded-sm" name="email" id="email" placeholder="Email Address">
                <input type="password" class="w-full my-2.5 px-5 py-2.5 rounded-sm" name="password" id="password" placeholder="Password">
                <div class="flex justify-between items-center">
                    <div class="">
                        <input type="checkbox" class=" bg-white checked:bg-blue mr-2" name="remember" id="remember">
                        <label for="remember" class="text-white">Remember me.</label>
                    </div>
                    <a href="" class="ml-auto text-white hover:text-leaf hover:underline block">Forget Password?</a>
                </div>
                <div class="mt-6">
                    <input type="submit" class="inline py-2 px-5 bg-white text-blue mr-2 lg:mr-4 font-poppins font-semibold rounded-sm" value="Login">
                </div>
                <div class="flex justify-center mt-6">
                    <p class="text-white ">Don’t have an account? <a href="{{route('register')}}" class="underline ">Register Now.</a></p>
                </div>
            </form>
        </div>
        <div class=""></div>
    </div>
</div>
@endsection
@section('script')
<script>
    $('form#loginform').on('submit', function (e) {
        e.preventDefault();
    });

</script>
@endsection
