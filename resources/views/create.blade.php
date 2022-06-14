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
        <h1>photo</h1>
        <form action="/posts" method="POST">
            {{ csrf_field() }}
            
            <div class="grupe">
                <h2>グループ名</h2>
                <input type='text' name="post[group]" placeholder="グループ名"/>
                <p class="group__error" style="color:red">{{ $errors->first('post.group') }}</p>
            </div>
            
            <div class="name">
                <h2>メンバー名</h2>
                <input type="text" name="post[name]" placeholder="メンバー名"/>
                <p class="name__error" style="color:red">{{ $errors->first('post.name') }}</p>
            </div>
            
            <div class="type">
                <h2>種類</h2>
                <input type="text" name="post[type]" placeholder="2011.Febrary"/>
                <p class="type__error" style="color:red">{{ $errors->first('post.type') }}</p>
            </div>
            
            <div class="name_photo">
                <h2>写真名</h2>
                <input type="text" name="post[name_photo]" placeholder="ジャージ"/>
                <p class="name_photo__error" style="color:red">{{ $errors->first('post.name_photo') }}</p>
            </div>
            
            <div class="body">
                <h2>メモ</h2>
                <textarea name="post[body]" placeholder="メモ"></textarea>
            </div>
            
            <div class="photo">
                <h2>画像</h2>
                
            </div>
            
            <input type="submit" value="登録"/>
        </form>
        
        <div class='footer'>
            <a href="/">戻る</a>
        </div>
    </body>
</html>
