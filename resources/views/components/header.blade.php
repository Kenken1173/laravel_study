<!DOCTYPE html>
<div class="flex flex-col h-screen">
    <header class="text-2xl font-bold bg-[#3EB489] text-white text-center p-2">
        @vite('resources/css/app.css')
        <div class="flex space-x-2 justify-end">
            <button class="bg-white text-[#3EB489] font-bold py-1 px-3 rounded hover:bg-gray-100">activity</button>
            <button class="bg-white text-[#3EB489] font-bold py-1 px-3 rounded hover:bg-gray-100">contact</button>
        </div>
    </header>
    <div class="mx-auto my-3 w-9/12 bg-white border border-green-600 border-2 text-center p-2">
        <!--コンテンツが並ぶ-->
        {{ $slot }}
    </div>
    <footer class="bg-[#3EB489] text-white flex items-center p-2 mt-auto">
        <span class="ml-4">フッター</span>
    </footer>
</div>
