@extends("layout.app")

@section('content')
@php
$strInputClass = "bg-transparent block w-full p-2 text-gray-900 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 transition duration-200 ease-in-out";
@endphp

<div class="registerWrapper !mt-12">
    <div class="registerMain flex">
        <div class="registerLeft w-1/2 text-6xl uppercase font-bold tracking-[3px] flex justify-center items-center">
        </div>
        <div class="registerRight w-1/2">
            <div class="registerFormWrapper p-4 rounded-lg max-w-420 mx-auto shadow-lg">
                <form action="{{Route('registerUser')}}" method="post" class="registerForm font-bold">
                    @csrf
                    <div class="FormTitle text-4xl uppercase border-b-2 border-gray pb-2 text-center">Register</div>
                    <div class="registerFormFields flex flex-col my-8 mx-4">
                        <label for="fullname" class="text-xl mb-2">Enter Your Name:</label>
                        <input type="text" name="fullname" id="fullname" class="{{$strInputClass}}"/>
                        @error('fullname')
                            <span class="text-red-500">{{$message}}</span>
                        @enderror
                        <label for="email" class="text-xl mb-2">Enter Your Email:</label>
                        <input type="text" name="email" id="email" class="{{$strInputClass}}"/>
                        @error('email')
                            <span class="text-red-500">{{$message}}</span>
                        @enderror
                        <label for="password" class="text-xl my-2">Enter Your Password:</label>
                        <input type="password" name="password" id="password" class="{{$strInputClass}}"/>
                        @error('password')
                            <span class="text-red-500">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="registerFormSubmit border-t-2 border-gray pt-8 text-white">
                        <button type="submit" class="registerBtn p-2 rounded bg-blue-2 hover:bg-green-2 uppercase text-xl w-full transition-all duration-300">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection