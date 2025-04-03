@extends("layout.app")

@section("content")
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
@endsection