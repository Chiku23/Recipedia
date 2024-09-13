@extends("layout.app")

@section("content")
    @php
        $arrUser = $user->toArray();
        $userName = $arrUser['name'];
    @endphp
    @if(!empty($userName))
    <div class="UserWelcome text-center">
        Hello👋 {{$userName}}.
    </div>
    @endif
    <div class="HomeContainer text-center">
        HomePage
    </div>
@endsection