@extends('master')
@section('content')
    <div class="container">
        <h2>Answer Form</h2>
        <form action="{{ route('store.answer') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="email">Question:</label>
                <select name="question_id" class="form-select form-select-sm mt-3">
                    <option>Select your questions</option>
                    @if ($questions)
                        @foreach ($questions as $question)
                            <option value="{{ $question->id }}">{{ $question->questions }}</option>
                        @endforeach
                    @else
                        <option></option>
                    @endif
                </select>
            </div>
            <div class="form-group">
                <label for="email">Answer:</label>
                <input type="text" class="form-control" id="question" placeholder="Enter answer" name="answer">
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
        </form>
    </div>
@endsection
