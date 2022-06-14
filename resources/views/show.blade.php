<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Photo</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
        <h1 class="title">
            {{ $post->title }}
        </h1>
        
        <div class='content'>
            <div class='content_post'>
                <div class='post'>
                    <p class='group'>{{ $post->group }}</p>
                    <p class='name'>{{ $post->name }}</p>
                    <p class='type'>{{ $post->type}}</p>
                    <P class='name_photo'>{{ $post->name_photo}}</P>
                    <p class='body'>{{ $post->body}}</p>
                    <p class='photo'>{{ $post->photo}}</p>
                </div>
            </div>    
        </div>
        
        <form action="/posts/{{ $post->id }}" id="form_{{ $post->id }}" method="post" style="display:inline">
            @csrf
            @method('DELETE')
            <button type="submit">delete</button> 
        </form>
        
        <div class='footer'>
            <a href="/">戻る</a>
        </div>
        
        <script>
        function deletePost(e) {
            'use strict'
            if (confirm('削除すると復元できません。\n本当に削除しますか？'))　｛
                document.getElementById('form_delete').submit();
            }
        }
        </script>
    </body>
</html>
