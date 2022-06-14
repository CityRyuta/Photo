<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Photo</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class='header'>
            <hi>Photo</hi>
            <p class='btm1'>[<a href='/create'>登録</a>]</p>
            <p class='btm2'>Button2</p>
            <p class='login'>login</p>
            <p class='menu'>menu</p>
        </div>
        
        <div class='main'>
            <p class='search'>Search</p>
            <p class='grupe'>グループ</p>
            <p class='name'>名前</p>
            <p class='type'>種類</p>
            <P class='name_photo'>写真名</P>
            <div class='posts'>
                @foreach ($posts as $post)
                    <div class='post'>
                        <a href="/posts/{{ $post->id }}">
                            <p class='group'>{{ $post->group }}</p>
                            <p class='name'>{{ $post->name }}</p>
                            <p class='type'>{{ $post->type}}</p>
                            <P class='name_photo'>{{ $post->name_photo}}</P>
                            <p class='body'>{{ $post->body}}</p>
                            <p class='photo'>{{ $post->photo}}</p>
                        </a>
                    </div>
                @endforeach
            </div>    
        </div>
        
        <div class='main_left'>
            
        </div>
        
        <div class='footer'>
            
        </div>
        
        <div class='paginate'>
            {{ $posts->links() }}
        </div>
    </body>
</html>
