@extends('layouts.app')
@section('content')
<div class="min-h-screen flex flex-col justify-center items-center bg-black animate-fade-in relative overflow-hidden">
    <!-- Animated code background -->
    <div id="code-bg" class="pointer-events-none absolute inset-0 z-0"></div>
    <div class="max-w-3xl w-full px-4 py-20 bg-gradient-to-br from-gray-900 via-gray-950 to-black bg-opacity-90 rounded-2xl shadow-2xl animate-slide-down text-center relative z-10 border border-cyan-900">
        <div class="flex flex-col items-center mb-10">
            <div class="w-40 h-40 rounded-full border-4 border-cyan-500 shadow-xl mb-4 animate-fade-in bg-center bg-cover" style="background-image: url('/storage/profile.PNG');"></div>
        </div>
        <div class="mb-8 flex flex-wrap justify-center gap-3" data-aos="fade-down">
            <h2 class="text-2xl md:text-3xl font-bold text-white animate-glow">Hi, I'm Usman &mdash; I bring your ideas to life with code.<br>Let's talk.</h2>
        </div>
        <div class="flex justify-center gap-5 mb-8" data-aos="fade-up">
            <a href="https://wa.me/923116366153" target="_blank" class="social-icon" title="WhatsApp">
                <span class="sr-only">WhatsApp</span>
                <svg class="w-10 h-10 rounded-full bg-green-500 p-2 text-white shadow-lg hover:scale-110 transition" fill="currentColor" viewBox="0 0 24 24"><path d="M20.52 3.48A11.87 11.87 0 0 0 12 0C5.37 0 0 5.37 0 12c0 2.11.55 4.17 1.6 5.98L0 24l6.18-1.62A11.93 11.93 0 0 0 12 24c6.63 0 12-5.37 12-12 0-3.19-1.24-6.19-3.48-8.52zM12 22c-1.85 0-3.67-.5-5.24-1.44l-.37-.22-3.67.97.98-3.58-.24-.37A9.93 9.93 0 0 1 2 12c0-5.52 4.48-10 10-10s10 4.48 10 10-4.48 10-10 10zm5.2-7.8c-.28-.14-1.65-.81-1.9-.9-.25-.09-.43-.14-.61.14-.18.28-.7.9-.86 1.08-.16.18-.32.2-.6.07-.28-.14-1.18-.44-2.25-1.4-.83-.74-1.39-1.65-1.55-1.93-.16-.28-.02-.43.12-.57.13-.13.28-.34.42-.51.14-.17.18-.29.28-.48.09-.19.05-.36-.02-.5-.07-.14-.61-1.47-.84-2.01-.22-.53-.45-.46-.61-.47-.16-.01-.36-.01-.56-.01-.19 0-.5.07-.76.34-.26.27-1 1-.97 2.43.03 1.43 1.03 2.81 1.18 3.01.15.2 2.03 3.1 4.93 4.23.69.3 1.23.48 1.65.61.69.22 1.32.19 1.82.12.56-.08 1.65-.67 1.88-1.32.23-.65.23-1.2.16-1.32-.07-.12-.25-.19-.53-.33z"/></svg>
            </a>
            <a href="mailto:usmankashif711@gmail.com" class="social-icon" title="Gmail">
                <span class="sr-only">Gmail</span>
                <svg class="w-10 h-10 rounded-full bg-red-500 p-2 text-white shadow-lg hover:scale-110 transition" fill="currentColor" viewBox="0 0 24 24"><path d="M20 4H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 2v.01L12 13 4 6.01V6h16zm0 12H4V8.99l8 6.99 8-6.99V18z"/></svg>
            </a>
            <a href="https://github.com/usmankashif711" target="_blank" class="social-icon" title="GitHub">
                <span class="sr-only">GitHub</span>
                <svg class="w-10 h-10 rounded-full bg-gray-800 p-2 text-white shadow-lg hover:scale-110 transition" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12c0 4.42 2.87 8.17 6.84 9.5.5.09.66-.22.66-.48 0-.24-.01-.87-.01-1.7-2.78.6-3.37-1.34-3.37-1.34-.45-1.15-1.1-1.46-1.1-1.46-.9-.62.07-.6.07-.6 1 .07 1.53 1.03 1.53 1.03.89 1.53 2.34 1.09 2.91.83.09-.65.35-1.09.63-1.34-2.22-.25-4.56-1.11-4.56-4.95 0-1.09.39-1.98 1.03-2.68-.1-.25-.45-1.27.1-2.65 0 0 .84-.27 2.75 1.02A9.56 9.56 0 0 1 12 6.8c.85.004 1.71.12 2.51.35 1.91-1.29 2.75-1.02 2.75-1.02.55 1.38.2 2.4.1 2.65.64.7 1.03 1.59 1.03 2.68 0 3.85-2.34 4.7-4.57 4.95.36.31.68.92.68 1.85 0 1.34-.01 2.42-.01 2.75 0 .27.16.58.67.48A10.01 10.01 0 0 0 22 12c0-5.52-4.48-10-10-10z"/></svg>
            </a>
            <a href="https://www.linkedin.com/in/usman-kashif-a76425355?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" target="_blank" class="social-icon" title="LinkedIn">
                <span class="sr-only">LinkedIn</span>
                <svg class="w-10 h-10 rounded-full bg-blue-700 p-2 text-white shadow-lg hover:scale-110 transition" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.76 0-5 2.24-5 5v14c0 2.76 2.24 5 5 5h14c2.76 0 5-2.24 5-5v-14c0-2.76-2.24-5-5-5zm-11 19h-3v-9h3v9zm-1.5-10.28c-.97 0-1.75-.79-1.75-1.75s.78-1.75 1.75-1.75 1.75.79 1.75 1.75-.78 1.75-1.75 1.75zm15.5 10.28h-3v-4.5c0-1.08-.02-2.47-1.5-2.47-1.5 0-1.73 1.17-1.73 2.39v4.58h-3v-9h2.89v1.23h.04c.4-.75 1.38-1.54 2.84-1.54 3.04 0 3.6 2 3.6 4.59v4.72z"/></svg>
            </a>
        </div>
        <a href="/projects" class="px-8 py-3 bg-gradient-to-r from-cyan-500 to-pink-500 hover:from-pink-500 hover:to-cyan-500 text-white rounded-full shadow-xl transition-all duration-300 ease-in-out transform hover:scale-110 focus:outline-none focus:ring-2 focus:ring-pink-500 animate-bounce">View My Projects</a>
    </div>
    <div class="absolute bottom-10 left-1/2 transform -translate-x-1/2 animate-float z-10">
        <svg width="40" height="40" fill="none" stroke="currentColor" stroke-width="2" class="text-cyan-400 animate-pulse" viewBox="0 0 24 24"><path d="M12 5v14m7-7H5"/></svg>
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
@keyframes float {
  0% { transform: translateY(0); }
  100% { transform: translateY(-20px); }
}
.animate-fade-in { animation: fade-in 1.2s ease; }
.animate-slide-down { animation: slide-down 1.1s cubic-bezier(.4,2,.6,1) 0.2s both; }
.animate-glow { animation: glow 2s alternate infinite; }
.animate-bounce { animation: bounce 1.5s infinite alternate; }
.animate-float { animation: float 2s infinite alternate; }
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
});
</script>
@endsection
