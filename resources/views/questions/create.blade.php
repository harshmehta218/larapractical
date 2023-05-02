@extends('master')
@section('content')
    <div class="container">
        <h2>Question Form</h2>
        <form action="{{ route('store.question') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="email">Question:</label>
                <input type="text" class="form-control" id="question" placeholder="Enter question" name="question">
            </div>

            <h4>Options</h4>
            <div>
                <div class="form-group">
                    <label for="email">OptionsA:</label>
                    <input type="text" class="form-control" id="question" placeholder="Enter option a" name="answer[]">
                </div>
                <div class="form-group">
                    <label for="email">OptionsB:</label>
                    <input type="text" class="form-control" id="question" placeholder="Enter option b" name="answer[]">
                </div>
                <div class="form-group">
                    <label for="email">OptionsC:</label>
                    <input type="text" class="form-control" id="question" placeholder="Enter option c" name="answer[]">
                </div>
                <div class="form-group">
                    <label for="email">OptionsD:</label>
                    <input type="text" class="form-control" id="question" placeholder="Enter option d" name="answer[]">
                </div>
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
        </form>
    </div>
@endsection
