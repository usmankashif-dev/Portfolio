@extends('layouts.main')
@section('content')
<div class="min-h-screen bg-black">
<section class="container mx-auto pt-24 pb-16 animate-fade-in">
    <h2 class="text-3xl font-bold mb-8 text-cyan-400 text-center animate-glow">My Projects</h2>
    <div class="mb-10 flex gap-4 justify-center">
      <button onclick="filterProjects('All')" class="filter-btn" id="filter-all">All</button>
      <button onclick="filterProjects('Frontend')" class="filter-btn" id="filter-frontend">Frontend</button>
      <button onclick="filterProjects('Backend')" class="filter-btn" id="filter-backend">Backend</button>
      <button onclick="filterProjects('Full-Stack')" class="filter-btn" id="filter-fullstack">Full-Stack</button>
    </div>
    <div id="project-gallery" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
      <!-- Project cards will be rendered here -->
    </div>
    <div id="empty-state" class="hidden text-center text-gray-400 mt-12 animate-fade-in">
      <svg class="mx-auto mb-4" width="60" height="60" fill="none" stroke="#06b6d4" stroke-width="1.5" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><path d="M8 12h8M12 8v8"/></svg>
      <p class="text-lg">No projects found for this category.</p>
    </div>
</section>
<style>
.filter-btn {
  padding: 0.75rem 1.25rem;
  border-radius: 9999px;
  font-weight: 600;
  background: #1e293b;
  color: #22d3ee;
  transition: background 0.2s, color 0.2s, box-shadow 0.2s;
  box-shadow: 0 2px 8px #0002;
  outline: none;
  border: none;
  cursor: pointer;
}
.filter-btn:hover, .filter-btn:focus {
  background: #06b6d4;
  color: #fff;
  box-shadow: 0 4px 16px #e11d4840;
}
.filter-btn.active {
  background: #06b6d4;
  color: #fff;
  box-shadow: 0 4px 16px #e11d4840;
}
.project-card {
  background: linear-gradient(135deg, #111827 60%, #0f172a 100%);
  border-radius: 1.25rem;
  box-shadow: 0 8px 32px #06b6d420, 0 2px 8px #e11d4840;
  padding: 1.5rem;
  display: flex;
  flex-direction: column;
  border: 1.5px solid #164e63;
  transition: transform 0.3s, box-shadow 0.3s;
  animation: fade-in 0.8s;
}
.project-card:hover {
  transform: scale(1.045);
  box-shadow: 0 12px 40px #e11d4840, 0 2px 8px #06b6d440;
}
.project-card:hover .project-img {
  transform: scale(1.05) rotate(-1deg);
  box-shadow: 0 8px 32px #06b6d4cc, 0 2px 8px #e11d4840;
}
.project-img {
  transition: transform 0.4s, box-shadow 0.4s;
}
.project-badge {
  display: inline-block;
  padding: 0.25rem 0.75rem;
  border-radius: 9999px;
  font-size: 0.75rem;
  font-weight: 700;
  background: #0891b2;
  color: #fff;
  margin-bottom: 0.5rem;
  box-shadow: 0 2px 8px #0002;
}
@keyframes fade-in {
  from { opacity: 0; transform: translateY(30px); }
  to { opacity: 1; transform: translateY(0); }
}
</style>
<script>
const projects = [
  {
    title: 'Factory Management System',
    description: 'A full-stack web app to manage orders and stock for a factory. Features secure authentication, order tracking, and inventory management.',
    image: '/storage/Stock_page_Project1.PNG',
    live: '#',
    github: 'https://github.com/usmankashif-dev/Project-1',
    type: 'Full-Stack',
    tech: ['Laravel', 'SQL', 'PHP', 'JS']
  },
  {
    title: 'Ecommerce Site (Velto)',
    description: 'A modern, responsive frontend for an ecommerce website. Built for speed, style, and a seamless shopping experience.',
    image: '/storage/Velto_delivery.PNG',
    live: '#',
    github: 'https://github.com/usmankashif-dev/Ecommerce-site-Velto',
    type: 'Frontend',
    tech: ['HTML', 'CSS', 'JS', 'Tailwind']
  },
];
function openModal(idx) {
  const p = projects[idx];
  document.getElementById('modal-title').textContent = p.title;
  document.getElementById('modal-desc').textContent = p.description;
  document.getElementById('modal-img').src = p.image;
  document.getElementById('modal-tech').innerHTML = p.tech.map(t=>`<span class='inline-block bg-cyan-800 text-white text-xs px-2 py-1 rounded-full mr-2 mb-1'>${t}</span>`).join('');
  document.getElementById('modal').classList.remove('hidden');
}
function closeModal() {
  document.getElementById('modal').classList.add('hidden');
}
function renderProjects(type) {
  let html = '';
  const filtered = projects.filter(p => type==='All'||p.type===type);
  filtered.forEach((p, i) => {
    html += `<div class='project-card' data-aos='fade-up' data-aos-delay='${i*100}'>
      <span class='project-badge'>${p.type}</span>
      <img src='${p.image}' alt='Project image' class='rounded mb-4 aspect-video object-cover border-2 border-cyan-700 project-img'>
      <h3 class='text-xl font-semibold mb-2 text-cyan-400'>${p.title}</h3>
      <div class='mb-2'>${p.tech.map(t=>`<span class='inline-block bg-cyan-800 text-white text-xs px-2 py-1 rounded-full mr-2 mb-1'>${t}</span>`).join('')}</div>
      <p class='mb-4 text-gray-300'>${p.description}</p>
      <div class='mt-auto flex gap-2'>
        <a href='${p.github}' target='_blank' class='px-4 py-2 bg-pink-500 hover:bg-pink-600 text-white rounded-full transition shadow'>GitHub</a>
        <button onclick='openModal(${i})' class='px-4 py-2 bg-gray-800 hover:bg-cyan-700 text-cyan-200 rounded-full transition shadow'>Details</button>
      </div>
    </div>`;
  });
  document.getElementById('project-gallery').innerHTML = html;
  document.getElementById('empty-state').classList.toggle('hidden', filtered.length > 0);
  if (window.AOS) AOS.refresh();
}
function filterProjects(type) {
  document.querySelectorAll('.filter-btn').forEach(btn => btn.classList.remove('active'));
  if(type==='All') document.getElementById('filter-all').classList.add('active');
  if(type==='Frontend') document.getElementById('filter-frontend').classList.add('active');
  if(type==='Backend') document.getElementById('filter-backend').classList.add('active');
  if(type==='Full-Stack') document.getElementById('filter-fullstack').classList.add('active');
  renderProjects(type);
}
document.addEventListener('DOMContentLoaded',()=>{
  filterProjects('All');
});
</script>
<div id="modal" class="fixed inset-0 bg-black bg-opacity-70 flex items-center justify-center z-50 hidden">
  <div class="bg-gray-900 rounded-xl shadow-2xl p-8 max-w-lg w-full relative animate-fade-in">
    <button onclick="closeModal()" class="absolute top-3 right-3 text-cyan-400 text-2xl hover:text-pink-400">&times;</button>
    <img id="modal-img" src="" alt="Project image" class="rounded mb-4 aspect-video object-cover border-2 border-cyan-700">
    <h3 id="modal-title" class="text-2xl font-bold text-cyan-400 mb-2"></h3>
    <div id="modal-tech" class="mb-2"></div>
    <p id="modal-desc" class="text-gray-200"></p>
  </div>
</div>
@endsection
