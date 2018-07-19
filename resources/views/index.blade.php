@extends('layout.master')

@section('content')

    <div class="col-sm-8 user-main">
        @foreach ($users as $user)
            @include('users.userId')
        @endforeach

    </div>
    
@endsection