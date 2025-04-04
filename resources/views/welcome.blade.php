@extends("layout.app")

@section("content")
<div class="HomeWrapper flex flex-col w-full">
    @php 
        $userName = '';
        $user = session('user') ?? [];
        if($user){
            $userName = $user['name'] ?? '';
        }
    @endphp
    @if(!empty($userName))
    <div class="UserWelcome text-center">
        Hello👋 {{$userName}}.
    </div>
    @endif
    <div class="HomeContainer text-center">
        HomePage
    </div>
</div>
@endsection