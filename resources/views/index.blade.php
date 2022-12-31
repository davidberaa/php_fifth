@extends('layouts.app')

@section('content')
    <h1>Admin Page</h1>

    <h2>Posts</h2>
    <ul>
        @foreach ($posts as $post)
            <li>{{ $post->title }} - <a href="#" class="delete-post" data-id="{{ $post->id }}">Delete</a></li>
        @endforeach
    </ul>

    <h2>Comments</h2>
    <ul>
        @foreach ($comments as $comment)
            <li>{{ $comment->content }} - <a href="#" class="delete-comment" data-id="{{ $comment->id }}">Delete</a></li>
        @endforeach
    </ul>
@endsection

@section('scripts')
    <script>
        $('.delete-post').click(function(e) {
            e.preventDefault();


            var postId = $(this).data('id');

            $.ajax({
                type: 'DELETE',
                url: '/posts/' + postId,
                success: function(result) {
                    $(e.target).closest('li').remove();
                }
            });
        });

        $('.delete-comment').click(function(e) {
            e.preventDefault();
            var commentId = $(this).data('id');

            $.ajax({
                type: 'DELETE',
                url: '/comments/' + commentId,
                success: function(result) {
                    $(e.target).closest('li').remove();
                }
            });
        });
    </script>
@endsection
