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
                <button class="bg-white text-[#3EB489] font-bold py-1 px-3 rounded hover:bg-gray-100">Home</button>
                <button class="bg-white text-[#3EB489] font-bold py-1 px-3 rounded hover:bg-gray-100">Activity</button>
                <button class="bg-white text-[#3EB489] font-bold py-1 px-3 rounded hover:bg-gray-100">Contact</button>
                <button class="flex items-center">
                    {{--  三点リーダーfigmaから読み込み  --}}
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path fill="#fff" d="M3 8h18a1 1 0 0 0 0-2H3a1 1 0 0 0 0 2m18 8H3a1 1 0 0 0 0 2h18a1 1 0 0 0 0-2m0-5H3a1 1 0 0 0 0 2h18a1 1 0 0 0 0-2"/>
                    </svg>
                </button>
            </div>
        </div>
    </header>
    <div class="mx-auto my-3 w-9/12 bg-white border border-green-600 border-2 text-center p-2">
        <!--コンテンツが並ぶ-->
        {{ $slot }}
    </div>
    {{--  <footer class="bg-[#3EB489] text-white flex items-center p-2 mt-auto">
        <span class="ml-4">フッターを追加する場合</span>
    </footer>  --}}
</div>
