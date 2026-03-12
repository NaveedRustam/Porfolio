
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Naveed Rustam portfolio ">
    <title>Naveed Rustam | Full Stack Developer</title>
    <link rel="icon" href="{{ asset('favicon.ico') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon-16x16.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="64x64" href="{{ asset('favicon-64x64.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png') }}">
    <link rel="manifest" href="{{ asset('site.webmanifest') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="preloading min-h-screen overflow-x-hidden selection:bg-blue-500/30">
    <div id="preloader" class="preloader fixed inset-0 z-[100] grid place-items-center bg-slate-950">
        <div class="preloader-content">
            <div class="preloader-logo-scene">
                <div class="preloader-orbit preloader-orbit-x">
                    <span class="preloader-dot preloader-dot-1"></span>
                </div>
                <div class="preloader-orbit preloader-orbit-y">
                    <span class="preloader-dot preloader-dot-2"></span>
                </div>
                <div class="preloader-logo">
                    <img src="{{ asset('logo1.png') }}" alt="Naveed Rustam logo" class="h-14 w-24 bg-transparent">
                </div>
            </div>
        </div>
    </div>
    <div id="scroll-progress" class="pointer-events-none fixed left-0 top-0 z-[70] h-1 w-full origin-left scale-x-0 bg-gradient-to-r from-blue-500 via-cyan-400 to-indigo-500"></div>
    <nav id="navbar" class="fixed top-0 z-50 w-full py-2 bg-transparent transition-all duration-250">
        <div class="mx-auto flex w-full max-w-7xl items-center justify-between px-4 sm:px-6 lg:px-8">
            <a href="#home" class="flex items-center gap-3">
                <span id="logo-badge" class="rounded-md bg-slate-950/90 transition-colors duration-300">
                    <!-- <i class="fa-solid fa-terminal" aria-hidden="true"></i> -->
                    <img src="{{asset('logo1.png')}}" alt="logo1.png" class="h-12 w-20 bg-transparent">
                </span>
                <!-- <span class="bg-gradient-to-r from-blue-400 to-purple-500 bg-clip-text text-xl font-bold text-transparent">Naveed Rustam</span> -->
            </a>

            <div class="hidden items-center gap-2 md:flex">
                <a href="#home" class="rounded-md px-3 py-2 text-sm text-gray-300 transition hover:bg-white/10 hover:text-white">Home</a>
                <a href="#about" class="rounded-md px-3 py-2 text-sm text-gray-300 transition hover:bg-white/10 hover:text-white">About</a>
                <a href="#services" class="rounded-md px-3 py-2 text-sm text-gray-300 transition hover:bg-white/10 hover:text-white">Services</a>
                <a href="#experience" class="rounded-md px-3 py-2 text-sm text-gray-300 transition hover:bg-white/10 hover:text-white">Experience</a>
                <a href="#skills" class="rounded-md px-3 py-2 text-sm text-gray-300 transition hover:bg-white/10 hover:text-white">Skills</a>
                <a href="#projects" class="rounded-md px-3 py-2 text-sm text-gray-300 transition hover:bg-white/10 hover:text-white">Projects</a>
                <a href="#contact" class="rounded-md px-3 py-2 text-sm text-gray-300 transition hover:bg-white/10 hover:text-white">Contact</a>
                <a href="{{asset('resume.pdf')}}" download="Naveed_Rustam_Resume.pdf" class="ml-2 inline-flex items-center gap-2 rounded-full border border-white/10 bg-white/10 px-4 py-2 text-sm font-medium text-white transition hover:bg-white/20">
                    <span>Resume</span><i class="fa-solid fa-file-arrow-down" aria-hidden="true"></i>
                </a>
            </div>

            <div class="flex items-center gap-3 md:hidden">
                <a href="{{asset('resume.pdf') }}" download="Naveed_Rustam_Resume.pdf" class="inline-flex items-center gap-1.5 rounded-full border border-white/10 bg-white/10 px-3 py-1.5 text-xs font-medium text-white">
                    <span>Resume</span><i class="fa-solid fa-file-arrow-down" aria-hidden="true"></i>
                </a>
                <button id="menu-toggle" type="button" aria-expanded="false" aria-controls="mobile-menu" class="rounded-md p-2 text-gray-300 transition hover:bg-white/10 hover:text-white">
                    <i id="menu-toggle-icon" class="fa-solid fa-bars text-lg" aria-hidden="true"></i>
                </button>
            </div>
        </div>

        <div id="mobile-menu" class="glass-dark mx-4 mt-3 hidden rounded-xl border border-white/10 p-3 md:hidden">
            <a href="#home" class="block rounded-md px-3 py-2 text-sm text-gray-300 transition hover:bg-white/10 hover:text-white">Home</a>
            <a href="#about" class="block rounded-md px-3 py-2 text-sm text-gray-300 transition hover:bg-white/10 hover:text-white">About</a>
            <a href="#services" class="block rounded-md px-3 py-2 text-sm text-gray-300 transition hover:bg-white/10 hover:text-white">Services</a>
            <a href="#experience" class="block rounded-md px-3 py-2 text-sm text-gray-300 transition hover:bg-white/10 hover:text-white">Experience</a>
            <a href="#skills" class="block rounded-md px-3 py-2 text-sm text-gray-300 transition hover:bg-white/10 hover:text-white">Skills</a>
            <a href="#projects" class="block rounded-md px-3 py-2 text-sm text-gray-300 transition hover:bg-white/10 hover:text-white">Projects</a>
            <a href="#contact" class="block rounded-md px-3 py-2 text-sm text-gray-300 transition hover:bg-white/10 hover:text-white">Contact</a>
        </div>
    </nav>

    <main class="relative z-10">
        <div class="w-full">
           <section id="home" class="relative flex min-h-[100dvh] items-center overflow-hidden bg-slate-950 px-4 pt-24 sm:px-6 sm:pt-28 lg:px-8">
              <!-- <div class="pointer-events-none absolute inset-0 overflow-hidden">
                <div class="parallax absolute left-1/4 top-1/4 h-96 w-96 rounded-full bg-blue-500/10 blur-3xl" data-depth="8"></div>
                <div class="parallax absolute bottom-1/4 right-1/4 h-96 w-96 rounded-full bg-purple-500/10 blur-3xl" data-depth="12"></div>
                <div class="parallax floating absolute right-[20%] top-24 rounded-xl border border-white/10 bg-slate-900/70 px-4 py-3 text-blue-300" data-depth="14">&lt;/&gt;</div>
                <div class="parallax floating delay-1 absolute left-[12%] top-56 rounded-xl border border-white/10 bg-slate-900/70 px-4 py-3 text-purple-300" data-depth="18">DB</div>
                <div class="parallax floating delay-2 absolute bottom-32 left-[18%] rounded-xl border border-white/10 bg-slate-900/70 px-4 py-3 text-indigo-300" data-depth="10">API</div>
              </div> -->

              <div class="mx-auto grid w-full max-w-7xl items-center gap-10 lg:grid-cols-2 lg:gap-16">
                <div class="reveal text-center lg:text-left">
                    <span class="mb-6 inline-block rounded-full border border-blue-500/20 bg-blue-500/10 px-3 py-1 text-sm font-medium text-blue-400">Available for Freelance &amp; Full-time</span>
                    <p class="mb-2 text-lg leading-relaxed text-white sm:text-xl">Hi, I'm</p>
                    <h1 class="mb-6 text-4xl font-bold leading-tight sm:text-5xl md:text-6xl lg:text-7xl">
                        <span class="bg-gradient-to-r from-blue-400 via-purple-400 to-indigo-400 bg-clip-text text-transparent">Naveed Rustam</span>
                    </h1>
                    <p class="mx-auto mb-10 max-w-2xl text-lg leading-relaxed text-gray-400 lg:mx-0 sm:text-xl">
                        Full Stack Developer specializing in <span class="font-semibold text-white">PHP</span> and <span class="font-semibold text-white">Laravel</span>.
                        <span class="block pt-1">
                            <span id="typing-role" class="font-medium text-cyan-300" data-roles='["Building scalable apps","Designing clean APIs","Crafting interactive UIs"]'>Building scalable apps</span><span class="typing-cursor text-cyan-300">|</span>
                        </span>
                    </p>
                    <div class="flex flex-col items-stretch gap-3 sm:flex-row sm:items-center lg:justify-start">
                        <a href="#projects" class="w-full rounded-full bg-white px-4 py-2 text-center font-bold text-slate-950 transition hover:scale-105 hover:bg-blue-200 sm:w-auto">
                            View Work<i class="fa-solid fa-briefcase ml-2" aria-hidden="true"></i>
                        </a>
                        <a href="#contact" class="w-full rounded-full border border-white/10 bg-white/5 px-4 py-2 text-center font-medium text-white transition hover:bg-white/10 sm:w-auto">
                            Contact Me<i class="fa-solid fa-paper-plane ml-2" aria-hidden="true"></i>
                        </a>
                        <a href="{{asset('resume.pdf')}}" download="Naveed_Rustam_Resume.pdf" title="Download Resume" class="mx-auto grid h-13 w-13 place-items-center rounded-2xl border border-white/10 bg-white/5 text-white transition hover:bg-white/10 sm:mx-0">
                            <i class="fa-solid fa-file-arrow-down text-lg" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>

                <div class="reveal relative mx-auto w-full max-w-md">
                    <div class="relative mx-auto h-64 w-64 sm:h-80 sm:w-80 md:h-96 md:w-96">
                        <div class="absolute inset-0 rounded-full bg-gradient-to-tr from-blue-500 to-purple-600 opacity-50 blur-2xl"></div>
                        <div class="relative h-full w-full overflow-hidden rounded-full border-4 border-white/10 bg-slate-900/50">
                            <img src="{{asset('Naveed-image.png')}}" alt="Naveed Rustam" class="h-full w-full object-cover">
                        </div>
                    </div>
                </div>
              </div>

              <div class="pointer-events-none absolute bottom-10 left-1/2 -translate-x-1/2">
                <!-- <div class="flex h-10 w-6 justify-center rounded-full border-2 border-white/20 p-2">
                    <div class="h-1.5 w-1.5 animate-bounce rounded-full bg-blue-400"></div>
                </div> -->
              </div>
           </section>
        </div>

        <section id="about" class="relative flex min-h-screen items-center bg-slate-950 py-20">
            <div class="pointer-events-none absolute right-0 top-0 h-full w-1/3 bg-blue-500/5 blur-3xl"></div>
            <div class="relative z-10 mx-auto w-full max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="reveal mb-16 text-center">
                    <h2 class="mb-6 text-3xl font-bold md:text-5xl">About Me</h2>
                    <div class="mx-auto h-1 w-20 rounded-full bg-blue-500"></div>
                </div>

                <div class="grid items-center gap-12 md:grid-cols-2">
                    <div class="reveal">
                        <h3 class="mb-4 text-2xl font-semibold text-blue-400">Transforming Ideas into Digital Reality</h3>
                        <p class="mb-6 text-lg leading-relaxed text-gray-300">
                            I am a passionate Full Stack Developer with deep expertise in <span class="font-bold text-white">Laravel (PHP)</span>.
                            I build high-performance web applications that are visually strong, robust, and scalable.
                        </p>
                        <p class="leading-relaxed text-gray-400">
                            With strong backend architecture and modern frontend practice, I bridge complex logic with intuitive user experience.
                        </p>
                    </div>

                    <div class="grid gap-6">
                        <div class="reveal tilt-card rounded-2xl border border-white/10 bg-white/5 p-6 backdrop-blur-sm transition hover:bg-white/10">
                            <h4 class="mb-2 text-lg font-semibold text-white">Clean Code</h4>
                            <p class="text-sm text-gray-400">Writing maintainable, scalable, and efficient code is my priority.</p>
                        </div>
                        <div class="reveal tilt-card rounded-2xl border border-white/10 bg-white/5 p-6 backdrop-blur-sm transition hover:bg-white/10">
                            <h4 class="mb-2 text-lg font-semibold text-white">Modern Web</h4>
                            <p class="text-sm text-gray-400">Building responsive applications with current frameworks and standards.</p>
                        </div>
                        <div class="reveal tilt-card rounded-2xl border border-white/10 bg-white/5 p-6 backdrop-blur-sm transition hover:bg-white/10">
                            <h4 class="mb-2 text-lg font-semibold text-white">Performance</h4>
                            <p class="text-sm text-gray-400">Optimizing each layer for speed, reliability, and long-term maintainability.</p>
                        </div>
                    </div>
                </div>

                <div class="mt-12 grid grid-cols-1 gap-4 sm:grid-cols-3">
                    <article class="reveal rounded-2xl border border-white/10 bg-white/5 p-5 text-center backdrop-blur-sm">
                        <p class="text-3xl font-bold text-blue-300"><span class="counter" data-counter="10">0</span>+</p>
                        <p class="mt-2 text-sm text-gray-400">Delivered Projects</p>
                    </article>
                    <article class="reveal rounded-2xl border border-white/10 bg-white/5 p-5 text-center backdrop-blur-sm">
                        <p class="text-3xl font-bold text-cyan-300"><span class="counter" data-counter="2">0</span>+</p>
                        <p class="mt-2 text-sm text-gray-400">Years Experience</p>
                    </article>
                    <article class="reveal rounded-2xl border border-white/10 bg-white/5 p-5 text-center backdrop-blur-sm">
                        <p class="text-3xl font-bold text-purple-300"><span class="counter" data-counter="10">0</span>+</p>
                        <p class="mt-2 text-sm text-gray-400">Happy Clients</p>
                    </article>
                </div>
            </div>
        </section>

        <section id="services" class="relative flex min-h-screen items-center py-20">
            <div class="relative z-10 mx-auto w-full max-w-6xl px-4">
                <div class="reveal mb-16 text-center">
                    <span class="text-sm font-semibold uppercase tracking-wider text-blue-500">What I Do</span>
                    <h2 class="mt-2 mb-4 text-3xl font-bold md:text-5xl">My Services</h2>
                    <p class="mx-auto max-w-2xl text-gray-400">I combine technical expertise with design sensibilities to build complete digital solutions.</p>
                </div>

                <div class="grid gap-8 md:grid-cols-3">
                    <article class="reveal tilt-card rounded-2xl border border-white/10 bg-white/5 p-8 backdrop-blur-sm transition hover:border-white/20">
                        <h3 class="mb-4 text-xl font-bold text-blue-300">Frontend Development</h3>
                        <p class="mb-6 leading-relaxed text-gray-400">Building responsive, interactive interfaces using Tailwind CSS and modern JavaScript.</p>
                        <p class="text-xs text-gray-300"> HTML, CSS ,Tailwind,JavaScript</p>
                    </article>
                    <article class="reveal tilt-card rounded-2xl border border-white/10 bg-white/5 p-8 backdrop-blur-sm transition hover:border-white/20">
                        <h3 class="mb-4 text-xl font-bold text-red-300">Backend Development</h3>
                        <p class="mb-6 leading-relaxed text-gray-400">Designing scalable server architecture, APIs, and database schemas with Laravel.</p>
                        <p class="text-xs text-gray-300">PHP, Laravel, MySQL</p>
                    </article>
                    <article class="reveal tilt-card rounded-2xl border border-white/10 bg-white/5 p-8 backdrop-blur-sm transition hover:border-white/20">
                        <h3 class="mb-4 text-xl font-bold text-purple-300">Full Stack Solutions</h3>
                        <p class="mb-6 leading-relaxed text-gray-400">Delivering end-to-end products from concept to deployment with production-focused quality.</p>
                        <p class="text-xs text-gray-300">Architecture, Security, Deployment</p>
                    </article>
                </div>
            </div>
        </section>
        <section id="experience" class="timeline-section relative min-h-screen scroll-mt-28 bg-slate-950/50 py-20 md:py-24">
            <div class="relative z-10 mx-auto w-full max-w-6xl px-4">
                <div class="reveal mb-16 text-center">
                    <span class="text-sm font-semibold uppercase tracking-wider text-blue-500">My Journey</span>
                    <h2 class="mt-2 text-3xl font-bold md:text-5xl">Experience &amp; Education</h2>
                </div>

                <div class="relative mx-auto max-w-5xl">
                    <div class="timeline-line absolute bottom-0 left-5 top-0 w-px bg-gradient-to-b from-cyan-400/70 via-blue-500/40 to-purple-500/70 md:left-1/2 md:-translate-x-1/2"></div>

                    <div class="space-y-8 md:space-y-10">
                        <article class="timeline-entry relative pl-10 md:grid md:grid-cols-2 md:gap-12 md:pl-0">
                            <div class="timeline-card-cyan rounded-2xl border border-white/10 bg-white/5 p-6 backdrop-blur-sm md:mr-10 md:text-left">
                                <p class="mb-2 text-sm text-blue-400">2025 - Present</p>
                                <h3 class="text-xl font-bold text-white">Full Stack Developer</h3>
                                <p class="mb-3 text-blue-500">Freelance &amp; Contract</p>
                                <p class="text-sm leading-relaxed text-gray-400">Developing high-performance web applications for diverse clients, focused on scalability and clean user experience.</p>
                            </div>
                            <div class="hidden md:block"></div>
                            <span class="timeline-dot absolute left-5 top-8 h-4 w-4 -translate-x-1/5 rounded-full border-4 border-slate-950 bg-cyan-400 shadow-[0_0_0_6px_rgba(34,211,238,0.25)] md:left-1/2"></span>
                        </article>

                        <article class="timeline-entry relative pl-10 md:grid md:grid-cols-2 md:gap-12 md:pl-0">
                            <div class="hidden md:block"></div>
                            <div class="timeline-card-blue rounded-2xl border border-white/10 bg-white/5 p-6 backdrop-blur-sm md:ml-10">
                                <p class="mb-2 text-sm text-blue-400">May 2025 - July 2025</p>
                                <h3 class="text-xl font-bold text-white">PHP Laravel Intern</h3>
                                <p class="mb-3 text-blue-500">Bright-Line Solutions</p>
                                <p class="text-sm leading-relaxed text-gray-400">Completed a backend-focused internship centered on Laravel and PHP development practices.</p>
                            </div>
                            <span class="timeline-dot absolute left-5 top-8 h-4 w-4 -translate-x-1/5 rounded-full border-4 border-slate-950 bg-blue-400 shadow-[0_0_0_6px_rgba(59,130,246,0.25)] md:left-1/2"></span>
                        </article>

                        <article class="timeline-entry relative pl-10 md:grid md:grid-cols-2 md:gap-12 md:pl-0">
                            <div class="timeline-card-purple rounded-2xl border border-white/10 bg-white/5 p-6 backdrop-blur-sm md:mr-10 md:text-left ">
                                <p class="mb-2 text-sm text-blue-400">August 2025 - Present</p>
                                <h3 class="text-xl font-bold text-white">Laravel Developer</h3>
                                <p class="mb-3 text-blue-500">Bright-Line Solutions</p>
                                <p class="text-sm leading-relaxed text-gray-400">Completed a backend-focused role centered on Laravel and PHP development practices.</p>
                            </div>
                            <div class="hidden md:block"></div>
                            <span class="timeline-dot absolute left-5 top-8 h-4 w-4 -translate-x-1/5 rounded-full border-4 border-slate-950 bg-purple-400 shadow-[0_0_0_6px_rgba(168,85,247,0.25)] md:left-1/2"></span>
                        </article>
                         <article class="timeline-entry relative pl-10 md:grid md:grid-cols-2 md:gap-12 md:pl-0">
                            <div class="hidden md:block"></div>
                            <div class="timeline-card-blue rounded-2xl border border-white/10 bg-white/5 p-6 backdrop-blur-sm md:ml-10">
                                <p class="mb-2 text-sm text-blue-400">2021 - 2025</p>
                                <h3 class="text-xl font-bold text-white">BS Computer Science</h3>
                                <p class="mb-3 text-blue-500">Government College University Faisalabad</p>
                                <p class="text-sm leading-relaxed text-gray-400">Graduated with focus on software engineering, database systems, and distributed systems capstone work.</p>
                            </div>
                            <span class="timeline-dot absolute left-5 top-8 h-4 w-4 -translate-x-1/5 rounded-full border-4 border-slate-950 bg-blue-400 shadow-[0_0_0_6px_rgba(59,130,246,0.25)] md:left-1/2"></span>
                        </article>
                    </div>
                </div>
            </div>
        </section>

        <section id="skills" class="relative flex min-h-screen items-center bg-slate-950 py-20">
            <div class="pointer-events-none absolute bottom-0 left-0 h-1/2 w-full bg-gradient-to-t from-blue-900/10 to-transparent"></div>
            <div class="relative z-10 mx-auto w-full max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="reveal mb-16 text-center">
                    <h2 class="mb-6 text-3xl font-bold md:text-5xl">Technical Skills</h2>
                    <p class="mx-auto max-w-2xl text-gray-400">A practical toolkit for building robust applications, specialized in <span class="font-semibold text-red-400">Laravel ecosystem</span>.</p>
                </div>

                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 md:gap-6">
                    <div class="reveal rounded-2xl border border-white/5 bg-red-500/10 p-6"><h3 class="mb-2 text-xl font-bold text-red-400">Laravel</h3><p class="text-sm text-gray-400">Backend • Expert</p></div>
                    <div class="reveal rounded-2xl border border-white/5 bg-purple-500/10 p-6"><h3 class="mb-2 text-xl font-bold text-purple-300">PHP</h3><p class="text-sm text-gray-400">Backend • Expert</p></div>
                    <div class="reveal rounded-2xl border border-white/5 bg-blue-500/10 p-6"><h3 class="mb-2 text-xl font-bold text-blue-300">JavaScript</h3><p class="text-sm text-gray-400">Language • Advanced</p></div>
                    <div class="reveal rounded-2xl border border-white/5 bg-cyan-500/10 p-6"><h3 class="mb-2 text-xl font-bold text-cyan-300">Tailwind CSS</h3><p class="text-sm text-gray-400">Styling • Advanced</p></div>
                    <div class="reveal rounded-2xl border border-white/5 bg-orange-500/10 p-6"><h3 class="mb-2 text-xl font-bold text-orange-300">MySQL</h3><p class="text-sm text-gray-400">Database • Advanced</p></div>
                    <div class="reveal rounded-2xl border border-white/5 bg-emerald-500/10 p-6"><h3 class="mb-2 text-xl font-bold text-emerald-300">API Design</h3><p class="text-sm text-gray-400">Architecture • Intermediate</p></div>
                    <div class="reveal rounded-2xl border border-white/5 bg-slate-500/10 p-6"><h3 class="mb-2 text-xl font-bold text-gray-300">Git</h3><p class="text-sm text-gray-400">Version Control • Advanced</p></div>
                    <div class="reveal rounded-2xl border border-white/5 bg-indigo-500/10 p-6"><h3 class="mb-2 text-xl font-bold text-indigo-300">React (Legacy)</h3><p class="text-sm text-gray-400">Frontend • Intermediate</p></div>
                </div>
            </div>
        </section>

        <section id="projects " class="relative min-h-screen bg-slate-950 py-20 px-4 sm:px-6 lg:px-8">
            <div class="mx-auto max-w-7xl">
                <div class="reveal mb-16 text-center">
                    <h2 class="mb-6 text-3xl font-bold md:text-5xl">Featured Projects</h2>
                    <div class="mx-auto h-1 w-20 rounded-full bg-purple-500"></div>
                </div>

                <div class="grid gap-8 md:grid-cols-2 xl:grid-cols-3">
                    <article class="reveal tilt-card overflow-hidden rounded-2xl border border-white/10 bg-white/5">
                        <div class="h-44 bg-gradient-to-br from-blue-500/30 to-purple-500/30">
                            <img src="{{asset('medicare logo.png')}}" alt="medicare">
                        </div>
                        <div class="space-y-4 border-t border-white/10 bg-slate-950/60 p-6">
                            <h3 class="text-xl font-bold">MediCare E-Commerce</h3>
                            <p class="text-sm text-gray-400">Responsive e-commerce platform with authentication, payments, admin dashboard, and inventory management.</p>
                            <p class="text-xs text-gray-300">PHP • HTML • CSS • JavaScript</p>
                            <div class="flex gap-4">
                                <a href="https://github.com/NaveedRustam/medicare-ecommerce" target="_blank" rel="noopener noreferrer" class="text-sm font-medium text-white transition hover:text-blue-400">Code</a>
                                <button type="button" data-project="mystic" class="open-project-modal text-sm font-medium text-white transition hover:text-purple-400">Demo</button>
                            </div>
                        </div>
                    </article>

                    <article class="reveal tilt-card overflow-hidden rounded-2xl border border-white/10 bg-white/5">
                        <div class="h-44 bg-gradient-to-br from-indigo-500/30 to-pink-500/30">
                            <img src="{{asset('logo1.png')}}" alt="">
                        </div>
                        <div class="space-y-4 border-t border-white/10 bg-slate-950/60 p-6">
                            <h3 class="text-xl font-bold">Library Management System</h3>
                            <p class="text-sm text-gray-400">Complete Laravel CRUD system with Admin and User panels for books, borrowing, and notifications.</p>
                            <p class="text-xs text-gray-300">Laravel • Blade • PHP • MySQL</p>
                            <div class="flex gap-4">
                                <a href="https://github.com/huxi786/Libraby-System-" target="_blank" rel="noopener noreferrer" class="text-sm font-medium text-white transition hover:text-blue-400">Code</a>
                                <button type="button" data-project="library" class="open-project-modal text-sm font-medium text-white transition hover:text-purple-400">Demo</button>
                            </div>
                        </div>
                    </article>

                    <article class="reveal tilt-card overflow-hidden rounded-2xl border border-white/10 bg-white/5">
                        <div class="h-44 bg-gradient-to-br from-emerald-500/30 to-teal-500/30">
                            <img src="{{asset('book-mart.png')}}" alt="">
                        </div>
                        <div class="space-y-4 border-t border-white/10 bg-slate-950/60 p-6">
                            <h3 class="text-xl font-bold">E-Book Mart</h3>
                            <p class="text-sm text-gray-400">E-Commerce website with Real-time dashboard with search, API integration, and input validation handling .</p>
                            <p class="text-xs text-gray-300"> Laravel • Blade • PHP • MySQL • JavaScript • CSS • API</p>
                            <div class="flex gap-4">
                                <a href="https://github.com/NaveedRustam/SmartShop" target="_blank" rel="noopener noreferrer" class="text-sm font-medium text-white transition hover:text-blue-400">Code</a>
                                <a href="https://github.com/NaveedRustam/SmartShop" target="_blank" rel="noopener noreferrer" class="text-sm font-medium text-white transition hover:text-purple-400">Demo</a>
                            </div>
                        </div>
                    </article>

                    <article class="reveal tilt-card overflow-hidden rounded-2xl border border-white/10 bg-white/5">
                        <div class="h-44 bg-gradient-to-br from-red-500/30 to-blue-500/30"></div>
                        <div class="space-y-4 border-t border-white/10 bg-slate-950/60 p-6">
                            <h3 class="text-xl font-bold">Truck Dispatch System</h3>
                            <p class="text-sm text-gray-400">Truck dispatch application built in Laravel with queueing and contact management features.</p>
                            <p class="text-xs text-gray-300">HTML • CSS • JavaScript • PHP • Laravel • Blade • MySQL</p>
                            <a href="https://github.com/NaveedRustam/Truck-Dispatch-System" target="_blank" rel="noopener noreferrer" class="text-sm font-medium text-white transition hover:text-blue-400">Code</a>
                            <a href="https://github.com/NaveedRustam/Truck-Dispatch-System" target="_blank" rel="noopener noreferrer" class="text-sm font-medium text-white transition hover:text-purple-400">Demo</a>
                        </div>
                    </article>

                    <article class="reveal tilt-card overflow-hidden rounded-2xl border border-white/10 bg-white/5 md:col-span-2 xl:col-span-1">
                        <div class="h-44 bg-gradient-to-br from-orange-500/30 to-red-500/30"></div>
                        <div class="space-y-4 border-t border-white/10 bg-slate-950/60 p-6">
                            <h3 class="text-xl font-bold">Smart Calculator</h3>
                            <p class="text-sm text-gray-400">Pure JavaScript calculator with keyboard support and error handling.</p>
                            <p class="text-xs text-gray-300">HTML • CSS • JavaScript</p>
                            <div class="flex gap-4">
                                <a href="https://github.com/huxi786/Calculator" target="_blank" rel="noopener noreferrer" class="text-sm font-medium text-white transition hover:text-blue-400">Code</a>
                                <a href="https://huxi786.github.io/Calculator/" target="_blank" rel="noopener noreferrer" class="text-sm font-medium text-white transition hover:text-purple-400">Demo</a>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </section>
        <section id="contact" class="relative flex min-h-screen items-center overflow-hidden py-20">
            <div class="absolute inset-0 -z-20 bg-slate-950"></div>
            <div class="absolute inset-0 -z-10 bg-[radial-gradient(ellipse_80%_80%_at_50%_-20%,rgba(59,130,246,0.15),rgba(255,255,255,0))]"></div>
            <div class="absolute bottom-0 right-0 -z-10 h-96 w-96 animate-pulse rounded-full bg-blue-600/10 blur-3xl"></div>

            <div class="relative z-10 mx-auto w-full max-w-6xl px-4">
                <div class="reveal mb-16 text-center">
                    <span class="text-sm font-semibold uppercase tracking-wider text-blue-500">Get in Touch</span>
                    <h2 class="mt-2 bg-gradient-to-r from-white to-gray-400 bg-clip-text text-4xl font-bold text-transparent md:text-5xl">Let's Work Together</h2>
                    <p class="mx-auto mt-4 max-w-2xl text-lg leading-relaxed text-gray-400">
                        Have a project in mind or want to discuss an opportunity? I am open to new projects and collaborations.
                    </p>
                </div>

                <div class="grid grid-cols-1 gap-8 lg:grid-cols-12 lg:gap-12">
                    <div class="reveal space-y-6 lg:col-span-5">
                        <div class="flex h-full flex-col justify-between rounded-2xl border border-white/10 bg-white/5 p-5 backdrop-blur-xl sm:p-8">
                            <div class="space-y-6 sm:space-y-8">
                                <div>
                                    <h3 class="mb-6 text-2xl font-bold text-white">Contact Info</h3>
                                    <div class="space-y-4">
                                        <div class="rounded-xl p-3 hover:bg-white/5">
                                            <p class="text-sm text-gray-400"><i class="fa-regular fa-envelope mr-2"  aria-hidden="true"></i>Email Me</p>
                                            <a id="contact-email-link" class="break-all text-base font-semibold text-blue-400 no-underline hover:underline sm:text-lg" href="https://mail.google.com/mail/?view=cm&fs=1&to=naveedrustam02@gmail.com" target="_blank" rel="noopener noreferrer" data-click-response="Opening email composer...">naveedrustam02@gmail.com</a>
                                          
                                        </div>
                                        <div class="rounded-xl p-3 hover:bg-white/5">
                                            <p class="text-sm text-gray-400"><i class="fa-solid fa-phone mr-2" aria-hidden="true"></i>Call Me</p>
                                            <a id="contact-phone-link" class="text-base font-semibold text-emerald-400 no-underline hover:underline sm:text-lg" href="tel:+923091509256" target="_blank" rel="noopener noreferrer" data-click-response="Opening dialer...">0309 1509256</a>
                                        </div>
                                        <div class="rounded-xl p-3 hover:bg-white/5">
                                            <p class="text-sm text-gray-400"><i class="fa-solid fa-location-dot mr-2" aria-hidden="true"></i>Location</p>
                                            <a href="https://maps.google.com/?q=Lahore,+Pakistan" target="_blank" rel="noopener noreferrer" class="text-base font-semibold text-purple-400 no-underline hover:underline sm:text-lg" data-click-response="Opening map...">Lahore, Pakistan</a>
                                        </div>
                                    </div>
                                </div>

                                <!-- <div>
                                    <h3 class="mb-4 text-xl font-semibold text-white">Social Profiles</h3>
                                    <div class="flex gap-4">
                                        <a href="https://github.com/NaveedRustam" target="_blank" rel="noopener noreferrer" class="rounded-lg border border-white/10 bg-white/5 px-4 py-2 text-sm text-gray-300 transition hover:bg-white/10 hover:text-white" data-click-response="Opening GitHub profile...">
                                            <i class="fa-brands fa-github mr-2" aria-hidden="true"></i>GitHub
                                        </a>
                                        <a href="https://www.linkedin.com/in/naveedrustam/" target="_blank" rel="noopener noreferrer" class="rounded-lg border border-white/10 bg-white/5 px-4 py-2 text-sm text-gray-300 transition hover:bg-white/10 hover:text-white" data-click-response="Opening LinkedIn profile...">
                                            <i class="fa-brands fa-linkedin mr-2" aria-hidden="true"></i>LinkedIn
                                        </a>
                                    </div>
                                    <p id="contact-click-status" class="mt-3 hidden rounded-lg border border-cyan-500/20 bg-cyan-500/10 px-3 py-2 text-xs font-medium text-cyan-300"></p>
                                </div> -->
                            </div>
                            <p class="mt-4 border-t border-white/10 pt-8 text-sm text-gray-400">Looking for a custom solution? Send me an email and I will get back quickly.</p>
                        </div>
                    </div>

                    <div class="reveal col-span-1 lg:col-span-7">
                        <div class="rounded-2xl border border-white/10 bg-white/5 p-5 backdrop-blur-xl sm:p-8 md:p-10">
                            <form id="contact-form" method="POST" action="{{ route('contact.send') }}" class="space-y-6">
                                @csrf
                                <div class="grid gap-6 md:grid-cols-2">
                                    <div class="space-y-2">
                                        <label for="name" class="ml-1 text-sm font-medium text-gray-300">Your Name</label>
                                        <input id="name" name="name" type="text" required placeholder="John Doe" class="w-full rounded-xl border border-white/10 bg-slate-950/50 px-4 py-3 text-white outline-none transition placeholder:text-gray-600 focus:border-blue-500 focus:ring-1 focus:ring-blue-500">
                                    </div>
                                    <div class="space-y-2">
                                        <label for="email" class="ml-1 text-sm font-medium text-gray-300">Your Email</label>
                                        <input id="email" name="email" type="email" required placeholder="john@example.com" class="w-full rounded-xl border border-white/10 bg-slate-950/50 px-4 py-3 text-white outline-none transition placeholder:text-gray-600 focus:border-blue-500 focus:ring-1 focus:ring-blue-500">
                                    </div>
                                </div>

                                <div class="space-y-2">
                                    <label for="message" class="ml-1 text-sm font-medium text-gray-300">Your Message</label>
                                    <textarea id="message" name="message" rows="6" required placeholder="Tell me about your project..." class="w-full resize-none rounded-xl border border-white/10 bg-slate-950/50 px-4 py-3 text-white outline-none transition placeholder:text-gray-600 focus:border-blue-500 focus:ring-1 focus:ring-blue-500"></textarea>
                                </div>

                                <p id="form-status" class="{{ session('contact_status') ? '' : 'hidden' }} rounded-xl border border-green-500/20 bg-green-500/10 p-4 text-center text-sm font-medium text-green-400">{{ session('contact_status') }}</p>

                                <button type="submit" class="w-full rounded-xl bg-gradient-to-r from-blue-600 to-cyan-600 px-8 py-4 font-bold text-white shadow-lg shadow-blue-500/25 transition hover:-translate-y-1 hover:from-blue-500 hover:to-cyan-500">
                                    <i class="fa-solid fa-paper-plane mr-2" aria-hidden="true"></i>Send Message
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <footer class="relative overflow-hidden border-t border-white/10 bg-slate-950 py-2">
            <div class="pointer-events-none absolute inset-0 bg-[radial-gradient(circle_at_20%_20%,rgba(59,130,246,0.16),transparent_40%),radial-gradient(circle_at_80%_10%,rgba(168,85,247,0.14),transparent_40%)]"></div>
            <div class="relative z-10 mx-auto w-full max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="p-8 ">
                    <div class="grid gap-10 lg:grid-cols-12">
                        <div class="reveal lg:col-span-5">
                            <a href="#home" class="flex justify-center  gap-3">
                               <span id="logo-badge" class="">
                                    <!-- <i class="fa-solid fa-terminal" aria-hidden="true"></i>  -->
                                     <img src="{{asset('logo1.png')}}" alt="logo1.png" class="h-14 w-30 bg-transparent">
                               </span>
                                  <!-- <span class="bg-gradient-to-r from-blue-400 to-purple-500 bg-clip-text text-xl font-bold text-transparent">Naveed Rustam</span> -->
                            </a>
                            <p class="mt-5 max-w-md leading-relaxed text-gray-400">
                                Full Stack Developer focused on fast, scalable products with clean backend architecture and polished frontend experience.
                            </p>
                            <div class="mt-6 flex flex-wrap gap-3">
                                <span class="rounded-full border border-blue-500/30 bg-blue-500/10 px-3 py-1 text-xs font-semibold text-blue-300">Laravel</span>
                                <span class="rounded-full border border-blue-500/30 bg-blue-500/10 px-3 py-1 text-xs font-semibold text-blue-300">Php</span>
                                <span class="rounded-full border border-cyan-500/30 bg-cyan-500/10 px-3 py-1 text-xs font-semibold text-cyan-300">JavaScript</span>
                                <span class="rounded-full border border-cyan-500/30 bg-cyan-500/10 px-3 py-1 text-xs font-semibold text-cyan-300">Node.js</span>
                                <span class="rounded-full border border-fuchsia-500/30 bg-fuchsia-500/10 px-3 py-1 text-xs font-semibold text-fuchsia-300">Tailwind CSS</span>
                                <span class="rounded-full border border-fuchsia-500/30 bg-fuchsia-500/10 px-3 py-1 text-xs font-semibold text-fuchsia-300">MySQL</span>
                                <span class="rounded-full border border-fuchsia-500/30 bg-fuchsia-500/10 px-3 py-1 text-xs font-semibold text-fuchsia-300">Bootstrap</span>
                                <span class="rounded-full border border-fuchsia-500/30 bg-fuchsia-500/10 px-3 py-1 text-xs font-semibold text-fuchsia-300">Git</span>
                                <span class="rounded-full border border-fuchsia-500/30 bg-fuchsia-500/10 px-3 py-1 text-xs font-semibold text-fuchsia-300">GitHub</span>
                                <span class="rounded-full border border-fuchsia-500/30 bg-fuchsia-500/10 px-3 py-1 text-xs font-semibold text-fuchsia-300">GitLab</span>
                                <span class="rounded-full border border-fuchsia-500/30 bg-fuchsia-500/10 px-3 py-1 text-xs font-semibold text-fuchsia-300">VS Code</span>
                            </div>
                        </div>

                        <div class="reveal lg:col-span-3">
                            <h3 class="mb-4 text-xl font-bold tracking-wider text-white">Navigation</h3>
                            <ul class="space-y-2">
                                <li><a href="#about" class="inline-block rounded-md px-3 py-2 text-sm text-gray-300 transition hover:bg-white/10 hover:text-white">About</a></li>
                                <li><a href="#services" class="inline-block rounded-md px-3 py-2 text-sm text-gray-300 transition hover:bg-white/10 hover:text-white">Services</a></li>
                                <li><a href="#projects" class="inline-block rounded-md px-3 py-2 text-sm text-gray-300 transition hover:bg-white/10 hover:text-white">Projects</a></li>
                                <li><a href="#contact" class="inline-block rounded-md px-3 py-2 text-sm text-gray-300 transition hover:bg-white/10 hover:text-white">Contact</a></li>
                            </ul>
                        </div>

                        <!-- <div class="reveal lg:col-span-2">
                            <h3 class="mb-4 text-sm font-semibold uppercase tracking-wider text-white">Contact</h3>
                            <ul class="space-y-2">
                                <li><a href="mailto:naveedrustam02@gmail.com" class="inline-block rounded-md px-3 py-2 text-sm text-gray-300 transition hover:bg-white/10 hover:text-white">naveedrustam02@gmail.com</a></li>
                                <li><a href="tel:+923091509256" class="inline-block rounded-md px-3 py-2 text-sm text-gray-300 transition hover:bg-white/10 hover:text-white">+92 309 1509256</a></li>
                                <li><a href="https://maps.google.com/?q=Lahore,+Pakistan" target="_blank" rel="noopener noreferrer" class="inline-block rounded-md px-3 py-2 text-sm text-gray-300 transition hover:bg-white/10 hover:text-white">Lahore, Pakistan</a></li>
                            </ul>
                        </div> -->

                        <div class="reveal lg:col-span-3">
                            <h3 class="mb-4 text-xl font-bold tracking-wider text-white">Stay Updated</h3>
                            <form id="footer-newsletter-form" class="space-y-3">
                                <label for="footer-email" class="sr-only">Email</label>
                                <input id="footer-email" name="footer-email" type="email" required placeholder="Enter your email" class="w-full rounded-xl border border-white/10 bg-slate-900/80 px-4 py-3 text-sm text-white outline-none transition placeholder:text-gray-500 focus:border-blue-500 focus:ring-1 focus:ring-blue-500">
                                <button type="submit" class="w-full rounded-xl border border-white/10 bg-white/10 px-4 py-3 text-sm font-semibold text-white transition hover:bg-white/20">
                                    <i class="fa-solid fa-paper-plane mr-2" aria-hidden="true"></i>Subscribe
                                </button>
                                <p id="footer-newsletter-status" class="hidden rounded-lg border border-cyan-500/20 bg-cyan-500/10 px-3 py-2 text-xs font-medium text-cyan-300"></p>
                            </form>
                            <div class="mt-4 flex gap-3">
                                <a href="https://github.com/NaveedRustam" target="_blank" rel="noopener noreferrer" class="grid h-10 w-10 place-items-center rounded-md border border-white/10 bg-white/5 text-gray-300 transition hover:bg-white/10 hover:text-white"><i class="fa-brands fa-github" aria-hidden="true"></i></a>
                                <a href="https://www.linkedin.com/in/naveedrustam/" target="_blank" rel="noopener noreferrer" class="grid h-10 w-10 place-items-center rounded-md border border-white/10 bg-white/5 text-gray-300 transition hover:bg-white/10 hover:text-white"><i class="fa-brands fa-linkedin-in" aria-hidden="true"></i></a>
                                <a href="https://mail.google.com/mail/?view=cm&fs=1&to=naveedrustam02@gmail.com" target="_blank" rel="noopener noreferrer" class="grid h-10 w-10 place-items-center rounded-md border border-white/10 bg-white/5 text-gray-300 transition hover:bg-white/10 hover:text-white"><i class="fa-regular fa-envelope" aria-hidden="true"></i></a>
                                <a href="https://wa.me/923091509256" target="_blank" rel="noopener noreferrer" class="grid h-10 w-10 place-items-center rounded-md border border-white/10 bg-white/5 text-gray-300 transition hover:bg-white/10 hover:text-white"><i class="fa-brands fa-whatsapp" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="mt-12 flex flex-col items-center justify-center gap-4 border-t border-white/10 pt-6 text-xs text-gray-500 md:flex-row">
                        <p>&copy; {{ date('Y') }}<span class="text-cyan-300"> Naveed Rustam</span>. All rights reserved.</p>
                        <!-- <p class="inline-flex items-center gap-2">Built with <span class="text-cyan-300">Laravel</span> and <span class="text-blue-300">Tailwind CSS</span></p> -->
                    </div>
                </div>
            </div>
        </footer>
    </main>

    <button id="scroll-top-button" type="button" aria-label="Back to top" class="fixed bottom-8 right-8 z-50 hidden rounded-xl border border-white/10 bg-blue-600 p-3 text-white shadow-lg transition hover:bg-blue-700 ">
       <i class="fa-solid fa-angle-up"></i>
    </button>

    @include('partials.project-modal')
</body>
</html>
