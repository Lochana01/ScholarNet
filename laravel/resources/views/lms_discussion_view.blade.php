@extends('layouts.lms_template')

@section('content')

<div class="container mb-5 mt-5">
    <h1>Discussions</h1>

    @foreach ($discussions as $discussion)
        <div class="card my-3">
            <div class="card-header">
                {{ $discussion->discussion_title }}
            </div>
            <div class="card-body">
                <h6 class="card-title">User: {{ $discussion->user_name }}</h6>
                <p class="card-text">{{ $discussion->discussion_content }}</p>
            </div>
            <div class="ms-3 mt-4">
                <h5 class="fw-bold">Comments</h5>
                @php
                    $comments = explode("\n", $discussion->discussion_comments);
                @endphp
                @foreach ($comments as $comment)
                    <p>{{ $comment }}</p>
                @endforeach
                <form method="POST" action="{{ route('discussion.comment', ['discussion' => $discussion]) }}">
                    @csrf
                    <div class="form-group">
                        <label for="new_comment">Add a Comment:</label>
                        <textarea class="form-control" id="new_comment" name="new_comment" rows="3" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary my-3">Submit Comment</button>
                </form>
            </div>
        </div>
    @endforeach
</div>


@endsection
