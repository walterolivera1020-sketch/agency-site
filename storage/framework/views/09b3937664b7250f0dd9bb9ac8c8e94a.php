<header id="navbar" class="fixed top-0 left-0 right-0 z-50 transition-all duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-20">
            <a href="#home" class="flex items-center space-x-3 group">
                <div class="flex items-center justify-center transform group-hover:scale-105 transition-transform">
                    <img src="<?php echo e(asset('images/Logo3.png')); ?>" alt="Joseline International Manpower Corporation Logo"
                        class="h-14 w-auto object-contain">
                </div>
                <div class="hidden sm:block">
                    <h1 class="text-white font-display font-bold text-lg leading-tight">JOSELINE</h1>
                    <p class="text-primary-300 text-xs tracking-wider">INTERNATIONAL MANPOWER CORPORATION</p>
                </div>
            </a>

            <nav class="hidden lg:flex items-center space-x-8">
                <a href="#home" class="nav-link text-white hover:text-accent-400 font-medium">Home</a>
                <a href="#about" class="nav-link text-white hover:text-accent-400 font-medium">About</a>
                <a href="#jobs" class="nav-link text-white hover:text-accent-400 font-medium">Job Opportunities</a>
                <a href="#deployment" class="nav-link text-white hover:text-accent-400 font-medium">Deployment</a>
                <a href="#contact" class="nav-link text-white hover:text-accent-400 font-medium">Contact</a>
            </nav>

            <div class="hidden lg:flex items-center space-x-4">
                <a href="https://sys.yaramay.online/complaints"
                    class="inline-flex items-center gap-2 rounded-full bg-white/10 px-4 py-2 text-sm font-semibold text-white hover:bg-white/15 transition border border-white/20 btn-accent text-sm px-6 py-3">
                    Request Assistance
                </a>

                <a href="#jobs" class="btn-accent text-sm px-6 py-3">
                    Apply Now
                </a>
            </div>

            <button id="mobile-menu-btn" class="lg:hidden text-white p-2" aria-label="Open menu">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>
    </div>

    <div id="nav-bg"
        class="absolute inset-0 bg-primary-950/95 backdrop-blur-md opacity-0 transition-opacity duration-300 -z-10">
    </div>
</header><?php /**PATH C:\Users\user\OneDrive\Desktop\agency-site\resources\views/partials/navbar.blade.php ENDPATH**/ ?>