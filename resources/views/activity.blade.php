<x-header>
    <head>
        <title>最近のアクティビティ</title>
    </head>
    <body>
        <h1>私について</h1>
        <p>これは私のページです。</p>
        <p>私の名前は{{$name ?? "名無し"}}です。</p>
        <p>私の年齢は{{$age ?? "年齢未詳"}}です。</p>
        <button onclick="location.href='/'">私の好きなものはこちらです</button>

        <!-- 画像＋リンク＋キャプション -->
        <div style="text-align: center;">
            <figure style="display: inline-block;">
                <a href="https://arxiv.org/abs/2507.12886" target="_blank">
                    <img src="{{ asset('images/abst_image.png') }}" alt="サンプル画像" style="max-width:300px; border-radius:8px;">
                </a>
                <figcaption style="margin-top:8px; color:#555;">
                    クリックするとarXivに移動します。
                </figcaption>
            </figure>
        </div>
    </body>
</x-header>