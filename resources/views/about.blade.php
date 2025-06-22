@extends('layouts.app')
@section('content')
<div class="min-h-screen flex flex-col justify-center items-center bg-black animate-fade-in relative overflow-hidden">
    <div id="code-bg" class="pointer-events-none absolute inset-0 z-0"></div>
    <div class="max-w-2xl mx-auto mt-16 bg-gray-900 bg-opacity-80 rounded-xl shadow-lg p-8 text-left" data-aos="fade-up">
        <h2 class="text-3xl font-bold text-cyan-400 mb-4">About Me</h2>
        <p class="text-gray-200 leading-relaxed text-lg mb-6">
            Hey! I'm Usman, a teenage full-stack developer who loves turning ideas into reality with code. I’m obsessed with crafting clean, beautiful interfaces and building solid, logical backends that just work. Whether I’m designing a pixel-perfect UI or architecting a database, I bring energy, curiosity, and a bit of fun to every project. I believe great software should feel effortless to use and a joy to build.
        </p>
        <p class="text-gray-200 leading-relaxed text-lg mb-6">
            When I’m not coding, you’ll find me exploring new tech, learning something unexpected, or just enjoying a good laugh. I’m always up for a challenge and love connecting with people who share a passion for building cool things. If you want to chat, collaborate, or just say hi, I’d love to hear from you!
        </p>
        <div class="mt-8 text-sm text-cyan-300 border-t border-cyan-800 pt-4">
            <strong>Education:</strong> Currently a student, always a learner.
        </div>
    </div>
</div>
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
  text.style.maxWidth = '120px';
  text.style.overflow = 'hidden';
  text.style.textOverflow = 'ellipsis';
  text.textContent = codeSnippets[Math.floor(Math.random()*codeSnippets.length)];
  codeBg.appendChild(text);
  setTimeout(()=>{
    text.style.opacity = 0;
    setTimeout(()=>codeBg.removeChild(text), 500);
  }, 1000);
}
document.addEventListener('DOMContentLoaded',()=>{
  document.getElementById('code-bg').parentElement.addEventListener('mousemove', showCodeText);
});
</script>
<style>
.code-bg-text {
  position: absolute;
  font-family: 'Fira Mono', 'Consolas', monospace;
  font-size: 0.85rem;
  opacity: 0.7;
  pointer-events: none;
  z-index: 1;
  white-space: pre;
  user-select: none;
  transition: opacity 0.5s;
  background: #111;
  padding: 2px 4px;
  border-radius: 4px;
  box-shadow: 0 2px 8px #0008;
}
</style>
@endsection
