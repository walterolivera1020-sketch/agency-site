<!-- HEADER -->
    <header id="siteHeader" class="sticky top-0 z-50 border-b border-white/10 bg-[rgba(24,14,10,.76)] backdrop-blur">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between py-4">
                <a href="#" class="flex items-center gap-3" aria-label="Joseline International Manpower Corporation">
                    <div class="grid h-14 w-14 place-items-center overflow-hidden rounded-2xl bg-white/5 ring-1 ring-brand-soft/20">
                        <img src="<?php echo e(asset('images/JOSELINE1.png')); ?>" alt="Joseline International Manpower Corporation Logo" class="h-10 w-auto object-contain" />
                    </div>
                    <div class="leading-tight">
                        <p class="text-base font-extrabold tracking-[0.04em] text-brand-soft">JOSELINE</p>
                        <p class="text-[11px] text-brand-paper/72">International Manpower Corporation</p>
                    </div>
                </a>

                <nav id="deskNav" class="hidden items-center gap-8 text-sm font-semibold text-brand-paper/80 md:flex" aria-label="Primary navigation">
                    <a href="#about" class="navlink">About</a>
                    <a href="#why-us" class="navlink">Why Us</a>
                    <a href="#services" class="navlink">Services</a>
                    <a href="#deploy" class="navlink">Deployment</a>
                    <a href="#jobs" class="navlink">Jobs</a>
                    <a href="#faq" class="navlink">FAQ</a>
                    <a href="#inquire" class="navlink">Contact</a>
                    <a href="#inquire" class="inline-flex items-center gap-2 rounded-full btn-primary px-4 py-2 text-sm font-extrabold">
                        <i data-lucide="send" class="h-4 w-4"></i>
                        Inquire Now
                    </a>
                </nav>

                <button id="mobileBtn"
                    class="inline-flex h-11 w-11 items-center justify-center rounded-2xl border border-white/10 bg-white/5 transition hover:bg-white/10 md:hidden"
                    aria-label="Open menu"
                    aria-expanded="false"
                    aria-controls="mobileMenu"
                    type="button">
                    <i data-lucide="menu" class="h-5 w-5 text-brand-paper"></i>
                </button>
            </div>

            <div id="mobileMenu" class="hidden pb-4 md:hidden">
                <div class="grid gap-2 rounded-2xl border border-white/10 bg-[rgba(33,19,14,.92)] p-3 shadow-lg">
                    <a href="#about" class="mnav rounded-xl px-3 py-2 text-sm font-semibold text-brand-paper/80 hover:bg-white/5">About</a>
                    <a href="#why-us" class="mnav rounded-xl px-3 py-2 text-sm font-semibold text-brand-paper/80 hover:bg-white/5">Why Us</a>
                    <a href="#services" class="mnav rounded-xl px-3 py-2 text-sm font-semibold text-brand-paper/80 hover:bg-white/5">Services</a>
                    <a href="#deploy" class="mnav rounded-xl px-3 py-2 text-sm font-semibold text-brand-paper/80 hover:bg-white/5">Deployment</a>
                    <a href="#jobs" class="mnav rounded-xl px-3 py-2 text-sm font-semibold text-brand-paper/80 hover:bg-white/5">Jobs</a>
                    <a href="#faq" class="mnav rounded-xl px-3 py-2 text-sm font-semibold text-brand-paper/80 hover:bg-white/5">FAQ</a>
                    <a href="#inquire" class="mnav rounded-xl px-3 py-2 text-sm font-semibold text-brand-paper/80 hover:bg-white/5">Contact</a>
                    <a href="#inquire" class="mt-2 inline-flex items-center justify-center gap-2 rounded-xl btn-primary px-4 py-3 text-sm font-extrabold">
                        <i data-lucide="mail" class="h-4 w-4"></i>
                        Inquire Now
                    </a>
                </div>
            </div>
        </div>
    </header><?php /**PATH C:\Users\user\agency-site\resources\views/components/header.blade.php ENDPATH**/ ?>