@extends('layouts.app')
@section('content')
<div class="min-h-screen flex flex-col justify-center items-center bg-black animate-fade-in relative overflow-hidden">
    <!-- Animated code background -->
    <div id="code-bg" class="pointer-events-none absolute inset-0 z-0"></div>
    <div class="max-w-5xl w-full px-4 py-16 bg-gradient-to-br from-gray-900 via-gray-950 to-black bg-opacity-90 rounded-2xl shadow-2xl animate-slide-down relative z-10 border border-cyan-900">
        <div class="flex flex-col items-center mb-10">
            <img src="/storage/profile.PNG" alt="Profile picture" class="w-40 h-40 rounded-full border-4 border-cyan-500 shadow-xl object-cover mb-4 animate-fade-in" loading="lazy">
            <h2 class="text-4xl font-extrabold text-cyan-400 tracking-tight text-center animate-glow">My Projects</h2>
        </div>
        <div class="flex justify-center mb-8 gap-4">
            <button onclick="filterProjects('All')" class="px-5 py-2 rounded-full font-semibold transition bg-cyan-600 text-white shadow-lg hover:scale-105 hover:bg-cyan-700 focus:ring-2 focus:ring-pink-500 animate-bounce-up" id="filter-all">All</button>
            <button onclick="filterProjects('Frontend')" class="px-5 py-2 rounded-full font-semibold transition bg-gray-800 text-cyan-400 shadow-lg hover:scale-105 hover:bg-cyan-700 focus:ring-2 focus:ring-pink-500 animate-bounce-mid" id="filter-frontend">Frontend</button>
            <button onclick="filterProjects('Backend')" class="px-5 py-2 rounded-full font-semibold transition bg-gray-800 text-cyan-400 shadow-lg hover:scale-105 hover:bg-cyan-700 focus:ring-2 focus:ring-pink-500 animate-bounce-down" id="filter-backend">Backend</button>
        </div>
        <div id="project-gallery" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10">
            <!-- Project cards will be rendered here -->
        </div>
    </div>
</div>
<style>
@keyframes fade-in {
  from { opacity: 0; }
  to { opacity: 1; }
}
@keyframes slide-down {
  from { transform: translateY(-60px); opacity: 0; }
  to { transform: translateY(0); opacity: 1; }
}
@keyframes glow {
  0% { text-shadow: 0 0 10px #06b6d4, 0 0 20px #e11d48; }
  100% { text-shadow: 0 0 30px #06b6d4, 0 0 40px #e11d48; }
}
@keyframes bounce-up {
  0% { transform: translateY(0); }
  100% { transform: translateY(-15px); }
}
@keyframes bounce-mid {
  0% { transform: translateY(0); }
  100% { transform: translateY(10px); }
}
@keyframes bounce-down {
  0% { transform: translateY(0); }
  100% { transform: translateY(-7px); }
}
.animate-fade-in { animation: fade-in 1.2s ease; }
.animate-slide-down { animation: slide-down 1.1s cubic-bezier(.4,2,.6,1) 0.2s both; }
.animate-glow { animation: glow 2s alternate infinite; }
.animate-bounce-up { animation: bounce-up 1.5s infinite alternate; }
.animate-bounce-mid { animation: bounce-mid 1.5s infinite alternate; }
.animate-bounce-down { animation: bounce-down 1.5s infinite alternate; }
.project-card-animate { animation: fade-in 1.2s cubic-bezier(.4,2,.6,1); }
.code-bg-text {
  position: absolute;
  font-family: 'Fira Mono', 'Consolas', monospace;
  font-size: 0.85rem; /* Smaller font */
  opacity: 0.7;
  pointer-events: none;
  z-index: 1;
  white-space: pre;
  user-select: none;
  transition: opacity 0.5s;
  background: #111; /* Black background */
  padding: 2px 4px;
  border-radius: 4px;
  box-shadow: 0 2px 8px #0008;
}
</style>
<script>
const projects = [
  {title:'Portfolio Website', description:'A modern, creative portfolio built with Laravel and Tailwind. Fully responsive and animated.', image:'https://placehold.co/400x220/222/fff?text=Portfolio', live:'#', github:'#', type:'Frontend'},
  {title:'School Management System', description:'Manage students, teachers, and classes. Built for real schools.', image:'https://placehold.co/400x220/222/fff?text=School', live:'#', github:'#', type:'Backend'},
  {title:'Blog Platform', description:'A feature-rich blog with markdown support and user auth.', image:'https://placehold.co/400x220/222/fff?text=Blog', live:'#', github:'#', type:'Frontend'},
  {title:'API Service', description:'RESTful API for mobile and web apps, built with Laravel.', image:'https://placehold.co/400x220/222/fff?text=API', live:'#', github:'#', type:'Backend'},
];
function renderProjects(type) {
  let html = '';
  let delay = 0;
  projects.filter(p => type==='All'||p.type===type).forEach((p, i) => {
    delay = i * 0.1;
    html += `<div class='bg-gradient-to-br from-gray-900 via-black to-gray-950 border-l-4 border-cyan-500 rounded-2xl shadow-xl p-6 flex flex-col project-card-animate' style='animation-delay:${delay}s;'>
      <div class='overflow-hidden rounded-xl mb-4'><img src='${p.image}' alt='Project image' class='rounded-xl hover:scale-110 transition-transform duration-500 border-2 border-cyan-700 shadow-lg'></div>
      <h3 class='text-2xl font-bold mb-2 text-cyan-400 tracking-tight'>${p.title}</h3>
      <p class='mb-4 text-gray-300'>${p.description}</p>
      <div class='mt-auto flex gap-2'>
        <a href='${p.live}' target='_blank' class='px-4 py-2 bg-cyan-600 hover:bg-cyan-700 text-white rounded-full shadow-lg transition hover:scale-105 focus:ring-2 focus:ring-pink-500'>Live Preview</a>
        <a href='${p.github}' target='_blank' class='px-4 py-2 bg-pink-500 hover:bg-pink-600 text-white rounded-full shadow-lg transition hover:scale-105 focus:ring-2 focus:ring-cyan-400'>GitHub</a>
      </div>
    </div>`;
  });
  document.getElementById('project-gallery').innerHTML = html;
}
function filterProjects(type) {
  document.getElementById('filter-all').className = 'px-5 py-2 rounded-full font-semibold transition bg-gray-800 text-cyan-400 shadow-lg hover:scale-105 hover:bg-cyan-700 focus:ring-2 focus:ring-pink-500 animate-bounce-up';
  document.getElementById('filter-frontend').className = 'px-5 py-2 rounded-full font-semibold transition bg-gray-800 text-cyan-400 shadow-lg hover:scale-105 hover:bg-cyan-700 focus:ring-2 focus:ring-pink-500 animate-bounce-mid';
  document.getElementById('filter-backend').className = 'px-5 py-2 rounded-full font-semibold transition bg-gray-800 text-cyan-400 shadow-lg hover:scale-105 hover:bg-cyan-700 focus:ring-2 focus:ring-pink-500 animate-bounce-down';
  if(type==='All') document.getElementById('filter-all').className = 'px-5 py-2 rounded-full font-semibold transition bg-cyan-600 text-white shadow-lg hover:scale-105 hover:bg-cyan-700 focus:ring-2 focus:ring-pink-500 animate-bounce-up';
  if(type==='Frontend') document.getElementById('filter-frontend').className = 'px-5 py-2 rounded-full font-semibold transition bg-cyan-600 text-white shadow-lg hover:scale-105 hover:bg-cyan-700 focus:ring-2 focus:ring-pink-500 animate-bounce-mid';
  if(type==='Backend') document.getElementById('filter-backend').className = 'px-5 py-2 rounded-full font-semibold transition bg-cyan-600 text-white shadow-lg hover:scale-105 hover:bg-cyan-700 focus:ring-2 focus:ring-pink-500 animate-bounce-down';
  renderProjects(type);
}
// Animated code background logic
const codeSnippets = [
  'const user = { name: "Usman", skills: ["Laravel", "Tailwind", "JS"] };',
  'function helloWorld() {\n  console.log("Hello, World!");\n}',
  'let project = "Portfolio";\nproject += " Website";',
  'fetch("/api/projects").then(r=>r.json())',
  'if(success) {\n  showMessage("Sent!");\n}',
  'for(let i=0;i<10;i++){\n  animate(i);\n}',
  'return <AwesomePortfolio />;',
  'const skills = ["HTML", "CSS", "JS", "Laravel"]',
  'useEffect(()=>{\n  setState(true);\n},[])',
  'export default function Portfolio() {}',
];
function randomColor() {
  const colors = ["#06b6d4","#e11d48","#f472b6","#facc15","#a3e635","#818cf8","#f59e42","#f43f5e"];
  return colors[Math.floor(Math.random()*colors.length)];
}
function showCodeText(e) {
  const codeBg = document.getElementById('code-bg');
  const text = document.createElement('div');
  text.className = 'code-bg-text';
  text.style.left = e.clientX + 'px';
  text.style.top = e.clientY + 'px';
  text.style.color = randomColor();
  text.style.maxWidth = '120px'; // Allow more characters, but still not wide
  text.style.overflow = 'hidden';
  text.style.textOverflow = 'ellipsis';
  text.textContent = codeSnippets[Math.floor(Math.random()*codeSnippets.length)];
  codeBg.appendChild(text);
  setTimeout(()=>{
    text.style.opacity = 0;
    setTimeout(()=>codeBg.removeChild(text), 500);
  }, 1000); // Lasts 1 second
}
document.addEventListener('DOMContentLoaded',()=>{
  renderProjects('All');
  document.getElementById('code-bg').parentElement.addEventListener('mousemove', showCodeText);
});
</script>
@endsection
