<!DOCTYPE html>
<html>
    <head>
        <title>私のプロフィール</title>
    </head>
    <body>
        <h1>私について</h1>
        <p>これは私のページです。</p>
        <p>私の名前は{{$name ?? "名無し"}}です。</p>
        <p>私の年齢は{{$age ?? "年齢未詳"}}です。</p>
        <button onclick="location.href='/favorites'">私の好きなものはこちらです</button>
    </body>
</html>