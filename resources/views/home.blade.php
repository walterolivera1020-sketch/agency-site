<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="google-site-verification" content="x1SxYg8xo-qy6lk0tYd7IypQeUxOb1FF1GkkNjELObk" />

    <title>Joseline International Manpower Corporation | DMW-Licensed Overseas Recruitment Agency in Makati, Philippines</title>

    <meta name="description"
        content="Joseline International Manpower Corporation is a DMW-licensed overseas recruitment agency in Makati, Philippines. We guide applicants from inquiry to documentation, job offer, and deployment for Saudi, Greece, and Timor-Leste opportunities." />

    <meta name="keywords"
        content="DMW licensed agency, overseas recruitment Philippines, manpower agency Makati, work abroad jobs, Saudi jobs for Filipinos, Greece jobs, Timor-Leste jobs, recruitment agency Philippines" />

    <meta name="robots" content="index, follow, max-image-preview:large" />
    <meta name="theme-color" content="#1b120d" />

    <meta property="og:type" content="website" />
    <meta property="og:title" content="Joseline International Manpower Corporation | DMW-Licensed Overseas Recruitment Agency" />
    <meta property="og:description" content="DMW-licensed recruitment agency in Makati. We guide applicants from inquiry to deployment for overseas opportunities." />
    <meta property="og:url" content="{{ url('/') }}" />
    <meta property="og:image" content="{{ asset('images/JOSELINE1.png') }}" />

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Joseline International Manpower Corporation | DMW-Licensed Agency" />
    <meta name="twitter:description" content="Guided overseas recruitment support from inquiry to deployment." />
    <meta name="twitter:image" content="{{ asset('images/JOSELINE1.png') }}" />

    <link rel="icon" href="{{ asset('images/favicon.ico') }}" />
    <link rel="apple-touch-icon" href="{{ asset('images/apple-touch-icon.png') }}" />

    @verbatim
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "EmploymentAgency",
            "name": "Joseline International Manpower Corporation",
            "url": "/",
            "logo": "/images/JOSELINE1.png",
            "email": "inquire@joselinemanpowercorp.com",
            "telephone": "+63-XXX-XXX-XXXX",
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "4334 Gen. Tinio, Brgy Bangkal",
                "addressLocality": "Makati City",
                "addressRegion": "Metro Manila",
                "addressCountry": "PH"
            },
            "areaServed": ["Saudi Arabia", "Greece", "Timor-Leste"],
            "identifier": {
                "@type": "PropertyValue",
                "name": "DMW License",
                "value": "DMW-009-LB-03072023-R"
            }
        }
    </script>
    @endverbatim

    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        brand: {
                            dark: "rgb(var(--brand-dark) / <alpha-value>)",
                            deep: "rgb(var(--brand-deep) / <alpha-value>)",
                            gold: "rgb(var(--brand-gold) / <alpha-value>)",
                            soft: "rgb(var(--brand-soft) / <alpha-value>)",
                            paper: "rgb(var(--brand-paper) / <alpha-value>)",
                            ink: "rgb(var(--brand-ink) / <alpha-value>)",
                            gray: "rgb(var(--brand-gray) / <alpha-value>)",
                            white: "rgb(var(--brand-white) / <alpha-value>)"
                        }
                    }
                }
            }
        };
    </script>

    <script src="https://unpkg.com/lucide@latest"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body class="bg-brand-paper text-brand-ink selection:bg-brand-gold/20 selection:text-brand-dark">

    <!-- TOP BAR -->
    <div class="topbar-luxury text-brand-paper">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col gap-2 py-3 text-sm sm:flex-row sm:items-center sm:justify-between">
                <div class="flex flex-wrap items-center gap-x-6 gap-y-2 text-brand-paper/85">
                    <span class="inline-flex items-center gap-2">
                        <i data-lucide="shield-check" class="h-4 w-4 text-brand-soft"></i>
                        <span>DMW License: DMW-009-LB-03072023-R</span>
                    </span>
                    <span class="inline-flex items-center gap-2">
                        <i data-lucide="map-pin" class="h-4 w-4 text-brand-soft"></i>
                        <span>4334 Gen. Tinio, Brgy Bangkal, Makati City</span>
                    </span>
                </div>
                <a href="#inquire" class="inline-flex items-center justify-center rounded-2xl border border-brand-soft/30 bg-brand-soft px-5 py-2.5 text-sm font-extrabold text-brand-dark shadow-sm hover:brightness-105">
                    Request Assistance
                </a>
            </div>
        </div>
    </div>

    <!-- HEADER -->
    @include('components.header')

    <!-- HERO -->
   @include('partials.hero')

    <!-- TRUST STRIP -->
    <section class="border-y border-[rgba(51,35,27,.08)] bg-white/80">
        <div class="mx-auto max-w-7xl px-4 py-5 sm:px-6 lg:px-8">
            <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
                <div class="trust-strip-item">
                    <i data-lucide="shield-check" class="h-5 w-5"></i>
                    <span>DMW Licensed Agency</span>
                </div>
                <div class="trust-strip-item">
                    <i data-lucide="badge-check" class="h-5 w-5"></i>
                    <span>Verified Recruitment Process</span>
                </div>
                <div class="trust-strip-item">
                    <i data-lucide="messages-square" class="h-5 w-5"></i>
                    <span>Step-by-step Applicant Guidance</span>
                </div>
                <div class="trust-strip-item">
                    <i data-lucide="clock-3" class="h-5 w-5"></i>
                    <span>Typical Response Time: Within 24 Hours</span>
                </div>
            </div>
        </div>
    </section>

    <!-- ABOUT -->
    <section id="about" class="py-20 sm:py-24">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="grid items-start gap-12 lg:grid-cols-2">
                <div class="reveal">
                    <p class="section-label">ABOUT US</p>
                    <h2 class="section-title mt-3">Professional recruitment with a human-first approach.</h2>
                    <p class="mt-5 leading-relaxed text-brand-ink/75">
                        Joseline International Manpower Corporation is a Philippine recruitment agency that provides guided assistance for overseas opportunities. We focus on clear communication, proper process guidance, and applicant support from inquiry to deployment.
                    </p>

                    <div class="mt-7 grid gap-4 sm:grid-cols-2">
                        <div class="feature-card">
                            <div class="feature-icon"><i data-lucide="badge-check" class="h-5 w-5"></i></div>
                            <div>
                                <p class="font-extrabold text-brand-deep">Integrity & Compliance</p>
                                <p class="mt-2 text-sm text-brand-ink/70">We prioritize lawful processes, clear steps, and verified guidance.</p>
                            </div>
                        </div>

                        <div class="feature-card">
                            <div class="feature-icon"><i data-lucide="handshake" class="h-5 w-5"></i></div>
                            <div>
                                <p class="font-extrabold text-brand-deep">Applicant-Focused Support</p>
                                <p class="mt-2 text-sm text-brand-ink/70">We simplify the application process so applicants can move with confidence.</p>
                            </div>
                        </div>
                    </div>

                    <div class="mt-8 img-soft">
                        <img class="h-80 w-full object-cover" src="{{ asset('images/companytable.png') }}" alt="Agency team photo" />
                    </div>
                </div>

                <div class="reveal" data-delay="120">
                    <div class="lift relative overflow-hidden rounded-3xl border border-brand-gold/15 bg-white/90 shadow-sm">
                        <div class="absolute inset-0 card-glow"></div>
                        <div class="relative p-7">
                            <div class="flex items-center justify-between">
                                <p class="text-sm font-extrabold text-brand-deep">Agency Details</p>
                                <span class="rounded-full border border-brand-gold/10 bg-brand-paper px-3 py-1 text-xs font-semibold text-brand-ink/70">
                                    Verified Info
                                </span>
                            </div>

                            <div class="mt-6 grid gap-5">
                                <div class="info-row">
                                    <i data-lucide="building-2" class="mt-0.5 h-5 w-5 text-brand-deep/80"></i>
                                    <div>
                                        <p class="info-label">Agency Name</p>
                                        <p class="info-value">JOSELINE INTERNATIONAL MANPOWER CORPORATION</p>
                                    </div>
                                </div>

                                <div class="info-row">
                                    <i data-lucide="shield" class="mt-0.5 h-5 w-5 text-brand-deep/80"></i>
                                    <div>
                                        <p class="info-label">DMW License Number</p>
                                        <p class="info-value">DMW-009-LB-03072023-R</p>
                                    </div>
                                </div>

                                <div class="info-row">
                                    <i data-lucide="map-pin" class="mt-0.5 h-5 w-5 text-brand-deep/80"></i>
                                    <div>
                                        <p class="info-label">Office Address</p>
                                        <p class="info-value">4334 Gen. Tinio Brgy Bangkal, Makati City</p>
                                    </div>
                                </div>

                                <div class="info-row">
                                    <i data-lucide="mail" class="mt-0.5 h-5 w-5 text-brand-deep/80"></i>
                                    <div>
                                        <p class="info-label">Email</p>
                                        <a class="font-extrabold text-brand-gold hover:opacity-90" href="mailto:inquire@joselinemanpowercorp.com">
                                            inquire@joselinemanpowercorp.com
                                        </a>
                                    </div>
                                </div>

                                <div class="info-row">
                                    <i data-lucide="clock-3" class="mt-0.5 h-5 w-5 text-brand-deep/80"></i>
                                    <div>
                                        <p class="info-label">Office Hours</p>
                                        <p class="info-value">Monday to Saturday • 8:00 AM to 5:00 PM</p>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-7 rounded-2xl border border-brand-gold/10 bg-brand-paper p-5">
                                <p class="font-extrabold text-brand-deep">Why applicants trust us</p>
                                <div class="mt-4 grid gap-3 sm:grid-cols-2">
                                    <div class="trust-point"><i data-lucide="check" class="h-4 w-4"></i><span>DMW Licensed</span></div>
                                    <div class="trust-point"><i data-lucide="check" class="h-4 w-4"></i><span>Clear process guidance</span></div>
                                    <div class="trust-point"><i data-lucide="check" class="h-4 w-4"></i><span>Verified job matching</span></div>
                                    <div class="trust-point"><i data-lucide="check" class="h-4 w-4"></i><span>Responsive communication</span></div>
                                </div>
                            </div>

                            <div class="mt-6 flex flex-wrap gap-2">
                                <span class="badge-chip"><i data-lucide="check-circle-2" class="h-4 w-4"></i> Verified Steps</span>
                                <span class="badge-chip"><i data-lucide="files" class="h-4 w-4"></i> Guided Documentation</span>
                                <span class="badge-chip"><i data-lucide="headset" class="h-4 w-4"></i> Applicant Support</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- WHY US -->
    <section id="why-us" class="bg-brand-deep py-24 sm:py-28">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="reveal mx-auto max-w-4xl text-center">
                <p class="section-label-dark tracking-[0.22em]">WHY CHOOSE US</p>
                <h2 class="mt-4 text-3xl font-semibold leading-tight text-white sm:text-4xl lg:text-5xl">
                    Building trust through verified recruitment and transparent processes.
                </h2>
                <p class="mx-auto mt-6 max-w-3xl text-sm leading-8 text-brand-paper/75 sm:text-base">
                    As a DMW-licensed recruitment agency, we uphold the highest standards of integrity and professionalism. We prioritize transparency, compliance, and ethical practices, ensuring every applicant’s journey is secure, clear, and well-guided from initial inquiry to deployment.
                </p>
            </div>

            <div class="mt-16 grid gap-6 sm:grid-cols-2 xl:grid-cols-4">
                <div class="dark-card-pro reveal text-center">
                    <img src="{{ asset('images/DMW.png') }}" alt="DMW License Verification" class="mx-auto mb-6 h-24 w-auto object-contain sm:h-28" />
                    <h3 class="text-xl font-semibold text-white">DMW License Verification</h3>
                    <p class="mt-3 text-sm leading-7 text-brand-paper/75">
                        Our agency operates under a valid DMW license, ensuring legal, ethical, and transparent overseas recruitment.
                    </p>
                </div>

                <div class="dark-card-pro reveal text-center" data-delay="100">
                    <img src="{{ asset('images/DOCUMENT.png') }}" alt="Documented Process" class="mx-auto mb-6 h-24 w-auto object-contain sm:h-28" />
                    <h3 class="text-xl font-semibold text-white">Documented Process</h3>
                    <p class="mt-3 text-sm leading-7 text-brand-paper/75">
                        Every step of the recruitment process is clearly explained, helping applicants prepare documentation confidently.
                    </p>
                </div>

                <div class="dark-card-pro reveal text-center" data-delay="200">
                    <img src="{{ asset('images/VERIFIEDY.png') }}" alt="Verified Job Matching" class="mx-auto mb-6 h-24 w-auto object-contain sm:h-28" />
                    <h3 class="text-xl font-semibold text-white">Verified Job Matching</h3>
                    <p class="mt-3 text-sm leading-7 text-brand-paper/75">
                        We carefully match applicants with verified employers and opportunities suited to their skills.
                    </p>
                </div>

                <div class="dark-card-pro reveal text-center" data-delay="300">
                    <img src="{{ asset('images/SUPPORT.png') }}" alt="Responsive Support" class="mx-auto mb-6 h-24 w-auto object-contain sm:h-28" />
                    <h3 class="text-xl font-semibold text-white">Responsive Support</h3>
                    <p class="mt-3 text-sm leading-7 text-brand-paper/75">
                        Our team provides guidance and support from inquiry to deployment for every applicant.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- SERVICES -->
    <section id="services" class="py-20 sm:py-24">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="reveal">
                <p class="section-label">SERVICES</p>
                <h2 class="section-title mt-3">Everything applicants need for a smooth application.</h2>
            </div>

            <div class="mt-10 grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
                <div class="service-card reveal">
                    <div class="service-icon"><i data-lucide="scan-search" class="h-5 w-5"></i></div>
                    <p class="service-title">Job Matching</p>
                    <p class="service-text">We align applicant experience with available roles and employer expectations.</p>
                </div>

                <div class="service-card reveal" data-delay="120">
                    <div class="service-icon"><i data-lucide="list-checks" class="h-5 w-5"></i></div>
                    <p class="service-title">Requirements Guidance</p>
                    <p class="service-text">We help applicants prepare documents, forms, and next-step requirements.</p>
                </div>

                <div class="service-card reveal" data-delay="240">
                    <div class="service-icon"><i data-lucide="headset" class="h-5 w-5"></i></div>
                    <p class="service-title">Applicant Support</p>
                    <p class="service-text">We provide updates, reminders, and clear instructions throughout the process.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- DEPLOYMENT -->
    <section id="deploy" class="section-dark-gradient py-20 sm:py-24">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="reveal">
                <p class="section-label-dark">DEPLOYMENT TRACKS</p>
                <h2 class="section-title-dark mt-3">Current deployment categories</h2>
            </div>

            <div class="mt-10 grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
                <div class="dark-card reveal">
                    <img class="mb-4 h-32 w-full rounded-2xl border border-brand-paper/10 object-cover" src="{{ asset('images/domestic.jpg') }}" alt="Domestic Helper Saudi" />
                    <p class="text-xs font-semibold text-brand-paper/60">Saudi</p>
                    <p class="mt-2 font-extrabold text-brand-paper">Domestic Helper</p>
                    <p class="mt-2 text-sm text-brand-paper/70">Processing guidance for qualified applicants under available employer requirements.</p>
                </div>

                <div class="dark-card reveal" data-delay="100">
                    <img class="mb-4 h-32 w-full rounded-2xl border border-brand-paper/10 object-cover" src="{{ asset('images/engineer.png') }}" alt="Skilled and professionals" />
                    <p class="text-xs font-semibold text-brand-paper/60">Saudi</p>
                    <p class="mt-2 font-extrabold text-brand-paper">Skilled / Professionals</p>
                    <p class="mt-2 text-sm text-brand-paper/70">Technical and professional placements for qualified applicants.</p>
                </div>

                <div class="dark-card reveal" data-delay="200">
                    <img class="mb-4 h-32 w-full rounded-2xl border border-brand-paper/10 object-cover" src="{{ asset('images/Constructionworker.jpeg') }}" alt="Skilled workers Greece" />
                    <p class="text-xs font-semibold text-brand-paper/60">Greece</p>
                    <p class="mt-2 font-extrabold text-brand-paper">Skilled Workers</p>
                    <p class="mt-2 text-sm text-brand-paper/70">Construction and trade-related opportunities.</p>
                </div>

                <div class="dark-card reveal" data-delay="300">
                    <img class="mb-4 h-32 w-full rounded-2xl border border-brand-paper/10 object-cover" src="{{ asset('images/Skilled Professionals.jpg') }}" alt="Professionals Timor Leste" />
                    <p class="text-xs font-semibold text-brand-paper/60">Timor Leste</p>
                    <p class="mt-2 font-extrabold text-brand-paper">Professionals</p>
                    <p class="mt-2 text-sm text-brand-paper/70">Office-based and professional field placements.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- JOBS -->
    <section id="jobs" class="py-20 sm:py-24">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="reveal flex flex-col gap-4 lg:flex-row lg:items-end lg:justify-between">
                <div>
                    <p class="section-label">FEATURED JOBS</p>
                    <h2 class="section-title mt-3">Roles you can inquire about today</h2>
                </div>

                <div class="flex flex-wrap gap-2">
                    <button class="filter-btn active" data-filter="all" type="button">All</button>
                    <button class="filter-btn" data-filter="saudi" type="button">Saudi</button>
                    <button class="filter-btn" data-filter="greece" type="button">Greece</button>
                    <button class="filter-btn" data-filter="timor-leste" type="button">Timor Leste</button>
                    <button class="filter-btn" data-filter="skilled" type="button">Skilled</button>
                    <button class="filter-btn" data-filter="professional" type="button">Professional</button>
                </div>
            </div>

            <div id="jobsGrid" class="mt-10 grid gap-5 sm:grid-cols-2 lg:grid-cols-3">
                <article class="job-card reveal" tabindex="0" data-role="Female Nursing Specialist (Saudi)" data-category="saudi professional urgent">
                    <div class="job-media-wrap">
                        <img class="job-media" src="{{ asset('images/nursing.jpg') }}" alt="Female Nursing Specialist" />
                    </div>
                    <div class="p-6">
                        <div class="flex flex-wrap gap-2">
                            <span class="job-tag">Saudi</span>
                            <span class="job-tag">Urgent Hiring</span>
                            <span class="job-tag">Professional</span>
                        </div>
                        <h3 class="mt-4 text-xl font-extrabold text-brand-deep">Female Nursing Specialist</h3>
                        <p class="mt-3 text-sm text-brand-ink/72">Ideal for applicants with nursing-related experience. Final requirements depend on employer terms.</p>
                        <div class="mt-5 flex items-center justify-between gap-3">
                            <span class="text-xs font-semibold text-brand-ink/55">Requirements preview: CV, credentials, experience</span>
                            <button class="job-inquire-btn" data-role-btn="Female Nursing Specialist (Saudi)" type="button">Inquire Now</button>
                        </div>
                    </div>
                </article>

                <article class="job-card reveal" tabindex="0" data-role="Tile Worker / Tile Setter" data-category="greece skilled">
                    <div class="job-media-wrap">
                        <img class="job-media" src="{{ asset('images/Tile Worker.jpg') }}" alt="Tile Worker / Tile Setter" />
                    </div>
                    <div class="p-6">
                        <div class="flex flex-wrap gap-2">
                            <span class="job-tag">Greece</span>
                            <span class="job-tag">Skilled</span>
                        </div>
                        <h3 class="mt-4 text-xl font-extrabold text-brand-deep">Tile Worker / Tile Setter</h3>
                        <p class="mt-3 text-sm text-brand-ink/72">Construction finishing role for applicants with trade experience and hands-on skills.</p>
                        <div class="mt-5 flex items-center justify-between gap-3">
                            <span class="text-xs font-semibold text-brand-ink/55">Requirements preview: experience, trade skills</span>
                            <button class="job-inquire-btn" data-role-btn="Tile Worker / Tile Setter" type="button">Inquire Now</button>
                        </div>
                    </div>
                </article>

                <article class="job-card reveal" tabindex="0" data-role="Building Electrician" data-category="saudi skilled urgent">
                    <div class="job-media-wrap">
                        <img class="job-media" src="{{ asset('images/Electrician.webp') }}" alt="Building Electrician" />
                    </div>
                    <div class="p-6">
                        <div class="flex flex-wrap gap-2">
                            <span class="job-tag">Saudi</span>
                            <span class="job-tag">Urgent Hiring</span>
                            <span class="job-tag">Skilled</span>
                        </div>
                        <h3 class="mt-4 text-xl font-extrabold text-brand-deep">Building Electrician</h3>
                        <p class="mt-3 text-sm text-brand-ink/72">For wiring, troubleshooting, installation, and maintenance roles abroad.</p>
                        <div class="mt-5 flex items-center justify-between gap-3">
                            <span class="text-xs font-semibold text-brand-ink/55">Requirements preview: experience, technical knowledge</span>
                            <button class="job-inquire-btn" data-role-btn="Building Electrician" type="button">Inquire Now</button>
                        </div>
                    </div>
                </article>

                <article class="job-card reveal" tabindex="0" data-role="IT Support Technician" data-category="saudi timor-leste professional">
                    <div class="job-media-wrap">
                        <img class="job-media" src="{{ asset('images/IT Support.jpg') }}" alt="IT Support Technician" />
                    </div>
                    <div class="p-6">
                        <div class="flex flex-wrap gap-2">
                            <span class="job-tag">Saudi / Timor Leste</span>
                            <span class="job-tag">Professional</span>
                        </div>
                        <h3 class="mt-4 text-xl font-extrabold text-brand-deep">IT Support Technician</h3>
                        <p class="mt-3 text-sm text-brand-ink/72">Helpdesk support, device setup, troubleshooting, and basic networking tasks.</p>
                        <div class="mt-5 flex items-center justify-between gap-3">
                            <span class="text-xs font-semibold text-brand-ink/55">Requirements preview: IT support background</span>
                            <button class="job-inquire-btn" data-role-btn="IT Support Technician" type="button">Inquire Now</button>
                        </div>
                    </div>
                </article>

                <article class="job-card reveal" tabindex="0" data-role="Architectural Draftsman" data-category="timor-leste professional">
                    <div class="job-media-wrap">
                        <img class="job-media" src="{{ asset('images/Architectural Draftsman.webp') }}" alt="Architectural Draftsman" />
                    </div>
                    <div class="p-6">
                        <div class="flex flex-wrap gap-2">
                            <span class="job-tag">Timor Leste</span>
                            <span class="job-tag">Professional</span>
                        </div>
                        <h3 class="mt-4 text-xl font-extrabold text-brand-deep">Architectural Draftsman</h3>
                        <p class="mt-3 text-sm text-brand-ink/72">CAD drafting, plans support, and project documentation assistance.</p>
                        <div class="mt-5 flex items-center justify-between gap-3">
                            <span class="text-xs font-semibold text-brand-ink/55">Requirements preview: CAD knowledge, drafting experience</span>
                            <button class="job-inquire-btn" data-role-btn="Architectural Draftsman" type="button">Inquire Now</button>
                        </div>
                    </div>
                </article>

                <article class="job-card reveal" tabindex="0" data-role="Purchase Representative" data-category="saudi professional">
                    <div class="job-media-wrap">
                        <img class="job-media" src="{{ asset('images/Purchase Representative.jpg') }}" alt="Purchase Representative" />
                    </div>
                    <div class="p-6">
                        <div class="flex flex-wrap gap-2">
                            <span class="job-tag">Saudi</span>
                            <span class="job-tag">Professional</span>
                        </div>
                        <h3 class="mt-4 text-xl font-extrabold text-brand-deep">Purchase Representative</h3>
                        <p class="mt-3 text-sm text-brand-ink/72">Vendor coordination, purchasing documentation, and inventory support.</p>
                        <div class="mt-5 flex items-center justify-between gap-3">
                            <span class="text-xs font-semibold text-brand-ink/55">Requirements preview: office/admin background</span>
                            <button class="job-inquire-btn" data-role-btn="Purchase Representative" type="button">Inquire Now</button>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section id="faq" class="py-20 sm:py-24">
        <div class="mx-auto max-w-5xl px-4 sm:px-6 lg:px-8">
            <div class="reveal text-center">
                <p class="section-label">FREQUENTLY ASKED QUESTIONS</p>
                <h2 class="section-title mt-3">Common applicant questions</h2>
            </div>

            <div class="mt-10 grid gap-4">
                <details class="faq-item reveal" open>
                    <summary>How do I start my application?</summary>
                    <p>Fill out the inquiry form, choose your preferred role and destination, then provide a short message about your background.</p>
                </details>

                <details class="faq-item reveal" data-delay="80">
                    <summary>Do you guide applicants with requirements?</summary>
                    <p>Yes. Applicants receive step-by-step guidance on documents and next process stages.</p>
                </details>

                <details class="faq-item reveal" data-delay="160">
                    <summary>Can I inquire even if I am still preparing documents?</summary>
                    <p>Yes. You can still inquire early so you know what requirements to prepare next.</p>
                </details>

                <details class="faq-item reveal" data-delay="240">
                    <summary>How long does it take to receive a response?</summary>
                    <p>Typical response time can be within 24 hours during working days, depending on inquiry volume.</p>
                </details>
            </div>
        </div>
    </section>

    <!-- CONTACT -->
    <section id="inquire" class="bg-[rgba(51,35,27,.04)] py-20 sm:py-24">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="grid gap-10 lg:grid-cols-2">
                <div class="reveal">
                    <p class="section-label">CONTACT</p>
                    <h2 class="section-title mt-3">Request a free consultation & inquiry.</h2>
                    <p class="mt-4 text-brand-ink/72">Typical response time: within 24 hours during working days.</p>

                    <div class="mt-8 grid gap-4">
                        <div class="contact-info-card">
                            <div class="service-icon"><i data-lucide="mail" class="h-5 w-5"></i></div>
                            <div>
                                <p class="info-label">Email</p>
                                <a href="mailto:inquire@joselinemanpowercorp.com" class="info-link">inquire@joselinemanpowercorp.com</a>
                            </div>
                        </div>

                        <div class="contact-info-card">
                            <div class="service-icon"><i data-lucide="map-pin" class="h-5 w-5"></i></div>
                            <div>
                                <p class="info-label">Office Address</p>
                                <p class="info-value">4334 Gen. Tinio Brgy Bangkal, Makati City</p>
                            </div>
                        </div>

                        <div class="contact-info-card">
                            <div class="service-icon"><i data-lucide="phone" class="h-5 w-5"></i></div>
                            <div>
                                <p class="info-label">Contact Number</p>
                                <p class="info-value">+63-XXX-XXX-XXXX</p>
                            </div>
                        </div>

                        <div class="contact-info-card">
                            <div class="service-icon"><i data-lucide="clock-3" class="h-5 w-5"></i></div>
                            <div>
                                <p class="info-label">Office Hours</p>
                                <p class="info-value">Monday to Saturday • 8:00 AM to 5:00 PM</p>
                            </div>
                        </div>

                        <div class="map-card">
                            <iframe
                                src="https://www.google.com/maps?q=4334%20Gen.%20Tinio%20Bangkal%20Makati%20City&output=embed"
                                width="100%"
                                height="320"
                                style="border:0;"
                                allowfullscreen=""
                                loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"
                                title="Office Location"></iframe>
                        </div>
                    </div>
                </div>

                <div class="reveal" data-delay="120">
                    <form id="inquiryForm" class="lift rounded-3xl border border-brand-gold/10 bg-white p-6 shadow-sm sm:p-7" novalidate>
                        @csrf

                        <div class="grid gap-4 sm:grid-cols-2">
                            <div>
                                <label class="form-label" for="fullName">Full Name</label>
                                <input id="fullName" name="full_name" type="text" placeholder="Your full name" required class="form-control" />
                            </div>

                            <div>
                                <label class="form-label" for="email">Email</label>
                                <input id="email" name="user_email" type="email" placeholder="you@gmail.com" required class="form-control" />
                            </div>

                            <div>
                                <label class="form-label" for="role">Preferred Role</label>
                                <select id="role" name="preferred_role" class="form-control">
                                    <option>Female Nursing Specialist (Saudi)</option>
                                    <option>Tile Worker / Tile Setter</option>
                                    <option>Building Electrician</option>
                                    <option>IT Support Technician</option>
                                    <option>Architectural Draftsman</option>
                                    <option>Purchase Representative</option>
                                    <option>Domestic Helper (Saudi)</option>
                                </select>
                            </div>

                            <div>
                                <label class="form-label" for="destination">Destination</label>
                                <select id="destination" name="destination" class="form-control">
                                    <option>Saudi</option>
                                    <option>Greece</option>
                                    <option>Timor Leste</option>
                                </select>
                            </div>
                        </div>

                        <div class="mt-4">
                            <label class="form-label" for="phone">Phone Number</label>
                            <input id="phone" name="phone" type="text" placeholder="09XXXXXXXXX" class="form-control" />
                        </div>

                        <div class="mt-4">
                            <label class="form-label" for="message">Message</label>
                            <textarea id="message" name="message" rows="5" required placeholder="Tell us your experience, documents ready, and preferred timeline..." class="form-control"></textarea>
                        </div>

                        <div class="mt-4 rounded-2xl border border-brand-gold/10 bg-brand-paper p-4">
                            <p class="text-sm font-semibold text-brand-deep">What happens next?</p>
                            <ul class="mt-3 grid gap-2 text-sm text-brand-ink/72">
                                <li class="notice-item"><i data-lucide="check" class="h-4 w-4"></i> Your inquiry is reviewed by the agency.</li>
                                <li class="notice-item"><i data-lucide="check" class="h-4 w-4"></i> Your information is stored in the inquiry database.</li>
                                <li class="notice-item"><i data-lucide="check" class="h-4 w-4"></i> The agency receives a notification email.</li>
                            </ul>
                        </div>

                        <p id="formStatus" class="mt-4 hidden text-sm font-semibold"></p>

                        <button id="sendBtn" type="submit" class="mt-5 inline-flex w-full items-center justify-center gap-2 rounded-2xl btn-primary px-5 py-3 text-sm font-extrabold">
                            <i data-lucide="send" class="h-4 w-4"></i>
                            Send Inquiry
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="border-t border-brand-gold/10 bg-brand-deep">
        <div class="mx-auto max-w-7xl px-4 py-12 sm:px-6 lg:px-8">
            <div class="grid gap-10 md:grid-cols-2 lg:grid-cols-4">
                <div>
                    <div class="flex items-center gap-3">
                        <div class="grid h-14 w-14 place-items-center overflow-hidden rounded-2xl bg-white/5 ring-1 ring-brand-soft/20">
                            <img src="{{ asset('images/JOSELINE1.png') }}" alt="Joseline International Manpower Corporation Logo" class="h-10 w-auto object-contain" />
                        </div>
                        <div class="leading-tight">
                            <p class="text-base font-extrabold tracking-[0.04em] text-brand-soft">JOSELINE</p>
                            <p class="text-[11px] text-brand-paper/72">International Manpower Corporation</p>
                        </div>
                    </div>
                    <p class="mt-4 max-w-md text-sm text-brand-paper/72">
                        DMW-licensed recruitment assistance and guided applicant support for overseas opportunities.
                    </p>
                </div>

                <div class="grid gap-2 text-sm">
                    <p class="font-extrabold text-brand-paper">About</p>
                    <a href="#about" class="footer-link">Agency Profile</a>
                    <a href="#why-us" class="footer-link">Why Choose Us</a>
                    <a href="#services" class="footer-link">Services</a>
                    <a href="#jobs" class="footer-link">Available Jobs</a>
                </div>

                <div class="grid gap-2 text-sm">
                    <p class="font-extrabold text-brand-paper">Information</p>
                    <a href="#faq" class="footer-link">FAQ</a>
                    <a href="#inquire" class="footer-link">Contact</a>
                    <a href="#" class="footer-link">Privacy Policy</a>
                    <a href="#" class="footer-link">Terms</a>
                </div>

                <div class="grid gap-2 text-sm">
                    <p class="font-extrabold text-brand-paper">Contact</p>
                    <p class="text-brand-paper/72">4334 Gen. Tinio Brgy Bangkal, Makati City</p>
                    <a class="font-extrabold text-brand-soft hover:opacity-90" href="mailto:inquire@joselinemanpowercorp.com">
                        inquire@joselinemanpowercorp.com
                    </a>
                    <p class="text-brand-paper/72">+63-XXX-XXX-XXXX</p>
                    <p class="mt-2 text-xs text-brand-paper/55">
                        © <span id="year"></span> Joseline International Manpower Corporation. All rights reserved.
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- FLOATING BUTTONS -->
    <button id="toTop" class="inline-flex items-center gap-2 rounded-2xl border border-brand-gold/10 bg-white px-4 py-3 text-sm font-extrabold text-brand-deep shadow-sm hover:bg-brand-paper" type="button">
        <i data-lucide="arrow-up" class="h-4 w-4"></i>
        Top
    </button>

    <button id="inquiryFab" class="inline-flex h-12 w-12 items-center justify-center rounded-2xl btn-primary shadow-sm" title="Open Inquiry Form" aria-label="Open Inquiry Form" type="button">
        <i data-lucide="message-circle" class="h-5 w-5"></i>
    </button>

    <!-- TOAST -->
    <div id="toast" class="toast" aria-live="polite" aria-atomic="true">
        <div class="rounded-2xl border border-brand-gold/10 bg-white p-4 shadow-xl">
            <div class="flex items-start gap-3">
                <div class="grid h-10 w-10 place-items-center rounded-2xl bg-brand-gold/15 text-brand-deep">
                    <i data-lucide="check" class="h-5 w-5"></i>
                </div>
                <div class="flex-1">
                    <p class="font-extrabold text-brand-deep">Inquiry received</p>
                    <p id="toastMsg" class="mt-1 text-sm text-brand-ink/72"></p>
                    <button id="toastClose" class="mt-3 text-xs font-extrabold text-brand-gold hover:opacity-90" type="button">
                        Close
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script>
        window.LaravelApp = {
            csrfToken: "{{ csrf_token() }}",
            inquiryEndpoint: "{{ url('/api/inquiries') }}"
        };
    </script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>