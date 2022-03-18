@extends('layouts.app')

@section('content')
    <h1>Nouvel event</h1>

    <form method="POST" action="{{ route('store') }}">
        @csrf
        <input type="text" name="title">
        <input type="datetime-local" name="start">
        <input type="datetime-local" name="end">
        <textarea name="description"></textarea>
        <input type="radio" name="all_day" value="1">
        <input type="radio" name="all_day" value="0">
        <button type="submit">Create</button>
    </form>
@endsection