<!DOCTYPE html>
<!-- Google FontsのNoto Sansを読み込み -->
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;700&display=swap" rel="stylesheet">
<div class="flex flex-col h-screen font-sans" style="font-family: 'Noto Sans', sans-serif;">
    <header class="text-2xl font-bold bg-[#3EB489] text-white text-center p-2">
        @vite('resources/css/app.css')
        <div class="flex items-center justify-between">
            {{--  左側に設置するアイコン  --}}
            <div class="flex space-x-2 justify-start">
                Kengo Anzai
            </div>
            {{--  右側に設置するアイコン  --}}
            <div class="flex space-x-2 justify-end">
                <a href="{{url('/')}}">
                    <button class="bg-white text-[#3EB489] font-bold py-1 px-3 rounded hover:bg-gray-100">
                        Home
                    </button>
                </a>
                {{--  TODO  コントローラーを用いたい  --}}
                <a href="{{url('/activity')}}">
                    <button class="bg-white text-[#3EB489] font-bold py-1 px-3 rounded hover:bg-gray-100">
                        Activity
                    </button>
                </a>
                <button class="bg-white text-[#3EB489] font-bold py-1 px-3 rounded hover:bg-gray-100">Contact</button>
                <button class="flex items-center">
                    {{--  三点リーダーfigmaから読み込み  --}}
                    <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24">
                        <path fill="#fff" d="M3 8h18a1 1 0 0 0 0-2H3a1 1 0 0 0 0 2m18 8H3a1 1 0 0 0 0 2h18a1 1 0 0 0 0-2m0-5H3a1 1 0 0 0 0 2h18a1 1 0 0 0 0-2"/>
                    </svg>
                </button>
            </div>
        </div>
    </header>
    <div class="text-center p-2">
        <!--コンテンツが並ぶ-->
        {{ $slot }}

        <!-- 背景SVG（アニメーション付き） -->
        <div class="fixed top-0 left-0 w-full h-full -z-10 overflow-hidden">
            <svg id="bg-svg" width="1000" height="1000" viewBox="0 0 480 480" fill="none"
                    style="position: fixed; top: 0; left: 0; width: 100vw; height: 100vh; z-index: -1;">
                <text x="50%" y="15%" text-anchor="middle" fill="#E0E0E0" font-size="40" font-family="Noto Sans" font-weight="bold">
                    Kengo Anzai&#39;s Home page
                </text>
            </svg>
        </div>

        <!-- アニメーション用CSS -->
        <style>
            #bg-svg {
                animation: move-bg 20s linear infinite;
            }
            @keyframes move-bg {
                0% { left: 100vw; }
                100% { left: -400px; }
            }
        </style>
    </div>
    {{--  <footer class="bg-[#3EB489] text-white flex items-center p-2 mt-auto">
        <span class="ml-4">フッターを追加する場合</span>
    </footer>  --}}
</div>
