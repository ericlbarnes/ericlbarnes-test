<!DOCTYPE html>
<html lang="en" class="antialiased">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Eric L. Barnes</title>

    <link rel="icon" href="/favicon.ico" sizes="any">
    <link rel="icon" href="/favicon.svg" type="image/svg+xml">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600|playfair-display:400,500,600,700,800,900|playfair-display:400i,500i,600i,700i,800i,900i" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-zinc-950 text-zinc-300 min-h-screen flex items-center justify-center selection:bg-amber-500/20 selection:text-amber-200">

    {{-- Subtle grain overlay --}}
    <div class="fixed inset-0 opacity-[0.03] pointer-events-none" style="background-image: url('data:image/svg+xml,%3Csvg viewBox=%220 0 256 256%22 xmlns=%22http://www.w3.org/2000/svg%22%3E%3Cfilter id=%22noise%22%3E%3CfeTurbulence type=%22fractalNoise%22 baseFrequency=%220.9%22 numOctaves=%224%22 stitchTiles=%22stitch%22/%3E%3C/filter%3E%3Crect width=%22100%25%22 height=%22100%25%22 filter=%22url(%23noise)%22/%3E%3C/svg%3E'); background-repeat: repeat; background-size: 256px 256px;"></div>

    <div class="relative z-10 w-full max-w-xl mx-auto px-6 py-20">

        {{-- Name --}}
        <h1 class="font-serif text-5xl sm:text-6xl md:text-7xl font-bold text-zinc-100 tracking-tight leading-[1.1]">
            Eric L.<br>Barnes
        </h1>

        {{-- Divider --}}
        <div class="mt-8 mb-8 w-12 h-px bg-gradient-to-r from-amber-500/60 to-transparent"></div>

        {{-- Bio --}}
        <p class="text-lg sm:text-xl text-zinc-400 leading-relaxed max-w-md">
            Developer, creator, and founder. Building things for the web and writing about the journey along the way.
        </p>

        {{-- Social links --}}
        <nav class="mt-12 flex flex-wrap gap-6">
            <a href="https://twitter.com/ericlbarnes" target="_blank" rel="noopener noreferrer"
               class="group flex items-center gap-2 text-zinc-500 hover:text-zinc-100 transition-colors duration-300">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>
                </svg>
                <span class="text-sm font-medium tracking-wide uppercase">X / Twitter</span>
            </a>

            <a href="https://github.com/ericlbarnes" target="_blank" rel="noopener noreferrer"
               class="group flex items-center gap-2 text-zinc-500 hover:text-zinc-100 transition-colors duration-300">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" />
                </svg>
                <span class="text-sm font-medium tracking-wide uppercase">GitHub</span>
            </a>

            <a href="https://www.youtube.com/@ericlbarnes" target="_blank" rel="noopener noreferrer"
               class="group flex items-center gap-2 text-zinc-500 hover:text-zinc-100 transition-colors duration-300">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
                </svg>
                <span class="text-sm font-medium tracking-wide uppercase">YouTube</span>
            </a>

            <a href="https://www.linkedin.com/in/ericlbarnes" target="_blank" rel="noopener noreferrer"
               class="group flex items-center gap-2 text-zinc-500 hover:text-zinc-100 transition-colors duration-300">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                </svg>
                <span class="text-sm font-medium tracking-wide uppercase">LinkedIn</span>
            </a>
        </nav>

        {{-- Projects --}}
        <div class="mt-16 pt-8 border-t border-zinc-800/60">
            <h2 class="font-serif text-xl text-zinc-100 mb-4 italic">Projects</h2>
            <div class="flex flex-wrap gap-x-8 gap-y-3">
                <a href="https://laravel-news.com" target="_blank" rel="noopener noreferrer"
                   class="text-sm text-zinc-500 hover:text-amber-500/80 transition-colors duration-300">
                    Laravel News
                </a>
                <a href="https://larajobs.com" target="_blank" rel="noopener noreferrer"
                   class="text-sm text-zinc-500 hover:text-amber-500/80 transition-colors duration-300">
                    LaraJobs
                </a>
            </div>
        </div>

    </div>

</body>
</html>
