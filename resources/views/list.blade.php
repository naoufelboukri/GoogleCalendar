@extends('layouts.app')

@section('content')
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Start</th>
                <th scope="col">End</th>
                <th scope="col">Description</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($events as $event)
                <tr>
                    <th scope="row">{{ $event->id }}</th>
                    <th>{{ $event->title }}</th>
                    <th>{{ $event->start }}</th>
                    <th>{{ $event->end }}</th>
                    <th>{{ $event->description }}</th>
                    <th>
                        <a href="{{ route("updateEvent" , $event->id) }}" class="btn btn-secondary">&#128393;</button>
                        <a href="{{ route("destroy" , $event->id) }}" class="btn btn-danger">🗑</button>
                    </th>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
