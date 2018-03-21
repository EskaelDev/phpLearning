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


        <div><br/>
            Title: {{$card->title}}<br/>
            Created at: {{$card->created_at}}<br/>
            Updated at: {{$card->updated_at}}<br/>
            <br/>
            @foreach($card->notes as $note)
                ID: {{$note->id}}<br/>
                Card ID: {{$note->card_id}}<br/>
                Body: {{$note->body}}<br/>
                @endforeach
        </div>

    </div>
@endsection
