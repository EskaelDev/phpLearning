@extends('layouts.master')
@section('content')

    <div class="content">
        <div class="title m-b-md">
            <h1>All Cards</h1>

            {{--@foreach($people as $person)--}}
            {{--<li>{{$person}}</li>--}}
            {{--@endforeach--}}
        </div>
        {{--{{$content}}--}}
        @foreach($cards as $card)
            <div>
                {{$card->title}}
            </div>
        @endforeach


    </div>
@endsection
