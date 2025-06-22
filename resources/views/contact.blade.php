@extends('layouts.app')
@section('content')
<div class="min-h-screen flex flex-col justify-center items-center bg-black animate-fade-in relative overflow-hidden">
    <!-- Animated code background -->
    <div id="code-bg" class="pointer-events-none absolute inset-0 z-0"></div>
    <div class="max-w-lg w-full px-4 py-16 bg-gradient-to-br from-gray-900 via-gray-950 to-black bg-opacity-90 rounded-2xl shadow-2xl animate-slide-down relative z-10 border border-cyan-900" data-aos="zoom-in">
        <h2 class="text-4xl font-extrabold mb-10 text-cyan-400 tracking-tight text-center animate-glow">Contact Me</h2>
        <form method="POST" action="{{ route('contact.send') }}" class="space-y-6" id="contactForm" novalidate>
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
            <div id="form-error" class="text-pink-400 text-center font-semibold hidden">Please fill in all fields.</div>
            <button type="submit" class="px-8 py-3 bg-gradient-to-r from-cyan-500 to-pink-500 hover:from-pink-500 hover:to-cyan-500 text-white rounded-full shadow-xl transition-all duration-300 ease-in-out transform hover:scale-110 focus:outline-none focus:ring-2 focus:ring-pink-500 animate-bounce">Send</button>
        </form>
        @if(session('success'))
        <div class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-70 z-50">
            <div class="bg-gray-900 p-8 rounded-xl shadow-lg text-center">
                <div class="text-2xl text-cyan-400 mb-4">Message Sent!</div>
                <a href="/contact" class="px-6 py-2 bg-pink-500 hover:bg-pink-600 text-white rounded-full">Close</a>
            </div>
        </div>
        @endif
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
.animate-fade-in { animation: fade-in 1.2s ease; }
.animate-slide-down { animation: slide-down 1.1s cubic-bezier(.4,2,.6,1) 0.2s both; }
.animate-glow { animation: glow 2s alternate infinite; }
.animate-bounce { animation: bounce 1.5s infinite alternate; }
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
  document.getElementById('code-bg').parentElement.addEventListener('mousemove', showCodeText);
  document.getElementById('contactForm').addEventListener('submit', function(e) {
    const name = this.name.value.trim();
    const email = this.email.value.trim();
    const message = this.message.value.trim();
    const errorDiv = document.getElementById('form-error');
    if(!name || !email || !message) {
      e.preventDefault();
      errorDiv.classList.remove('hidden');
      setTimeout(()=>errorDiv.classList.add('hidden'), 2000);
    }
  });
});
</script>
@endsection
