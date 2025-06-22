<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usman Kashif Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font@7.4.47/css/materialdesignicons.min.css">
</head>
<body class="bg-gray-950 text-gray-100 min-h-screen flex flex-col">
    <nav x-data="{ open: false }" class="bg-black bg-opacity-95 backdrop-blur-lg shadow-lg sticky top-0 z-50 border-b-4 border-gradient nav-creative">
        <div class="container mx-auto flex justify-between items-center py-4 px-6">
            <a href="/" class="text-2xl font-bold text-cyan-400">Usman Kashif</a>
            <button @click="open = !open" class="md:hidden text-cyan-400 focus:outline-none">
                <svg :class="{'hidden': open, 'block': !open}" class="w-8 h-8" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"/></svg>
                <svg :class="{'block': open, 'hidden': !open}" class="w-8 h-8" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/></svg>
            </button>
            <div :class="{'block': open, 'hidden': !open}" class="w-full md:flex md:items-center md:w-auto space-y-4 md:space-y-0 md:space-x-6 hidden md:block mt-4 md:mt-0 text-center">
                <a href="/" class="nav-link {{ request()->is('/') ? 'active' : '' }}">Home</a>
                <a href="/skills" class="nav-link {{ request()->is('skills') ? 'active' : '' }}">Skills</a>
                <a href="/projects" class="nav-link {{ request()->is('projects') ? 'active' : '' }}">Projects</a>
                <a href="/contact" class="nav-link {{ request()->is('contact') ? 'active' : '' }}">Contact</a>
                <a href="/about" class="nav-link {{ request()->is('about') ? 'active' : '' }}">About</a>
                <a href="/services" class="nav-link {{ request()->is('services') ? 'active' : '' }}">Services</a>
            </div>
        </div>
    </nav>
    <style>
    .nav-link {
        position: relative;
        padding-bottom: 4px;
        font-weight: 800;
        font-size: 1.1rem;
        color: #fff;
        letter-spacing: 0.02em;
        text-shadow: 0 0 8px #06b6d4, 0 0 16px #e11d48, 0 2px 8px #000a;
        transition: color 0.2s, text-shadow 0.3s;
    }
    .nav-link:hover, .nav-link.active {
        color: #f472b6;
        text-shadow: 0 0 16px #e11d48, 0 0 24px #06b6d4, 0 2px 8px #000a;
    }
    .nav-link::after {
        content: '';
        display: block;
        width: 0;
        height: 3px;
        background: linear-gradient(90deg,#06b6d4,#e11d48,#f472b6);
        transition: width 0.3s;
        border-radius: 2px;
        margin: 0 auto;
        box-shadow: 0 0 8px #06b6d4, 0 0 16px #e11d48;
    }
    .nav-link:hover::after, .nav-link.active::after {
        width: 100%;
    }
    nav.nav-creative {
        border-image: linear-gradient(90deg,#06b6d4,#e11d48,#f472b6) 1;
        animation: nav-border-glow 3s linear infinite alternate;
    }
    @keyframes nav-border-glow {
      0% { border-bottom-color: #06b6d4; }
      50% { border-bottom-color: #e11d48; }
      100% { border-bottom-color: #f472b6; }
    }
    </style>
    <main class="flex-1">
        @yield('content')
    </main>
    <footer class="w-full bg-black bg-opacity-80 text-center py-6 mt-16 text-gray-400">
        &copy; {{ date('Y') }} Usman Kashif. All rights reserved.
    </footer>
</body>
</html>
