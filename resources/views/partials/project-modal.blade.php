<div id="project-modal" class="fixed inset-0 z-[60] hidden items-center justify-center bg-black/80 p-4 backdrop-blur-sm">
    <div class="modal-panel w-full max-w-4xl overflow-hidden rounded-2xl border border-white/10 bg-slate-900 shadow-2xl">
        <div class="flex items-center justify-between border-b border-white/10 p-5">
            <h3 id="project-modal-title" class="text-xl font-bold text-white">Project</h3>
            <button id="project-modal-close" type="button" class="rounded-full p-2 text-gray-400 transition hover:bg-white/10 hover:text-white">
                <i class="fa-solid fa-xmark" aria-hidden="true"></i>
            </button>
        </div>
        <div class="relative aspect-video bg-black">
            <img id="project-modal-image" src="{{ asset('Naveed-image.png') }}" alt="Project slide" class="h-full w-full object-contain">
            <button id="project-modal-prev" type="button" class="absolute left-4 top-1/2 -translate-y-1/2 rounded-full bg-black/50 p-3 text-white transition hover:bg-blue-500"><i class="fa-solid fa-chevron-left" aria-hidden="true"></i></button>
            <button id="project-modal-next" type="button" class="absolute right-4 top-1/2 -translate-y-1/2 rounded-full bg-black/50 p-3 text-white transition hover:bg-blue-500"><i class="fa-solid fa-chevron-right" aria-hidden="true"></i></button>
            <p id="project-modal-counter" class="absolute bottom-4 left-1/2 -translate-x-1/2 rounded-full bg-black/60 px-3 py-1 text-xs text-white">1 / 1</p>
        </div>
    </div>
</div>

<div class="pointer-events-none fixed inset-0 z-0 bg-[radial-gradient(ellipse_at_top,_var(--tw-gradient-stops))] from-blue-900/20 via-slate-950 to-slate-950"></div>
