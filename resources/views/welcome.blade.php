@extends("layout.app")

@section("content")
    <div class="HomeContainer text-center">
        <div class="loginWrapper !mt-12">
            <div class="loginMain flex">
                <div class="loginLeft w-1/2 text-6xl uppercase font-bold tracking-[3px] flex justify-center items-center">
                </div>
                <div class="loginRight w-1/2">
                    <div class="loginFormWrapper p-4 border border-gray rounded-lg max-w-420 mx-auto bg-slate-200">
                        <form action="" method="post" class="loginForm font-bold">
                            @csrf
                            <div class="FormTitle text-4xl uppercase border-b-2 border-gray pb-2 text-center">Login</div>
                            <div class="loginFormFields flex flex-col my-8 mx-4">
                                <label for="username" class="text-xl mb-2">Enter Your Username:</label>
                                <input type="text" name="username" id="username" class="bg-transparent block w-full p-2 text-gray-900 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 transition duration-200 ease-in-out"/>
                                <label for="password" class="text-xl my-2">Enter Your Password:</label>
                                <input type="password" name="password" id="password" class="bg-transparent block w-full p-2 text-gray-900 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 transition duration-200 ease-in-out"/>
                            </div>
                            <div class="loginFormSubmit border-t-2 border-gray pt-8 text-white">
                                <button type="submit" class="LoginBtn p-2 rounded bg-blue-2 hover:bg-green-2 uppercase text-xl w-full transition-all duration-300">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection