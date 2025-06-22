@extends('layouts.app')
@section('content')
<div class="min-h-screen flex flex-col justify-center items-center bg-gradient-to-br from-gray-900 via-black to-gray-950 animate-fade-in">
    <div class="max-w-xl w-full px-6 py-12 bg-black bg-opacity-60 rounded-xl shadow-lg animate-slide-down">
        <h2 class="text-3xl font-bold mb-4 text-gray-100">Contact Me</h2>
        <form class="space-y-4" method="POST" action="#">
            @csrf
            <div>
                <label class="block mb-1 font-medium text-cyan-400">Name</label>
                <input type="text" name="name" class="w-full border border-cyan-600 bg-gray-900 text-gray-100 rounded px-3 py-2 focus:ring-2 focus:ring-pink-500" required>
            </div>
            <div>
                <label class="block mb-1 font-medium text-cyan-400">Email</label>
                <input type="email" name="email" class="w-full border border-cyan-600 bg-gray-900 text-gray-100 rounded px-3 py-2 focus:ring-2 focus:ring-pink-500" required>
            </div>
            <div>
                <label class="block mb-1 font-medium text-cyan-400">Message</label>
                <textarea name="message" class="w-full border border-cyan-600 bg-gray-900 text-gray-100 rounded px-3 py-2 focus:ring-2 focus:ring-pink-500" rows="4" required></textarea>
            </div>
            <button type="submit" class="px-8 py-3 bg-cyan-600 hover:bg-cyan-700 text-gray-100 rounded-full shadow-lg transition-all duration-300 ease-in-out transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-pink-500 animate-bounce">Send</button>
        </form>
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
.animate-bounce { animation: bounce 1.5s infinite alternate; }
@keyframes bounce {
  0% { transform: translateY(0); }
  100% { transform: translateY(-10px); }
}
</style>
@endsection
