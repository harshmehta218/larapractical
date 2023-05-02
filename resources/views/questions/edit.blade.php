@extends('master')
@section('content')
    <div class="container">
        <h2>Question Form</h2>
        <form action="{{ route('update.questionanswer', $question->id) }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="email">Question:</label>
                <input type="text" class="form-control" id="question" placeholder="Enter question"
                    value="{{ $question->questions }}" name="question">
            </div>

            <h4>Options</h4>
            @if ($question->answers)
                <div>
                    <div class="form-group">
                        <label for="email">OptionsA:</label>
                        <input type="text" class="form-control" id="question" placeholder="Enter option a"
                            @if (isset($question->answers[0]) || $question->answers[0] != null) value="{{ $question->answers[0]->answer }}"@else value="" @endif
                            name="answer[]">

                    </div>
                    <div class="form-group">
                        <label for="email">OptionsB:</label>

                        <input type="text" class="form-control" id="question" placeholder="Enter option a"
                            @if (isset($question->answers[1]) || $question->answers[1] != null) value="{{ $question->answers[1]->answer }}"@else value="" @endif
                            name="answer[]">

                    </div>
                    <div class="form-group">
                        <label for="email">OptionsC:</label>
                        <input type="text" class="form-control" id="question" placeholder="Enter option a"
                            @if (isset($question->answers[2]) || $question->answers[2] != null) value="{{ $question->answers[2]->answer }}" @else value="" @endif
                            name="answer[]">
                    </div>
                    <div class="form-group">
                        <label for="email">OptionsD:</label>

                        <input type="text" class="form-control" id="question" placeholder="Enter option a"
                            @if ($question->answers[3] || $question->answers[2] != null) value="{{ $question->answers[3]->answer }}" @else value="" @endif
                            name="answer[]">
                    </div>
                </div>
            @endif
            <button type="submit" class="btn btn-default">Submit</button>
        </form>
    </div>
@endsection
