<aside class="w-72 min-h-screen hidden md:flex md:flex-col p-6 text-white bg-gradient-to-b from-[#081120] via-[#0b1426] to-[#081120] border-r border-white/5">
    
    
    <div class="mb-10">
        <div class="flex items-start gap-3">
            <div class="shrink-0 mt-1">
                <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-[#d4af37]/20 to-[#8b6b1f]/10 border border-[#d4af37]/25 flex items-center justify-center shadow-[0_8px_20px_rgba(212,175,55,0.12)]">
                    <img
                        src="<?php echo e(asset('images/Logo3.png')); ?>"
                        alt="Joseline Logo"
                        class="w-10 h-10 object-contain">
                </div>
            </div>

            <div class="leading-tight">
                <h2 class="text-[1.7rem] font-bold tracking-tight text-white">
                    Joseline
                </h2>
                <p class="text-sm text-slate-300 leading-snug mt-1 max-w-[170px]">
                    International Manpower Corporation
                </p>
            </div>
        </div>
    </div>

    
    <nav class="space-y-2 flex-1">
        <a href="<?php echo e(route('admin.dashboard')); ?>"
            class="flex items-center gap-3 px-4 py-3 rounded-2xl transition <?php echo e(request()->routeIs('admin.dashboard') ? 'bg-gradient-to-r from-[#5b4bff] to-[#4f46e5] text-white shadow-[0_10px_24px_rgba(91,75,255,0.28)]' : 'text-slate-200 hover:bg-white/5'); ?>">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M3 12l2-2m0 0l7-7 7 7m-9 2v8m0-8H5m7 0h7" />
            </svg>
            <span>Dashboard</span>
        </a>

        <a href="<?php echo e(route('admin.inquiries.index')); ?>"
            class="flex items-center gap-3 px-4 py-3 rounded-2xl transition <?php echo e(request()->routeIs('admin.inquiries.*') ? 'bg-gradient-to-r from-[#5b4bff] to-[#4f46e5] text-white shadow-[0_10px_24px_rgba(91,75,255,0.28)]' : 'text-slate-200 hover:bg-white/5'); ?>">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M8 10h8m-8 4h6m5 5H5a2 2 0 01-2-2V7a2 2 0 012-2h14a2 2 0 012 2v10a2 2 0 01-2 2z" />
            </svg>
            <span>Inquiries</span>
        </a>

        <a href="<?php echo e(route('admin.jobs.index')); ?>"
            class="flex items-center gap-3 px-4 py-3 rounded-2xl transition <?php echo e(request()->routeIs('admin.jobs.*') ? 'bg-gradient-to-r from-[#5b4bff] to-[#4f46e5] text-white shadow-[0_10px_24px_rgba(91,75,255,0.28)]' : 'text-slate-200 hover:bg-white/5'); ?>">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M9 17v-6h13v6M9 5h13v4H9V5zM2 5h5v12H2V5z" />
            </svg>
            <span>Jobs</span>
        </a>

        <a href="<?php echo e(route('admin.applications.index')); ?>"
            class="flex items-center gap-3 px-4 py-3 rounded-2xl transition <?php echo e(request()->routeIs('admin.applications.*') ? 'bg-gradient-to-r from-[#5b4bff] to-[#4f46e5] text-white shadow-[0_10px_24px_rgba(91,75,255,0.28)]' : 'text-slate-200 hover:bg-white/5'); ?>">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M8 7V3m8 4V3m-9 8h10m-11 9h12a2 2 0 002-2V7a2 2 0 00-2-2H6a2 2 0 00-2 2v11a2 2 0 002 2z" />
            </svg>
            <span>Applications</span>
        </a>
    </nav>

    
    <div class="pt-6 border-t border-white/10">
        <form action="<?php echo e(route('admin.logout')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <button
                type="submit"
                class="w-full flex items-center gap-3 px-4 py-3 rounded-2xl text-slate-200 hover:bg-white/5 transition text-left">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M17 16l4-4m0 0l-4-4m4 4H7" />
                </svg>
                <span>Logout</span>
            </button>
        </form>
    </div>
</aside><?php /**PATH C:\Users\user\agency-site\resources\views/admin/partials/sidebar.blade.php ENDPATH**/ ?>