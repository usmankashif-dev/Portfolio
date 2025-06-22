@extends('layouts.app')
@section('content')
<div class="min-h-screen flex flex-col justify-center items-center bg-gradient-to-br from-gray-900 via-black to-gray-950 animate-fade-in">
    <div class="max-w-2xl w-full px-6 py-12 bg-black bg-opacity-60 rounded-xl shadow-lg animate-slide-down">
        <h2 class="text-3xl font-bold mb-4 text-gray-100">About Me</h2>
        <p class="mb-2 text-gray-300">Hi! I'm Usman, a 14-year-old web developer and a 9th-grade student at Govt Central Model School. I have completed paid projects and can work remotely. My skills include:</p>
        <ul class="list-disc ml-6 mb-4 text-cyan-400">
            <li>HTML, CSS, JavaScript</li>
            <li>Tailwind CSS, Bootstrap</li>
            <li>Vue.js, Laravel</li>
            <li>SQL, MongoDB</li>
        </ul>
        <p class="text-gray-400">I am passionate about building modern, responsive websites and always eager to learn new technologies.</p>
    </div>
</div>
<style>
@keyframes fade-in {
  from { opacity: 0; }
  to { opacity: 1; }
}
@keyframes slide-down {
  from { transform: translateY(-40px); opacity: 0; }
  to { transform: translateY(0); opacity: 1; }
}
.animate-fade-in { animation: fade-in 1.2s ease; }
.animate-slide-down { animation: slide-down 1s cubic-bezier(.4,2,.6,1) 0.2s both; }
</style>
@endsection
