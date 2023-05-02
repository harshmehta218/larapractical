@extends('master')
@section('content')
    <div class="container">
        <h2>Question Answer Table</h2>
        <p></p>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Questios</th>
                    <th>Options</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @if ($questions)
                    @foreach ($questions as $question)
                        <tr>
                            <td>{{ $question->questions }} ?</td>
                            @if ($question->answers != null)
                                @foreach ($question->answers as $answer)
                                @if (isset($answer->answer) || !empty($answer->answer) || $answer->answer != null)
                                    <td>{{ $answer->answer }}</td>
                                @else
                                <td>safdsafsdfasdf</td>
                                @endif

                                @endforeach
                            @else
                            <td>safdsafsdfasdf</td>
                            @endif
                            <td><a href={{ route('edit.questionanswer', $question->id)}}>Edit</a></td>
                            <td><a href={{ route('delete.questionanswer', $question->id)}}>Delete</a></td>
                        </tr>
                    @endforeach
                @endif

            </tbody>
        </table>
    </div>
@endsection
