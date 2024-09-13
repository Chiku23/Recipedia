@php
$strNavItemClass = "navitem block uppercase font-bold text-xl mx-2 relative p-2 group";
$strSpanClass = "absolute w-0 h-full group-hover:w-full bg-transparent group-hover:bg-blue-500 duration-300 ease-in-out top-0 left-0 z-0";
$strSpanClassRed = "absolute w-0 h-full group-hover:w-full bg-transparent group-hover:bg-red-500 duration-300 ease-in-out top-0 left-0 z-0";
@endphp

<header class="bg-slate-200">
    <div class="HeaderWrapper flex justify-between max-w-1140 mx-auto items-center min-h-24">
        <div class="HeaderLeft">
            <div class="Navbar flex w-full">
                <div class="NavItems flex flex-row">
                    <a href="/" class="{{$strNavItemClass}}">
                        <span class="z-10 relative">Home</span> 
                        <span class="{{$strSpanClass}}"></span></a>
                    <a href="{{Route('about')}}" class="{{$strNavItemClass}}">
                        <span class="z-10 relative">About</span> 
                        <span class="{{$strSpanClass}}"></span></a>
                    <a href="{{Route('recipes')}}" class="{{$strNavItemClass}}">
                        <span class="z-10 relative">Recipes</span>
                        <span class="{{$strSpanClass}}"></span></a>
                    <a href="{{Route('login')}}" class="{{$strNavItemClass}}">
                        <span class="z-10 relative">Login</span>  <span class="{{$strSpanClass}}"></span></a>
                    <a href="{{Route('register')}}" class="{{$strNavItemClass}}">
                        <span class="z-10 relative">Register</span>  
                        <span class="{{$strSpanClass}}"></span></a>
                    <a href="/" class="{{$strNavItemClass}}">
                        <span class="z-10 relative">Logout</span>  
                        <span class="{{$strSpanClassRed}}"></span></a>
                </div>
            </div>
        </div>
        <div class="HeaderRight">
            <div class="SiteTitle text-2xl font-bold">
                <a href="/">
                    <img src="{{asset("Recipedia.png")}}" alt="Recipedia" height="150px" width="150px">
                </a>
            </div>
        </div>
    </div>
</header>