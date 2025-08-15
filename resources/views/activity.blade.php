<x-header>
    <head>
        <title>最近のアクティビティ</title>
    </head>
    <body>
        <div class="text-[3vw] text-[#3EB489] font-bold py-3 px-3">
        <h1>下記の研究活動を行っています。</h1>
        </div>

        <!-- 画像＋リンク＋キャプション -->
        <div style="text-align: center;">
            <figure style="display: inline-block;">
                <a href="https://arxiv.org/abs/2507.12886" target="_blank">
                    <img src="{{ asset('images/abst_image.png') }}" alt="サンプル画像" style="max-width:500px; border-radius:8px;">
                </a>
                <figcaption style="margin-top:8px; color:#555;">
                    クリックするとarXivに移動します。
                </figcaption>
            </figure>
        </div>
    </body>
</x-header>