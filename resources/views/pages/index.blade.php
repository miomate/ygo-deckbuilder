@extends('layouts.app')

@section('content')
<h1>Welcome to YuGiOh deck builder</h1>
{{-- {{dd($allCards)}} --}}

<landing-page :cards="{{$allCards}}"> <!-- : = v-bind-->
    
</landing-page>
@endsection
