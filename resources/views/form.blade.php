@extends('layouts.app')

@section('content')
    @if (isset($id))
        <h1>Update</h1>
        <form method="POST" action="{{ route('update', $id) }}">
        @else
            <h1>Create</h1>
            <form method="POST" action="{{ route('store') }}">
    @endif

    {{-- @csrf
        <input type="text" name="title">
        <input type="datetime-local" name="start">
        <input type="datetime-local" name="end">
        <textarea name="description"></textarea>
        <input type="radio" name="all_day" value="1">
        <input type="radio" name="all_day" value="0">
        <button type="submit">Create</button>
    </form> --}}

    @csrf
        <div class="form-group row">
            <label for="title" class="col-sm-2 col-form-label">Title</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="title" name="title" placeholder="Title">
            </div>
        </div>
        <div class="form-group row">
            <label for="start" class="col-sm-2 col-form-label">Start</label>
            <div class="col-sm-10">
                <input type="datetime-local" class="form-control" id="start" name="start">
            </div>
        </div>
        <div class="form-group row">
            <label for="end" class="col-sm-2 col-form-label">End</label>
            <div class="col-sm-10">
                <input type="datetime-local" class="form-control" id="end" name="end">
            </div>
        </div>
        <div class="form-group row">
            <label for="description" class="col-sm-2 col-form-label">Description</label>
            <div class="col-sm-10">
                <textarea class="form-control" id="description" rows="3" name="description"></textarea>
            </div>
        </div>
        <fieldset class="form-group">
            <div class="row">
                <legend class="col-form-label col-sm-2 pt-0">All day ?</legend>
                <div class="col-sm-10">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="all_day" id="true" value="1" checked>
                        <label class="form-check-label" for="true">
                            Yes
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="all_day" id="false" value="2">
                        <label class="form-check-label" for="gridRadios2">
                            No
                        </label>
                    </div>
                </div>
            </div>
        </fieldset>
        <div class="form-group row">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">
                    @if (isset($id))
                        Update
                    @else
                        Create
                    @endif
                </button>
            </div>
        </div>
    </form>
@endsection
