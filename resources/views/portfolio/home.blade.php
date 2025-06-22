@extends('layouts.app')
@section('content')
<div class="min-h-screen flex flex-col justify-center items-center bg-gradient-to-br from-gray-900 via-black to-gray-950 animate-fade-in">
    <h1 class="text-5xl font-extrabold mb-4 text-gray-100 drop-shadow-lg animate-slide-down">Usman Portfolio</h1>
    <p class="text-xl mb-8 text-gray-300 animate-fade-in">Web Developer <span class="text-pink-500">|</span> Student <span class="text-pink-500">|</span> Remote Worker</p>
    <a href="{{ route('portfolio.projects') }}" class="px-8 py-3 bg-cyan-600 hover:bg-cyan-700 text-gray-100 rounded-full shadow-lg transition-all duration-300 ease-in-out transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-pink-500 animate-bounce">View My Projects</a>
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
.animate-bounce { animation: bounce 1.5s infinite alternate; }
@keyframes bounce {
  0% { transform: translateY(0); }
  100% { transform: translateY(-10px); }
}
</style>
@endsection
