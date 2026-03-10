<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Joseline International Manpower Corporation | Trusted Overseas Recruitment</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700;800&family=Source+Sans+3:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: {
                            50: '#fbf8f1',
                            100: '#f6efdf',
                            200: '#ecdcb8',
                            300: '#e1c88f',
                            400: '#d4af37',
                            500: '#c9a227',
                            600: '#b38f1f',
                            700: '#8f7118',
                            800: '#6f5814',
                            900: '#4f3f10',
                            950: '#1f1a14'
                        },
                        accent: {
                            50: '#fffdf8',
                            100: '#faf4e8',
                            200: '#f3e7c8',
                            300: '#ead7a0',
                            400: '#e4c46a',
                            500: '#d6b24b',
                            600: '#b9902e',
                            700: '#92701f',
                            800: '#6d5317',
                            900: '#4d3b11'
                        },
                        teal: {
                            50: '#faf8f3',
                            100: '#f5f1e8',
                            200: '#ebe2d0',
                            300: '#ddd0af',
                            400: '#cdb98a',
                            500: '#b79d63',
                            600: '#9a824c',
                            700: '#7c683d',
                            800: '#5e4f30',
                            900: '#433922'
                        }
                    },
                    fontFamily: {
                        display: ['Playfair Display', 'serif'],
                        sans: ['Source Sans 3', 'sans-serif']
                    }
                }
            }
        }
    </script>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
            scroll-padding-top: 80px;
        }

        body {
            font-family: 'Source Sans 3', sans-serif;
            background-color: #F8F5EE;
            color: #1F2937;
            line-height: 1.7;
            overflow-x: hidden;
        }

        ::selection {
            background-color: #C9A227;
            color: white;
        }

        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 12px;
        }

        ::-webkit-scrollbar-track {
            background: #f1ebdd;
        }

        ::-webkit-scrollbar-thumb {
            background: linear-gradient(180deg, #D4AF37, #8F7118);
            border-radius: 6px;
        }

        .text-gradient {
            background: linear-gradient(135deg, #C9A227 0%, #E4C46A 50%, #8F7118 100%);
            background-clip: text;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .hero-pattern {
            background-color: #1F1A14;
            background-image:
                radial-gradient(circle at 20% 80%, rgba(212, 175, 55, 0.14) 0%, transparent 50%),
                radial-gradient(circle at 80% 20%, rgba(228, 196, 106, 0.10) 0%, transparent 50%);
        }

        /* Image Styles */
        .img-cover {
            object-fit: cover;
            width: 100%;
            height: 100%;
        }

        .img-contain {
            object-fit: contain;
        }

        /* Parallax Effect */
        .parallax-bg {
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        /* Image Overlay Gradients */
        .img-overlay-dark::after {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(to top, rgba(15, 41, 66, 0.9) 0%, rgba(15, 41, 66, 0.4) 50%, transparent 100%);
        }

        .img-overlay-light::after {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(135deg, rgba(255, 255, 255, 0.9) 0%, rgba(255, 255, 255, 0.7) 100%);
        }

        /* Reveal Animations */
        .reveal {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.8s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .reveal.active {
            opacity: 1;
            transform: translateY(0);
        }

        .reveal-left {
            opacity: 0;
            transform: translateX(-30px);
            transition: all 0.8s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .reveal-left.active {
            opacity: 1;
            transform: translateX(0);
        }

        .reveal-right {
            opacity: 0;
            transform: translateX(30px);
            transition: all 0.8s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .reveal-right.active {
            opacity: 1;
            transform: translateX(0);
        }

        .reveal-scale {
            opacity: 0;
            transform: scale(0.9);
            transition: all 0.8s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .reveal-scale.active {
            opacity: 1;
            transform: scale(1);
        }

        .stagger-1 {
            transition-delay: 0.1s;
        }

        .stagger-2 {
            transition-delay: 0.2s;
        }

        .stagger-3 {
            transition-delay: 0.3s;
        }

        .stagger-4 {
            transition-delay: 0.4s;
        }

        .stagger-5 {
            transition-delay: 0.5s;
        }

        /* Card Hover */
        .card-hover {
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .card-hover:hover {
            transform: translateY(-8px);
            box-shadow: 0 25px 50px -12px rgba(15, 41, 66, 0.25);
        }

        /* Buttons */
        .btn-primary {
            background: linear-gradient(135deg, #D4AF37 0%, #B38F1F 100%);
            color: white;
            padding: 14px 32px;
            border-radius: 8px;
            font-weight: 600;
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
        }

        .btn-primary:hover {
            background: linear-gradient(135deg, #E4C46A 0%, #C9A227 100%);
            transform: translateY(-2px);
            box-shadow: 0 10px 30px -10px rgba(201, 162, 39, 0.45);
        }

        .btn-accent {
            background: linear-gradient(135deg, #D4AF37 0%, #C9A227 100%);
            color: white;
            padding: 14px 32px;
            border-radius: 8px;
            font-weight: 600;
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
        }

        .btn-accent:hover {
            background: linear-gradient(135deg, #E4C46A 0%, #D4AF37 100%);
            transform: translateY(-2px);
            box-shadow: 0 10px 30px -10px rgba(212, 175, 55, 0.45);
        }

        .btn-outline {
            background: transparent;
            color: white;
            padding: 14px 32px;
            border-radius: 8px;
            font-weight: 600;
            transition: all 0.3s ease;
            border: 2px solid rgba(255, 255, 255, 0.5);
            cursor: pointer;
        }

        .btn-outline:hover {
            background: white;
            color: #0f2942;
            border-color: white;
        }

        .btn-outline-dark {
            background: transparent;
            color: #8F7118;
            padding: 14px 32px;
            border: 2px solid #C9A227;
            font-weight: 600;
            transition: all 0.3s ease;
            border: 2px solid #164072;
            cursor: pointer;
        }

        .btn-outline-dark:hover {
            background: #C9A227;
            color: white;
        }

        /* Input */
        .input-field {
            width: 100%;
            padding: 14px 18px;
            border: 2px solid #e2e8f0;
            border-radius: 8px;
            font-size: 16px;
            transition: all 0.3s ease;
            background: white;
        }

        .input-field:focus {
            outline: none;
            border-color: #C9A227;
            box-shadow: 0 0 0 4px rgba(201, 162, 39, 0.12);
        }

        /* Wave Divider */
        .wave-divider {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            overflow: hidden;
            line-height: 0;
        }

        .wave-divider svg {
            display: block;
            width: calc(100% + 1.3px);
            height: 80px;
        }

        /* Nav */
        .nav-link {
            position: relative;
            transition: color 0.3s ease;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            bottom: -4px;
            left: 0;
            width: 0;
            height: 2px;
            background: #D4AF37;
            transition: width 0.3s ease;
        }

        .nav-link:hover::after {
            width: 100%;
        }

        /* Job Card */
        .job-card {
            position: relative;
            overflow: hidden;
        }

        .job-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 4px;
            height: 0;
            background: linear-gradient(180deg, #D4AF37, #B38F1F);
            transition: height 0.4s ease;
        }

        .job-card:hover::before {
            height: 100%;
        }

        /* Badge */
        .badge {
            display: inline-flex;
            padding: 4px 12px;
            border-radius: 9999px;
            font-size: 12px;
            font-weight: 600;
            text-transform: uppercase;
        }

        .badge-primary {
            background: rgba(201, 162, 39, 0.12);
            color: #8F7118;
        }

        .badge-accent {
            background: rgba(228, 196, 106, 0.18);
            color: #8F7118;
        }

        .badge-teal {
            background: rgba(212, 175, 55, 0.14);
            color: #8F7118;
        }

        .badge-success {
            background: rgba(201, 162, 39, 0.12);
            color: #8F7118;
        }

        /* Loading Spinner */
        .loading-spinner {
            width: 40px;
            height: 40px;
            border: 3px solid #efe7d6;
            border-top-color: #C9A227;
            border-radius: 50%;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            to {
                transform: rotate(360deg);
            }
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-20px);
            }
        }

        .float-element {
            animation: float 6s ease-in-out infinite;
        }

        .animate-pulse-slow {
            animation: pulse 4s cubic-bezier(0.4, 0, 0.6, 1) infinite;
        }

        .animate-bounce-slow {
            animation: bounce 3s ease-in-out infinite;
        }

        /* Mobile Menu */
        .mobile-menu {
            position: fixed;
            top: 0;
            right: -100%;
            width: 80%;
            max-width: 320px;
            height: 100vh;
            background: #0f2942;
            z-index: 100;
            transition: right 0.4s ease;
            padding: 80px 30px 30px;
        }

        .mobile-menu.active {
            right: 0;
        }

        .mobile-menu-overlay {
            position: fixed;
            inset: 0;
            background: rgba(0, 0, 0, 0.5);
            z-index: 99;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
        }

        .mobile-menu-overlay.active {
            opacity: 1;
            visibility: visible;
        }

        /* Social Icons */
        .social-icon {
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.1);
            color: white;
            transition: all 0.3s ease;
        }

        .social-icon:hover {
            background: #D4AF37;
            transform: translateY(-3px);
        }

        /* Profile Image */
        .profile-img {
            width: 48px;
            height: 48px;
            border-radius: 50%;
            object-fit: cover;
            border: 2px solid white;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        /* Country Card Image */
        .country-img {
            width: 64px;
            height: 64px;
            border-radius: 50%;
            object-fit: cover;
            border: 3px solid rgba(255, 255, 255, 0.2);
        }

        /* Hero Image */
        .hero-image {
            position: relative;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
        }

        /* Service Image Container */
        .service-img-container {
            position: relative;
            height: 200px;
            overflow: hidden;
            border-radius: 12px;
            margin-bottom: 1.5rem;
        }

        .service-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .card-hover:hover .service-img {
            transform: scale(1.05);
        }

        /* About Image */
        .about-image-container {
            position: relative;
            height: 300px;
            border-radius: 16px;
            overflow: hidden;
        }

        /* Testimonial Avatar */
        .testimonial-avatar {
            width: 56px;
            height: 56px;
            border-radius: 50%;
            object-fit: cover;
            border: 3px solid #e2e8f0;
        }

        /* Country Flag Image */
        .flag-img {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            object-fit: cover;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            border: 3px solid rgba(255, 255, 255, 0.3);
        }

        /* Focus Styles */
        *:focus-visible {
            outline: 2px solid #C9A227;
            outline-offset: 2px;
        }

        @media (prefers-reduced-motion: reduce) {

            *,
            *::before,
            *::after {
                animation-duration: 0.01ms !important;
                transition-duration: 0.01ms !important;
            }

            html {
                scroll-behavior: auto;
            }
        }
    </style>
</head>

<body class="antialiased">
    <!-- Preloader -->
    <div id="preloader" class="fixed inset-0 bg-primary-950 z-[200] flex items-center justify-center transition-all duration-500">
        <div class="text-center">
            <div class="loading-spinner mx-auto mb-6"></div>
            <p class="text-white text-lg font-medium">Loading...</p>
        </div>
    </div>

    <!-- Navigation -->
    <header id="navbar" class="fixed top-0 left-0 right-0 z-50 transition-all duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">
                <a href="#home" class="flex items-center space-x-3 group">
                    <div class="flex items-center justify-center transform group-hover:scale-105 transition-transform">
                        <img src="images/JOJO.png" alt="Joseline International Manpower Corporation Logo" class="h-14 w-auto object-contain">
                    </div>
                    <div class="hidden sm:block">
                        <h1 class="text-white font-display font-bold text-lg leading-tight">JOSELINE</h1>
                        <p class="text-primary-300 text-xs tracking-wider">INTERNATIONAL MANPOWER</p>
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
                    <a href="#jobs" class="btn-accent text-sm px-6 py-3">Apply Now</a>
                </div>
                <button id="mobile-menu-btn" class="lg:hidden text-white p-2" aria-label="Open menu">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
        <div id="nav-bg" class="absolute inset-0 bg-primary-950/95 backdrop-blur-md opacity-0 transition-opacity duration-300 -z-10"></div>
    </header>

    <!-- Mobile Menu -->
    <div id="mobile-menu-overlay" class="mobile-menu-overlay"></div>
    <div id="mobile-menu" class="mobile-menu">
        <button id="mobile-menu-close" class="absolute top-6 right-6 text-white" aria-label="Close menu">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
        <nav class="flex flex-col space-y-6">
            <a href="#home" class="text-white text-xl font-medium hover:text-accent-400">Home</a>
            <a href="#about" class="text-white text-xl font-medium hover:text-accent-400">About</a>
            <a href="#jobs" class="text-white text-xl font-medium hover:text-accent-400">Job Opportunities</a>
            <a href="#deployment" class="text-white text-xl font-medium hover:text-accent-400">Deployment</a>
            <a href="#contact" class="text-white text-xl font-medium hover:text-accent-400">Contact</a>
            <div class="pt-6 border-t border-white/20">
                <a href="#jobs" class="btn-accent text-center block">Apply Now</a>
            </div>
        </nav>
    </div>

    <!-- Hero Section -->
    <section id="home" class="relative min-h-screen flex items-center hero-pattern overflow-hidden">
        <!-- Floating Shapes -->
        <div class="absolute inset-0 overflow-hidden pointer-events-none">
            <div class="float-element absolute top-20 left-10 w-20 h-20 bg-primary-500/10 rounded-full blur-xl"></div>
            <div class="float-element absolute top-40 right-20 w-32 h-32 bg-teal-500/10 rounded-full blur-xl" style="animation-delay: 1s;"></div>
            <div class="float-element absolute bottom-40 left-1/4 w-24 h-24 bg-accent-500/10 rounded-full blur-xl" style="animation-delay: 2s;"></div>
        </div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-32 lg:py-40">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div class="text-center lg:text-left">
                    <div class="reveal inline-flex items-center space-x-2 bg-white/10 backdrop-blur-sm px-4 py-2 rounded-full mb-6">
                        <svg class="w-5 h-5 text-accent-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812z" clip-rule="evenodd" />
                        </svg>
                        <span class="text-white text-sm font-medium">DMW Licensed Agency</span>
                    </div>

                    <h1 class="reveal stagger-1 font-display text-4xl sm:text-5xl lg:text-6xl font-bold text-white leading-tight mb-6">
                        Trusted Overseas Recruitment for
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-accent-300 to-primary-400">Skilled Filipino Workers</span>
                    </h1>

                    <p class="reveal stagger-2 text-primary-200 text-lg sm:text-xl max-w-xl mx-auto lg:mx-0 mb-8">
                        Connecting world-class Filipino talent with global employers since 1976. Your trusted partner in international manpower solutions.
                    </p>

                    <div class="reveal stagger-3 flex flex-col sm:flex-row gap-4 justify-center lg:justify-start mb-12">
                        <a href="#jobs" class="btn-accent text-center px-8 py-4 text-lg">View Jobs</a>
                        <a href="#contact" class="btn-outline text-center px-8 py-4 text-lg">Contact Us</a>
                    </div>

                    <div class="reveal stagger-4 flex flex-wrap justify-center lg:justify-start gap-6">
                        <div class="flex items-center space-x-2">
                            <div class="w-10 h-10 bg-teal-500/20 rounded-full flex items-center justify-center">
                                <svg class="w-5 h-5 text-accent-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                </svg>
                            </div>
                            <span class="text-white text-sm font-medium">DMW Licensed</span>
                        </div>
                        <div class="flex items-center space-x-2">
                            <div class="w-10 h-10 bg-accent-500/20 rounded-full flex items-center justify-center">
                                <svg class="w-5 h-5 text-accent-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <span class="text-white text-sm font-medium">Global Partners</span>
                        </div>
                        <div class="flex items-center space-x-2">
                            <div class="w-10 h-10 bg-primary-500/20 rounded-full flex items-center justify-center">
                                <svg class="w-5 h-5 text-primary-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>
                            </div>
                            <span class="text-white text-sm font-medium">1000+ Deployed</span>
                        </div>
                    </div>
                </div>

                <!-- Hero Image - Workers -->
                <div class="reveal stagger-5 relative">
                    <div class="relative">
                        <!-- Main Image Card -->
                        <div class="hero-image">
                            <img
                                src="https://media.istockphoto.com/id/1419069351/photo/asian-business-team-male-and-female-colleagues-talking-at-work-share-ideas-with-laptop-happy.jpg?s=612x612&w=0&k=20&c=j7oIgOxC6Z1s2VfwTOzeWfEIsYOtud1A6zSqbrqSWiQ="
                                alt="Professional Filipino workers in a meeting"
                                class="w-full h-[400px] lg:h-[450px] object-cover">
                            <!-- Overlay Content -->
                            <div class="absolute inset-0 bg-gradient-to-t from-primary-950/90 via-primary-950/30 to-transparent"></div>

                            <!-- Stats Grid Overlay -->
                            <div class="absolute bottom-0 left-0 right-0 p-6">
                                <div class="grid grid-cols-2 gap-4 mb-4">
                                    <div class="bg-white/10 backdrop-blur-sm rounded-xl p-4 text-center">
                                        <div class="text-3xl font-bold text-white mb-1 counter" data-target="6">0</div>
                                        <div class="text-primary-200 text-xs">Active Roles</div>
                                    </div>
                                    <div class="bg-white/10 backdrop-blur-sm rounded-xl p-4 text-center">
                                        <div class="text-3xl font-bold text-white mb-1 counter" data-target="3">0</div>
                                        <div class="text-primary-200 text-xs">Countries</div>
                                    </div>
                                    <div class="bg-white/10 backdrop-blur-sm rounded-xl p-4 text-center">
                                        <div class="text-3xl font-bold text-white mb-1 counter" data-target="47">0</div>
                                        <div class="text-primary-200 text-xs">Years Experience</div>
                                    </div>
                                    <div class="bg-white/10 backdrop-blur-sm rounded-xl p-4 text-center">
                                        <div class="text-3xl font-bold text-white mb-1">1000<span class="text-lg">+</span></div>
                                        <div class="text-primary-200 text-xs">Workers Deployed</div>
                                    </div>
                                </div>

                                <!-- License Badge -->
                                <div class="bg-gradient-to-r from-teal-500/20 to-accent-500/20 rounded-xl p-3 border border-white/10">
                                    <div class="flex items-center justify-between">
                                        <div>
                                            <p class="text-white text-sm font-medium">DMW License</p>
                                            <p class="text-primary-300 text-xs">DMW-009-LB-03072023-R</p>
                                        </div>
                                        <div class="w-10 h-10 bg-white/10 rounded-lg flex items-center justify-center">
                                            <svg class="w-5 h-5 text-accent-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Floating Badge -->
                        <div class="absolute -top-4 -right-4 w-20 h-20 bg-accent-500/30 rounded-full blur-xl animate-pulse-slow"></div>
                        <div class="absolute -bottom-6 -left-6 w-24 h-24 bg-teal-500/20 rounded-full blur-xl animate-pulse-slow" style="animation-delay: 1s;"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Wave Divider -->
        <div class="wave-divider">
            <svg viewBox="0 0 1200 120" preserveAspectRatio="none" fill="#fafbfc">
                <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V120H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z"></path>
            </svg>
        </div>

        <!-- Scroll Indicator -->
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce-slow">
            <a href="#stats" class="text-white/50 hover:text-white transition-colors" aria-label="Scroll down">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3" />
                </svg>
            </a>
        </div>
    </section>

    <!-- Stats Section -->
    <section id="stats" class="py-16 bg-white relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                <div class="reveal text-center">
                    <div class="w-16 h-16 bg-primary-50 rounded-2xl flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <div class="text-3xl font-bold text-primary-950 mb-1 counter" data-target="47">0</div>
                    <div class="text-slate-600">Years of Excellence</div>
                </div>
                <div class="reveal stagger-1 text-center">
                    <div class="w-16 h-16 bg-accent-50 rounded-2xl flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-primary-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                    </div>
                    <div class="text-3xl font-bold text-primary-950 mb-1">1000<span class="text-2xl">+</span></div>
                    <div class="text-slate-600">Workers Deployed</div>
                </div>
                <div class="reveal stagger-2 text-center">
                    <div class="w-16 h-16 bg-accent-50 rounded-2xl flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-accent-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <div class="text-3xl font-bold text-primary-950 mb-1 counter" data-target="3">0</div>
                    <div class="text-slate-600">Partner Countries</div>
                </div>
                <div class="reveal stagger-3 text-center">
                    <div class="w-16 h-16 bg-accent-50 rounded-2xl flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-primary-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                    </div>
                    <div class="text-3xl font-bold text-primary-950 mb-1">DMW</div>
                    <div class="text-slate-600">Licensed Agency</div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section with Image -->
    <section id="about" class="py-20 lg:py-32 bg-slate-50 relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="reveal inline-block text-accent-600 font-semibold tracking-wider text-sm uppercase mb-4">About Us</span>
                <h2 class="reveal stagger-1 font-display text-3xl sm:text-4xl lg:text-5xl font-bold text-primary-950 mb-6">
                    Your Trusted Partner in <span class="text-gradient">Global Recruitment</span>
                </h2>
                <div class="reveal stagger-2 w-20 h-1 bg-gradient-to-r from-primary-400 to-accent-400 mx-auto rounded-full"></div>
            </div>

            <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">
                <div class="order-2 lg:order-1">
                    <div class="reveal-left space-y-6">
                        <p class="text-lg text-slate-700 leading-relaxed">
                            <strong class="text-primary-950">Joseline International Manpower Corporation (Joseline)</strong> is a licensed Philippine recruitment agency accredited by the Department of Migrant Workers (DMW).
                        </p>
                        <p class="text-slate-600 leading-relaxed">
                            Since commencing operations in 1976, Joseline has deployed thousands of Filipino workers equipped with world-class competencies and prepared to meet the evolving demands of the global workforce.
                        </p>
                        <p class="text-slate-600 leading-relaxed">
                            Its established track record, supported by strong recruitment capacity and dependable deployment capability, positions the organization among the Philippines' leading land-based manpower providers.
                        </p>
                        <p class="text-slate-600 leading-relaxed">
                            The company places strong importance on building harmonious and long-term relationships with its clients, cultivating partnerships grounded in trust, transparency, and mutual confidence.
                        </p>

                        <div class="grid sm:grid-cols-2 gap-4 pt-4">
                            <div class="flex items-start space-x-3">
                                <div class="w-10 h-10 bg-primary-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <svg class="w-5 h-5 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-primary-950">DMW Licensed</h4>
                                    <p class="text-sm text-slate-500">Fully accredited agency</p>
                                </div>
                            </div>
                            <div class="flex items-start space-x-3">
                                <div class="w-10 h-10 bg-teal-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <svg class="w-5 h-5 text-primary-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-primary-950">Since 1976</h4>
                                    <p class="text-sm text-slate-500">47+ years experience</p>
                                </div>
                            </div>
                            <div class="flex items-start space-x-3">
                                <div class="w-10 h-10 bg-accent-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <svg class="w-5 h-5 text-accent-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-primary-950">Global Network</h4>
                                    <p class="text-sm text-slate-500">Worldwide partnerships</p>
                                </div>
                            </div>
                            <div class="flex items-start space-x-3">
                                <div class="w-10 h-10 bg-green-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <svg class="w-5 h-5 text-primary-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-primary-950">Trusted Service</h4>
                                    <p class="text-sm text-slate-500">1000+ deployed workers</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- About Image -->
                <div class="order-1 lg:order-2 reveal-right">
                    <div class="relative">
                        <div class="about-image-container">
                            <img
                                src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                                alt="Professional team collaboration in office"
                                class="w-full h-full object-cover">
                            <div class="absolute inset-0 bg-gradient-to-br from-primary-900/40 to-primary-950/60"></div>
                        </div>

                        <!-- Floating Badge -->
                        <div class="absolute -bottom-4 -left-4 bg-white rounded-xl shadow-xl p-4 border border-slate-100">
                            <div class="flex items-center space-x-3">
                                <img
                                    src="images/walter.png"
                                    alt="Walter"
                                    class="w-12 h-12 rounded-lg object-cover" />
                                <div>
                                    <p class="font-bold text-primary-950">Trusted Partner</p>
                                    <p class="text-xs text-slate-500">Global Employers</p>
                                </div>
                            </div>
                        </div>

                        <!-- Decorative Elements -->
                        <div class="absolute -top-4 -right-4 w-20 h-20 bg-accent-500/30 rounded-full blur-xl"></div>
                        <div class="absolute -bottom-6 -right-6 w-24 h-24 bg-teal-500/20 rounded-full blur-xl"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section with Images -->
    <section id="services" class="py-20 lg:py-32 bg-white relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="reveal inline-block text-accent-600 font-semibold tracking-wider text-sm uppercase mb-4">Our Services</span>
                <h2 class="reveal stagger-1 font-display text-3xl sm:text-4xl lg:text-5xl font-bold text-primary-950 mb-6">
                    Comprehensive <span class="text-gradient">Manpower Solutions</span>
                </h2>
                <p class="reveal stagger-2 text-slate-600 text-lg">
                    We provide end-to-end recruitment and deployment services tailored to meet your workforce requirements.
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Service 1 -->
                <div class="reveal card-hover bg-white rounded-2xl overflow-hidden border border-slate-100 group">
                    <div class="service-img-container">
                        <img
                            src="https://images.unsplash.com/photo-1758520144437-f068ecaf0d83?fm=jpg&ixid=M3wxMjA3fDB8MHxwaG90by1yZWxhdGVkfDM1fHx8ZW58MHx8fHx8&ixlib=rb-4.1.0&q=60&w=3000"
                            alt="Recruitment and hiring process"
                            class="service-img">
                    </div>
                    <div class="p-6">
                        <h3 class="font-display text-xl font-bold text-primary-950 mb-3">Recruitment Services</h3>
                        <p class="text-slate-600 mb-4">Comprehensive talent sourcing and screening to match the right candidates with your specific job requirements.</p>
                        <ul class="space-y-2">
                            <li class="flex items-center text-sm text-slate-600">
                                <svg class="w-4 h-4 text-teal-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                </svg>
                                Skills Assessment
                            </li>
                            <li class="flex items-center text-sm text-slate-600">
                                <svg class="w-4 h-4 text-teal-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                </svg>
                                Background Verification
                            </li>
                            <li class="flex items-center text-sm text-slate-600">
                                <svg class="w-4 h-4 text-teal-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                </svg>
                                Candidate Matching
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Service 2 -->
                <div class="reveal stagger-1 card-hover bg-white rounded-2xl overflow-hidden border border-slate-100 group">
                    <div class="service-img-container">
                        <img src="https://plus.unsplash.com/premium_photo-1763136099390-91f502621321?auto=format&fit=crop&fm=jpg&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&ixlib=rb-4.1.0&q=60&w=3000"
                            alt="Visa processing and travel arrangements"
                            class="w-full h-48 object-cover">
                    </div>
                    <div class="p-6">
                        <h3 class="font-display text-xl font-bold text-primary-950 mb-3">Deployment Services</h3>
                        <p class="text-slate-600 mb-4">Seamless processing and deployment of workers to international destinations with full documentation support.</p>
                        <ul class="space-y-2">
                            <li class="flex items-center text-sm text-slate-600">
                                <svg class="w-4 h-4 text-teal-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                </svg>
                                Visa Processing
                            </li>
                            <li class="flex items-center text-sm text-slate-600">
                                <svg class="w-4 h-4 text-teal-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                </svg>
                                Travel Arrangements
                            </li>
                            <li class="flex items-center text-sm text-slate-600">
                                <svg class="w-4 h-4 text-teal-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                </svg>
                                Pre-departure Orientation
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Service 3 -->
                <div class="reveal stagger-2 card-hover bg-white rounded-2xl overflow-hidden border border-slate-100 group">
                    <div class="service-img-container">
                        <img
                            src="https://media.istockphoto.com/id/2193688586/photo/a-group-of-teenagers-sit-in-a-circle-with-a-teacher.jpg?s=612x612&w=0&k=20&c=tPc5JHc9KmV_F4VeZSygutHzux2zqel-rRRIF0gNlPY="
                            alt="Skills training session"
                            class="service-img">
                    </div>
                    <div class="p-6">
                        <h3 class="font-display text-xl font-bold text-primary-950 mb-3">Training Programs</h3>
                        <p class="text-slate-600 mb-4">Skills enhancement and preparatory training to ensure workers are job-ready for international employment.</p>
                        <ul class="space-y-2">
                            <li class="flex items-center text-sm text-slate-600">
                                <svg class="w-4 h-4 text-teal-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                </svg>
                                Technical Skills Training
                            </li>
                            <li class="flex items-center text-sm text-slate-600">
                                <svg class="w-4 h-4 text-teal-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                </svg>
                                Language Proficiency
                            </li>
                            <li class="flex items-center text-sm text-slate-600">
                                <svg class="w-4 h-4 text-teal-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                </svg>
                                Cultural Orientation
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Service 4 -->
                <div class="reveal stagger-3 card-hover bg-white rounded-2xl overflow-hidden border border-slate-100 group">
                    <div class="service-img-container">
                        <img
                            src="https://images.unsplash.com/photo-1554224155-6726b3ff858f?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80"
                            alt="Document processing"
                            class="service-img">
                    </div>
                    <div class="p-6">
                        <h3 class="font-display text-xl font-bold text-primary-950 mb-3">Documentation Support</h3>
                        <p class="text-slate-600 mb-4">Complete assistance with all necessary employment documents and government requirements.</p>
                        <ul class="space-y-2">
                            <li class="flex items-center text-sm text-slate-600">
                                <svg class="w-4 h-4 text-teal-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                </svg>
                                Contract Processing
                            </li>
                            <li class="flex items-center text-sm text-slate-600">
                                <svg class="w-4 h-4 text-teal-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                </svg>
                                POEA/DMW Requirements
                            </li>
                            <li class="flex items-center text-sm text-slate-600">
                                <svg class="w-4 h-4 text-teal-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                </svg>
                                Authentication Services
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Service 5 -->
                <div class="reveal stagger-4 card-hover bg-white rounded-2xl overflow-hidden border border-slate-100 group">
                    <div class="service-img-container">
                        <img
                            src="https://plus.unsplash.com/premium_photo-1661722392275-6c201a3e12e7?auto=format&fit=crop&fm=jpg&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&ixlib=rb-4.1.0&q=60&w=3000"
                            alt="Business partnership handshake"
                            class="service-img">
                    </div>
                    <div class="p-6">
                        <h3 class="font-display text-xl font-bold text-primary-950 mb-3">Employer Partnership</h3>
                        <p class="text-slate-600 mb-4">Strategic partnerships with international employers to provide reliable workforce solutions.</p>
                        <ul class="space-y-2">
                            <li class="flex items-center text-sm text-slate-600">
                                <svg class="w-4 h-4 text-teal-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                </svg>
                                Custom Recruitment
                            </li>
                            <li class="flex items-center text-sm text-slate-600">
                                <svg class="w-4 h-4 text-teal-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                </svg>
                                Volume Hiring
                            </li>
                            <li class="flex items-center text-sm text-slate-600">
                                <svg class="w-4 h-4 text-teal-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                </svg>
                                Project Staffing
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Service 6 -->
                <div class="reveal stagger-5 card-hover bg-white rounded-2xl overflow-hidden border border-slate-100 group">
                    <div class="service-img-container">
                        <img
                            src="https://www.abetteranswer.com/hubfs/Customer%20Service_Greeting%20Customer-small.jpg"
                            alt="Worker support and assistance"
                            class="service-img">
                    </div>
                    <div class="p-6">
                        <h3 class="font-display text-xl font-bold text-primary-950 mb-3">Worker Support</h3>
                        <p class="text-slate-600 mb-4">Ongoing assistance and support for deployed workers throughout their employment contract.</p>
                        <ul class="space-y-2">
                            <li class="flex items-center text-sm text-slate-600">
                                <svg class="w-4 h-4 text-teal-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                </svg>
                                Welfare Assistance
                            </li>
                            <li class="flex items-center text-sm text-slate-600">
                                <svg class="w-4 h-4 text-teal-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                </svg>
                                Grievance Handling
                            </li>
                            <li class="flex items-center text-sm text-slate-600">
                                <svg class="w-4 h-4 text-teal-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                </svg>
                                Contract Renewal
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Job Opportunities Section -->
    <section id="jobs" class="py-20 lg:py-32 bg-gradient-to-b from-slate-50 to-white relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="reveal inline-block text-accent-600 font-semibold tracking-wider text-sm uppercase mb-4">Career Opportunities</span>
                <h2 class="reveal stagger-1 font-display text-3xl sm:text-4xl lg:text-5xl font-bold text-primary-950 mb-6">
                    Available <span class="text-gradient">Job Positions</span>
                </h2>
                <p class="reveal stagger-2 text-slate-600 text-lg">
                    Explore exciting overseas employment opportunities with competitive benefits and career growth.
                </p>
            </div>

            <div class="reveal stagger-2 flex flex-wrap justify-center gap-2 mb-12">
                <button class="job-filter-btn active px-6 py-2 rounded-full text-sm font-medium transition-all" data-filter="all">All Positions</button>
                <button class="job-filter-btn px-6 py-2 rounded-full text-sm font-medium transition-all" data-filter="healthcare">Healthcare</button>
                <button class="job-filter-btn px-6 py-2 rounded-full text-sm font-medium transition-all" data-filter="construction">Construction</button>
                <button class="job-filter-btn px-6 py-2 rounded-full text-sm font-medium transition-all" data-filter="it">IT</button>
                <button class="job-filter-btn px-6 py-2 rounded-full text-sm font-medium transition-all" data-filter="professional">Professional</button>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6" id="jobs-grid">
                <!-- Job 1 -->
                <div class="reveal job-card card-hover bg-white rounded-2xl p-6 border border-slate-200 shadow-sm" data-category="healthcare">
                    <div class="flex items-start justify-between mb-4">
                        <img
                            src="https://media.istockphoto.com/id/1446497053/photo/a-smiling-dentist-in-the-clinic-is-holding-medical-records-health-worker.jpg?s=612x612&w=0&k=20&c=bxdcOnSo68z0iWx0gP_gB_85p3nlkEtkUEe-PDu-rio="
                            alt="Healthcare professional"
                            class="w-12 h-12 rounded-xl object-cover">
                        <span class="badge badge-teal">Healthcare</span>
                    </div>
                    <h3 class="font-display text-xl font-bold text-primary-950 mb-2">Female Nursing Specialist</h3>
                    <p class="text-slate-600 text-sm mb-4">Provide professional nursing care in medical facilities. Must have valid nursing license and clinical experience.</p>
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="text-xs bg-slate-100 text-slate-600 px-3 py-1 rounded-full">Saudi Arabia</span>
                        <span class="text-xs bg-slate-100 text-slate-600 px-3 py-1 rounded-full">Full-time</span>
                    </div>
                    <button class="job-apply-btn w-full py-3 bg-primary-600 hover:bg-primary-700 text-white rounded-lg font-medium transition-colors">Apply Now</button>
                </div>

                <!-- Job 2 -->
                <div class="reveal stagger-1 job-card card-hover bg-white rounded-2xl p-6 border border-slate-200 shadow-sm" data-category="construction">
                    <div class="flex items-start justify-between mb-4">
                        <img
                            src="https://images.unsplash.com/photo-1504307651254-35680f356dfd?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80"
                            alt="Construction worker"
                            class="w-12 h-12 rounded-xl object-cover">
                        <span class="badge badge-accent">Construction</span>
                    </div>
                    <h3 class="font-display text-xl font-bold text-primary-950 mb-2">Tile Worker / Tile Setter</h3>
                    <p class="text-slate-600 text-sm mb-4">Install tiles in residential and commercial buildings. Experience with various tile materials required.</p>
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="text-xs bg-slate-100 text-slate-600 px-3 py-1 rounded-full">Saudi Arabia</span>
                        <span class="text-xs bg-slate-100 text-slate-600 px-3 py-1 rounded-full">Full-time</span>
                    </div>
                    <button class="job-apply-btn w-full py-3 bg-primary-600 hover:bg-primary-700 text-white rounded-lg font-medium transition-colors">Apply Now</button>
                </div>

                <!-- Job 3 -->
                <div class="reveal stagger-2 job-card card-hover bg-white rounded-2xl p-6 border border-slate-200 shadow-sm" data-category="construction">
                    <div class="flex items-start justify-between mb-4">
                        <img
                            src="https://images.unsplash.com/photo-1621905252507-b35492cc74b4?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80"
                            alt="Electrician at work"
                            class="w-12 h-12 rounded-xl object-cover">
                        <span class="badge badge-accent">Construction</span>
                    </div>
                    <h3 class="font-display text-xl font-bold text-primary-950 mb-2">Building Electrician</h3>
                    <p class="text-slate-600 text-sm mb-4">Install and maintain electrical systems in buildings. Must have relevant certifications and experience.</p>
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="text-xs bg-slate-100 text-slate-600 px-3 py-1 rounded-full">Saudi Arabia</span>
                        <span class="text-xs bg-slate-100 text-slate-600 px-3 py-1 rounded-full">Full-time</span>
                    </div>
                    <button class="job-apply-btn w-full py-3 bg-primary-600 hover:bg-primary-700 text-white rounded-lg font-medium transition-colors">Apply Now</button>
                </div>

                <!-- Job 4 -->
                <div class="reveal stagger-3 job-card card-hover bg-white rounded-2xl p-6 border border-slate-200 shadow-sm" data-category="it">
                    <div class="flex items-start justify-between mb-4">
                        <img
                            src="https://images.unsplash.com/photo-1531482615713-2afd69097998?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80"
                            alt="IT support specialist"
                            class="w-12 h-12 rounded-xl object-cover">
                        <span class="badge badge-primary">IT</span>
                    </div>
                    <h3 class="font-display text-xl font-bold text-primary-950 mb-2">IT Support Technician</h3>
                    <p class="text-slate-600 text-sm mb-4">Provide technical support and maintain IT infrastructure. Experience with network systems required.</p>
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="text-xs bg-slate-100 text-slate-600 px-3 py-1 rounded-full">Timor-Leste</span>
                        <span class="text-xs bg-slate-100 text-slate-600 px-3 py-1 rounded-full">Full-time</span>
                    </div>
                    <button class="job-apply-btn w-full py-3 bg-primary-600 hover:bg-primary-700 text-white rounded-lg font-medium transition-colors">Apply Now</button>
                </div>

                <!-- Job 5 -->
                <div class="reveal stagger-4 job-card card-hover bg-white rounded-2xl p-6 border border-slate-200 shadow-sm" data-category="professional">
                    <div class="flex items-start justify-between mb-4">
                        <img
                            src="https://images.unsplash.com/photo-1503387762-592deb58ef4e?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80"
                            alt="Architectural draftsman"
                            class="w-12 h-12 rounded-xl object-cover">
                        <span class="badge badge-success">Professional</span>
                    </div>
                    <h3 class="font-display text-xl font-bold text-primary-950 mb-2">Architectural Draftsman</h3>
                    <p class="text-slate-600 text-sm mb-4">Create detailed architectural drawings and plans. Proficiency in CAD software is essential.</p>
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="text-xs bg-slate-100 text-slate-600 px-3 py-1 rounded-full">Timor-Leste</span>
                        <span class="text-xs bg-slate-100 text-slate-600 px-3 py-1 rounded-full">Full-time</span>
                    </div>
                    <button class="job-apply-btn w-full py-3 bg-primary-600 hover:bg-primary-700 text-white rounded-lg font-medium transition-colors">Apply Now</button>
                </div>

                <!-- Job 6 -->
                <div class="reveal stagger-5 job-card card-hover bg-white rounded-2xl p-6 border border-slate-200 shadow-sm" data-category="professional">
                    <div class="flex items-start justify-between mb-4">
                        <img
                            src="https://media.istockphoto.com/id/2219453779/photo/young-professional-sitting-at-a-desk-with-a-laptop-in-an-office.jpg?s=612x612&w=0&k=20&c=-6Bmfh-lpM0dHvJ8hFHbApWFRmh-wOpJ4E4AGFq6uNw="
                            alt="Business professional"
                            class="w-12 h-12 rounded-xl object-cover">
                        <span class="badge badge-success">Professional</span>
                    </div>
                    <h3 class="font-display text-xl font-bold text-primary-950 mb-2">Purchase Representative</h3>
                    <p class="text-slate-600 text-sm mb-4">Handle procurement and purchasing activities. Experience in supply chain management preferred.</p>
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="text-xs bg-slate-100 text-slate-600 px-3 py-1 rounded-full">Greece</span>
                        <span class="text-xs bg-slate-100 text-slate-600 px-3 py-1 rounded-full">Full-time</span>
                    </div>
                    <button class="job-apply-btn w-full py-3 bg-primary-600 hover:bg-primary-700 text-white rounded-lg font-medium transition-colors">Apply Now</button>
                </div>
            </div>

            <div class="reveal text-center mt-12">
                <p class="text-slate-600 mb-4">Don't see a position that matches your skills?</p>
                <a href="#contact" class="btn-outline-dark inline-block">Send Your Resume</a>
            </div>
        </div>
    </section>

    <!-- Deployment Section with Country Images -->
    <section id="deployment" class="py-20 lg:py-32 bg-primary-950 relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="reveal inline-block text-accent-400 font-semibold tracking-wider text-sm uppercase mb-4">Deployment</span>
                <h2 class="reveal stagger-1 font-display text-3xl sm:text-4xl lg:text-5xl font-bold text-white mb-6">
                    Deployment <span class="text-transparent bg-clip-text bg-gradient-to-r from-accent-400 to-accent-400">Countries</span>
                </h2>
                <p class="reveal stagger-2 text-primary-200 text-lg">
                    We deploy Filipino workers to trusted partner countries across the globe.
                </p>
            </div>

            <!-- Country Cards with Images -->
            <div class="grid md:grid-cols-3 gap-8 mb-16">
                <!-- Saudi Arabia -->
                <div class="reveal card-hover rounded-2xl overflow-hidden group">
                    <div class="relative h-64">
                        <img
                            src="https://images.unsplash.com/photo-1586724237569-f3d0c1dee8c6?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80"
                            alt="Riyadh skyline, Saudi Arabia"
                            class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-primary-950 via-primary-950/50 to-transparent"></div>
                        <div class="absolute bottom-0 left-0 right-0 p-6">
                            <div class="flex items-center space-x-4">
                                <img
                                    src="https://images.unsplash.com/photo-1586724237569-f3d0c1dee8c6?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80"
                                    alt="Saudi Arabia"
                                    class="flag-img">
                                <div>
                                    <h3 class="font-display text-xl font-bold text-white">Saudi Arabia</h3>
                                    <p class="text-primary-200 text-sm">Middle East Region</p>
                                </div>
                            </div>
                            <div class="mt-4 flex flex-wrap gap-2">
                                <span class="text-xs bg-white/10 text-white px-3 py-1 rounded-full">Domestic Helpers</span>
                                <span class="text-xs bg-white/10 text-white px-3 py-1 rounded-full">Skilled Workers</span>
                                <span class="text-xs bg-white/10 text-white px-3 py-1 rounded-full">Professionals</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Greece -->
                <div class="reveal stagger-1 card-hover rounded-2xl overflow-hidden group">
                    <div class="relative h-64">
                        <img
                            src="https://images.unsplash.com/photo-1533105079780-92b9be482077?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80"
                            alt="Santorini, Greece"
                            class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-primary-950 via-primary-950/50 to-transparent"></div>
                        <div class="absolute bottom-0 left-0 right-0 p-6">
                            <div class="flex items-center space-x-4">
                                <img
                                    src="https://images.unsplash.com/photo-1533105079780-92b9be482077?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80"
                                    alt="Greece"
                                    class="flag-img">
                                <div>
                                    <h3 class="font-display text-xl font-bold text-white">Greece</h3>
                                    <p class="text-primary-200 text-sm">European Region</p>
                                </div>
                            </div>
                            <div class="mt-4 flex flex-wrap gap-2">
                                <span class="text-xs bg-white/10 text-white px-3 py-1 rounded-full">Skilled Workers</span>
                                <span class="text-xs bg-white/10 text-white px-3 py-1 rounded-full">Professionals</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Timor-Leste -->
                <div class="reveal stagger-2 card-hover rounded-2xl overflow-hidden group">
                    <div class="relative h-64">
                        <img
                            src="https://images.unsplash.com/photo-1518509562904-e7ef99cdcc86?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80"
                            alt="Beach in Southeast Asia"
                            class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-primary-950 via-primary-950/50 to-transparent"></div>
                        <div class="absolute bottom-0 left-0 right-0 p-6">
                            <div class="flex items-center space-x-4">
                                <img
                                    src="https://images.unsplash.com/photo-1518509562904-e7ef99cdcc86?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80"
                                    alt="Timor-Leste"
                                    class="flag-img">
                                <div>
                                    <h3 class="font-display text-xl font-bold text-white">Timor-Leste</h3>
                                    <p class="text-primary-200 text-sm">Asia Pacific Region</p>
                                </div>
                            </div>
                            <div class="mt-4 flex flex-wrap gap-2">
                                <span class="text-xs bg-white/10 text-white px-3 py-1 rounded-full">IT Professionals</span>
                                <span class="text-xs bg-white/10 text-white px-3 py-1 rounded-full">Engineers</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Deployment Categories -->
            <div class="reveal">
                <h3 class="text-center font-display text-2xl font-bold text-white mb-8">Deployment Categories</h3>
                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <div class="bg-white/5 backdrop-blur-sm rounded-2xl p-6 border border-white/10 text-center">
                        <img
                            src="https://images.unsplash.com/photo-1581578731548-c64695cc6952?ixlib=rb-4.0.3&auto=format&fit=crop&w=200&q=80"
                            alt="Domestic worker"
                            class="w-20 h-20 rounded-full mx-auto mb-4 object-cover border-2 border-white/20">
                        <h4 class="font-display text-lg font-bold text-white mb-2">Domestic Helper</h4>
                        <p class="text-primary-300 text-sm">Household & caregiving</p>
                    </div>
                    <div class="bg-white/5 backdrop-blur-sm rounded-2xl p-6 border border-white/10 text-center">
                        <img
                            src="https://png.pngtree.com/thumb_back/fw800/background/20251026/pngtree-architect-working-on-blueprints-at-a-drafting-table-with-rolls-of-image_20022489.webp"
                            alt="Professional worker"
                            class="w-20 h-20 rounded-full mx-auto mb-4 object-cover border-2 border-white/20">
                        <h4 class="font-display text-lg font-bold text-white mb-2">Professionals</h4>
                        <p class="text-primary-300 text-sm">Specialized roles</p>
                    </div>
                    <div class="bg-white/5 backdrop-blur-sm rounded-2xl p-6 border border-white/10 text-center">
                        <img
                            src="https://media.istockphoto.com/id/2227010302/photo/construction-worker-on-a-work-site.webp?a=1&b=1&s=612x612&w=0&k=20&c=9dg3hz3NBGuhLqQihbvOwI583ttPYNHnG0ZDAPFTYa4="
                            alt="Construction worker"
                            class="w-20 h-20 rounded-full mx-auto mb-4 object-cover border-2 border-white/20">
                        <h4 class="font-display text-lg font-bold text-white mb-2">Skilled Workers</h4>
                        <p class="text-primary-300 text-sm">Trade & technical</p>
                    </div>
                    <div class="bg-white/5 backdrop-blur-sm rounded-2xl p-6 border border-white/10 text-center">
                        <img
                            src="https://images.unsplash.com/photo-1559839734-2b71ea197ec2?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8N3x8SEVBTFRIQ0FSRSUyMFBSb2Zlc3Npb25hbHxlbnwwfHwwfHx8MA%3D%3D"
                            alt="Healthcare worker"
                            class="w-20 h-20 rounded-full mx-auto mb-4 object-cover border-2 border-white/20">
                        <h4 class="font-display text-lg font-bold text-white mb-2">Healthcare</h4>
                        <p class="text-primary-300 text-sm">Medical professionals</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Wave Divider -->
        <div class="absolute bottom-0 left-0 right-0">
            <svg viewBox="0 0 1200 120" preserveAspectRatio="none" fill="#fafbfc" class="w-full h-16">
                <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V120H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z"></path>
            </svg>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section id="why-us" class="py-20 lg:py-32 bg-slate-50 relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="reveal inline-block text-accent-600 font-semibold tracking-wider text-sm uppercase mb-4">Why Choose Us</span>
                <h2 class="reveal stagger-1 font-display text-3xl sm:text-4xl lg:text-5xl font-bold text-primary-950 mb-6">
                    Your Success is <span class="text-gradient">Our Priority</span>
                </h2>
                <p class="reveal stagger-2 text-slate-600 text-lg">
                    With decades of experience and a commitment to excellence, we deliver reliable manpower solutions.
                </p>
            </div>

            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div class="space-y-6">
                    <!-- Features with small images -->
                    <div class="reveal-left flex items-start space-x-4 p-6 bg-white rounded-xl shadow-sm border border-slate-100 card-hover">
                        <div class="flex-shrink-0">
                            <img
                                src="https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80"
                                alt="Business leader"
                                class="w-14 h-14 rounded-lg object-cover">
                        </div>
                        <div>
                            <h4 class="font-display text-lg font-bold text-primary-950 mb-2">Government Licensed</h4>
                            <p class="text-slate-600">Fully accredited by the Department of Migrant Workers (DMW) ensuring legal and ethical recruitment practices.</p>
                        </div>
                    </div>

                    <div class="reveal-left stagger-1 flex items-start space-x-4 p-6 bg-white rounded-xl shadow-sm border border-slate-100 card-hover">
                        <div class="flex-shrink-0">
                            <img
                                src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80"
                                alt="Experienced professional"
                                class="w-14 h-14 rounded-lg object-cover">
                        </div>
                        <div>
                            <h4 class="font-display text-lg font-bold text-primary-950 mb-2">47+ Years Experience</h4>
                            <p class="text-slate-600">Since 1976, we have built extensive expertise in international recruitment and deployment services.</p>
                        </div>
                    </div>

                    <div class="reveal-left stagger-2 flex items-start space-x-4 p-6 bg-white rounded-xl shadow-sm border border-slate-100 card-hover">
                        <div class="flex-shrink-0">
                            <img
                                src="https://images.unsplash.com/photo-1573497019940-1c28c88b4f3e?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80"
                                alt="Team collaboration"
                                class="w-14 h-14 rounded-lg object-cover">
                        </div>
                        <div>
                            <h4 class="font-display text-lg font-bold text-primary-950 mb-2">1000+ Workers Deployed</h4>
                            <p class="text-slate-600">Successfully placed thousands of Filipino workers in reputable companies across multiple countries.</p>
                        </div>
                    </div>

                    <div class="reveal-left stagger-3 flex items-start space-x-4 p-6 bg-white rounded-xl shadow-sm border border-slate-100 card-hover">
                        <div class="flex-shrink-0">
                            <img
                                src="https://images.openai.com/static-rsc-3/pDES0mz3ay4n_Sib43Xh-SVrpexJi_yKxPyc7AtvHni1FUcxlW8AL15YGRLebRx9BUIHybMTchPI00OYYZTFhdseEoVBWNeTN8i2Ma5cchg?purpose=fullsize&v=1"
                                alt="Quality assurance"
                                class="w-14 h-14 rounded-lg object-cover">
                        </div>
                        <div>
                            <h4 class="font-display text-lg font-bold text-primary-950 mb-2">Quality Assurance</h4>
                            <p class="text-slate-600">Rigorous screening and selection process to ensure only qualified candidates are deployed.</p>
                        </div>
                    </div>
                </div>

                <!-- Image -->
                <div class="reveal-right">
                    <div class="relative rounded-2xl overflow-hidden">
                        <img
                            src="https://images.unsplash.com/photo-1557804506-669a67965ba0?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                            alt="Team collaboration meeting"
                            class="w-full h-[500px] object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-primary-950/80 via-primary-950/20 to-transparent"></div>
                        <div class="absolute bottom-0 left-0 right-0 p-8">
                            <h3 class="font-display text-2xl font-bold text-white mb-4">Our Commitment</h3>
                            <div class="space-y-3">
                                <div class="flex items-center space-x-3">
                                    <div class="w-8 h-8 bg-teal-500/20 rounded-full flex items-center justify-center">
                                        <svg class="w-4 h-4 text-accent-400" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                    <span class="text-white">Ethical recruitment practices</span>
                                </div>
                                <div class="flex items-center space-x-3">
                                    <div class="w-8 h-8 bg-teal-500/20 rounded-full flex items-center justify-center">
                                        <svg class="w-4 h-4 text-accent-400" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                    <span class="text-white">Transparent processes</span>
                                </div>
                                <div class="flex items-center space-x-3">
                                    <div class="w-8 h-8 bg-teal-500/20 rounded-full flex items-center justify-center">
                                        <svg class="w-4 h-4 text-accent-400" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                    <span class="text-white">Worker welfare protection</span>
                                </div>
                                <div class="flex items-center space-x-3">
                                    <div class="w-8 h-8 bg-teal-500/20 rounded-full flex items-center justify-center">
                                        <svg class="w-4 h-4 text-accent-400" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                    <span class="text-white">Reliable partner support</span>
                                </div>
                            </div>
                            <div class="mt-6 pt-6 border-t border-white/10">
                                <p class="text-primary-200 text-sm italic">"Building trust through transparency and delivering excellence in every placement."</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section with Real Photos -->
    <section id="testimonials" class="py-20 lg:py-32 bg-white relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="reveal inline-block text-accent-600 font-semibold tracking-wider text-sm uppercase mb-4">Testimonials</span>
                <h2 class="reveal stagger-1 font-display text-3xl sm:text-4xl lg:text-5xl font-bold text-primary-950 mb-6">
                    What Our <span class="text-gradient">Clients Say</span>
                </h2>
                <p class="reveal stagger-2 text-slate-600 text-lg">
                    Hear from employers and workers who have trusted us with their recruitment needs.
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Testimonial 1 -->
                <div class="reveal card-hover bg-slate-50 rounded-2xl p-8 border border-slate-100">
                    <div class="flex items-center space-x-1 mb-4">
                        <svg class="w-5 h-5 text-amber-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        <svg class="w-5 h-5 text-amber-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        <svg class="w-5 h-5 text-amber-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        <svg class="w-5 h-5 text-amber-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        <svg class="w-5 h-5 text-amber-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                    </div>
                    <p class="text-slate-600 mb-6 italic">"Joseline provided excellent candidates for our construction projects in Saudi Arabia. Their screening process is thorough, and we've had zero issues with the workers they deployed."</p>
                    <div class="flex items-center space-x-3">
                        <img
                            src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80"
                            alt="Mohammed Al-Rashid"
                            class="testimonial-avatar">
                        <div>
                            <h4 class="font-semibold text-primary-950">Mohammed Al-Rashid</h4>
                            <p class="text-sm text-slate-500">HR Manager, Construction Co.</p>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 2 -->
                <div class="reveal stagger-1 card-hover bg-slate-50 rounded-2xl p-8 border border-slate-100">
                    <div class="flex items-center space-x-1 mb-4">
                        <svg class="w-5 h-5 text-amber-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        <svg class="w-5 h-5 text-amber-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        <svg class="w-5 h-5 text-amber-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        <svg class="w-5 h-5 text-amber-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        <svg class="w-5 h-5 text-amber-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                    </div>
                    <p class="text-slate-600 mb-6 italic">"Thanks to Joseline, I am now working as a nurse in Saudi Arabia. The process was smooth, and the staff guided me every step of the way. Highly recommended agency!"</p>
                    <div class="flex items-center space-x-3">
                        <img
                            src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80"
                            alt="Rosa Dela Cruz"
                            class="testimonial-avatar">
                        <div>
                            <h4 class="font-semibold text-primary-950">Rosa Dela Cruz</h4>
                            <p class="text-sm text-slate-500">Nursing Specialist, Riyadh</p>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 3 -->
                <div class="reveal stagger-2 card-hover bg-slate-50 rounded-2xl p-8 border border-slate-100">
                    <div class="flex items-center space-x-1 mb-4">
                        <svg class="w-5 h-5 text-amber-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        <svg class="w-5 h-5 text-amber-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        <svg class="w-5 h-5 text-amber-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        <svg class="w-5 h-5 text-amber-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        <svg class="w-5 h-5 text-amber-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                    </div>
                    <p class="text-slate-600 mb-6 italic">"Professional service from start to finish. They handled all the documentation efficiently, making our deployment to Greece seamless. A trusted partner indeed."</p>
                    <div class="flex items-center space-x-3">
                        <img
                            src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80"
                            alt="Spiros Makris"
                            class="testimonial-avatar">
                        <div>
                            <h4 class="font-semibold text-primary-950">Spiros Makris</h4>
                            <p class="text-sm text-slate-500">Operations Director, Athens</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 lg:py-32 bg-slate-50 relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="reveal inline-block text-primary-600 font-semibold tracking-wider text-sm uppercase mb-4">Contact Us</span>
                <h2 class="reveal stagger-1 font-display text-3xl sm:text-4xl lg:text-5xl font-bold text-slate-900 mb-6">
                    Get in <span class="text-gradient">Touch</span>
                </h2>
                <p class="reveal stagger-2 text-slate-600 text-lg">
                    Have questions or want to apply? Reach out to us and our team will assist you.
                </p>
            </div>

            <div class="grid lg:grid-cols-2 gap-12 lg:gap-16">
                <!-- Left Column: Form -->
                <div class="reveal-left space-y-8">
                    <!-- Left Placeholder Card -->
                    <div class="relative rounded-2xl overflow-hidden h-48">
                        <img
                            src="https://images.unsplash.com/photo-1521791136064-7986c2920216?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                            alt="Professional recruitment consultation"
                            class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-r from-slate-900/80 to-slate-800/60"></div>
                        <div class="absolute inset-0 p-6 flex items-center">
                            <div>
                                <h3 class="font-display text-2xl font-bold text-white mb-2">Start Your Career Abroad</h3>
                                <p class="text-slate-100">
                                    Submit your inquiry and our recruitment team will guide you through the process.
                                </p>
                            </div>
                        </div>
                    </div>

                    <form id="inquiry-form" class="bg-white rounded-2xl p-8 shadow-sm border border-slate-200">
                        <div class="grid sm:grid-cols-2 gap-6 mb-6">
                            <div>
                                <label for="firstName" class="block text-sm font-medium text-slate-700 mb-2">First Name</label>
                                <input type="text" id="firstName" name="firstName" class="w-full px-4 py-2.5 border border-slate-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-primary-500 outline-none transition text-slate-700" placeholder="Juan" required>
                            </div>
                            <div>
                                <label for="lastName" class="block text-sm font-medium text-slate-700 mb-2">Last Name</label>
                                <input type="text" id="lastName" name="lastName" class="w-full px-4 py-2.5 border border-slate-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-primary-500 outline-none transition text-slate-700" placeholder="Dela Cruz" required>
                            </div>
                        </div>

                        <div class="grid sm:grid-cols-2 gap-6 mb-6">
                            <div>
                                <label for="email" class="block text-sm font-medium text-slate-700 mb-2">Email Address</label>
                                <input type="email" id="email" name="email" class="w-full px-4 py-2.5 border border-slate-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-primary-500 outline-none transition text-slate-700" placeholder="juan@example.com" required>
                            </div>
                            <div>
                                <label for="phone" class="block text-sm font-medium text-slate-700 mb-2">Phone Number</label>
                                <input type="tel" id="phone" name="phone" class="w-full px-4 py-2.5 border border-slate-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-primary-500 outline-none transition text-slate-700" placeholder="+63 912 345 6789">
                            </div>
                        </div>

                        <div class="mb-6">
                            <label for="position" class="block text-sm font-medium text-slate-700 mb-2">Position Interested In</label>
                            <select id="position" name="position" class="w-full px-4 py-2.5 border border-slate-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-primary-500 outline-none transition text-slate-700 bg-white">
                                <option value="">Select a position...</option>
                                <option value="Nursing Specialist">Female Nursing Specialist</option>
                                <option value="Tile Worker">Tile Worker / Tile Setter</option>
                                <option value="Electrician">Building Electrician</option>
                                <option value="IT Support">IT Support Technician</option>
                                <option value="Draftsman">Architectural Draftsman</option>
                                <option value="Purchase Rep">Purchase Representative</option>
                                <option value="Other">Other / General Inquiry</option>
                            </select>
                        </div>

                        <div class="mb-6">
                            <label for="message" class="block text-sm font-medium text-slate-700 mb-2">Your Message</label>
                            <textarea id="message" name="message" rows="4" class="w-full px-4 py-2.5 border border-slate-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-primary-500 outline-none transition text-slate-700" placeholder="Tell us about your experience and inquiries..." required></textarea>
                        </div>

                         <button type="submit" class="w-full bg-primary-600 hover:bg-primary-700 text-white font-semibold py-3 px-6 rounded-lg transition duration-300 shadow-md hover:shadow-lg flex items-center justify-center space-x-2">
                            <span>Send Inquiry</span>
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                            </svg>
                        </button>

                        <p id="form-status" class="text-center mt-4 text-sm hidden"></p>
                    </form>
                </div>

                <!-- Right Column: Info & Map -->
                <div class="reveal-right space-y-8">
                    <!-- Agency Image -->
                    <div class="relative rounded-2xl overflow-hidden h-48">
                        <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Modern office space" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-r from-slate-900/80 to-slate-800/60"></div>
                        <div class="absolute inset-0 p-6 flex items-center">
                            <div>
                                <h3 class="font-display text-2xl font-bold text-white mb-2">Visit Our Office</h3>
                                <p class="text-slate-100">4334 Gen. Tinio, Brgy. Bangkal, Makati City, Philippines</p>
                            </div>
                        </div>
                    </div>

                    <!-- Contact Info -->
                    <div class="bg-white rounded-2xl p-6 shadow-sm border border-slate-200">
                        <div class="space-y-4">
                            <div class="flex items-center space-x-4">
                                <div class="w-12 h-12 bg-primary-50 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <svg class="w-6 h-6 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-sm text-slate-500">Email</p>
                                    <a href="mailto:inquire@joselinemanpowercorp.com" class="text-primary-600 font-medium hover:underline break-all">inquire@joselinemanpowercorp.com</a>
                                </div>
                            </div>
                            <div class="flex items-center space-x-4">
                                <div class="w-12 h-12 bg-primary-50 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <svg class="w-6 h-6 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-sm text-slate-500">Address</p>
                                    <p class="text-slate-900 font-medium">Makati City, Philippines</p>
                                </div>
                            </div>
                            <div class="flex items-center space-x-4">
                                <div class="w-12 h-12 bg-accent-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <svg class="w-6 h-6 text-primary-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-sm text-slate-500">Office Hours</p>
                                    <p class="text-slate-900 font-medium">Mon-Fri: 8AM-5PM, Sat: 9AM-12PM</p>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- Map Container -->
                    <div class="map-container rounded-2xl overflow-hidden border border-slate-200 shadow-sm h-64 sm:h-72 lg:h-80 w-full">
                        <iframe
                            src="https://www.google.com/maps?q=4334+Gen.+Tinio,+Brgy.+Bangkal,+Makati+City,+Philippines&output=embed"
                            class="w-full h-full"
                            style="border:0;"
                            allowfullscreen=""
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-primary-950 pt-16 pb-8 relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-12 mb-12">
                <div>
                    <div class="flex items-center space-x-3 mb-6">
                        <div class="flex items-center justify-center transform group-hover:scale-105 transition-transform">
                            <img src="images/JOJO.png" alt="Joseline International Manpower Corporation Logo" class="h-14 w-auto object-contain">
                        </div>
                        <div>
                            <h4 class="text-white font-display font-bold text-lg">JOSELINE</h4>
                            <p class="text-primary-300 text-xs tracking-wider">INTERNATIONAL MANPOWER</p>
                        </div>
                    </div>
                    <p class="text-primary-200 text-sm mb-4">Your trusted partner in overseas recruitment since 1976.</p>
                    <div class="bg-white/5 rounded-lg p-3 inline-flex items-center space-x-2">
                        <svg class="w-5 h-5 text-accent-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                        <span class="text-white text-sm font-medium">DMW Licensed</span>
                    </div>
                </div>

                <div>
                    <h4 class="text-white font-semibold mb-6">Quick Links</h4>
                    <ul class="space-y-3">
                        <li><a href="#home" class="text-primary-200 hover:text-white transition-colors text-sm">Home</a></li>
                        <li><a href="#about" class="text-primary-200 hover:text-white transition-colors text-sm">About Us</a></li>
                        <li><a href="#jobs" class="text-primary-200 hover:text-white transition-colors text-sm">Job Opportunities</a></li>
                        <li><a href="#deployment" class="text-primary-200 hover:text-white transition-colors text-sm">Deployment</a></li>
                        <li><a href="#contact" class="text-primary-200 hover:text-white transition-colors text-sm">Contact</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-white font-semibold mb-6">Deployment Countries</h4>
                    <ul class="space-y-3">
                        <li class="flex items-center text-primary-200 text-sm">
                            <span class="w-6 h-6 bg-white/10 rounded flex items-center justify-center mr-3 text-xs">🇸🇦</span>
                            Saudi Arabia
                        </li>
                        <li class="flex items-center text-primary-200 text-sm">
                            <span class="w-6 h-6 bg-white/10 rounded flex items-center justify-center mr-3 text-xs">🇬🇷</span>
                            Greece
                        </li>
                        <li class="flex items-center text-primary-200 text-sm">
                            <span class="w-6 h-6 bg-white/10 rounded flex items-center justify-center mr-3 text-xs">🇹🇱</span>
                            Timor-Leste
                        </li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-white font-semibold mb-6">Contact Information</h4>
                    <ul class="space-y-4">
                        <li>
                            <p class="text-primary-200 text-sm">4334 Gen. Tinio, Brgy. Bangkal, Makati City, Philippines</p>
                        </li>
                        <li>
                            <a href="mailto:inquire@joselinemanpowercorp.com" class="text-accent-400 hover:text-accent-300 transition-colors text-sm">inquire@joselinemanpowercorp.com</a>
                        </li>
                        <li>
                            <p class="text-primary-200 text-sm">License: DMW-009-LB-03072023-R</p>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="border-t border-white/10 pt-8">
                <div class="flex flex-col md:flex-row justify-between items-center space-y-4 md:space-y-0">
                    <div class="flex items-center space-x-4">
                        <a href="#" class="social-icon" aria-label="Facebook">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                            </svg>
                        </a>
                        <a href="#" class="social-icon" aria-label="LinkedIn">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- JavaScript -->
    <script>
        // Preloader
        window.addEventListener('load', function() {
            const preloader = document.getElementById('preloader');
            preloader.style.opacity = '0';
            setTimeout(() => {
                preloader.style.display = 'none';
            }, 500);
        });

        // Mobile Menu Toggle
        const mobileMenuBtn = document.getElementById('mobile-menu-btn');
        const mobileMenuClose = document.getElementById('mobile-menu-close');
        const mobileMenu = document.getElementById('mobile-menu');
        const mobileMenuOverlay = document.getElementById('mobile-menu-overlay');

        function openMobileMenu() {
            mobileMenu.classList.add('active');
            mobileMenuOverlay.classList.add('active');
            document.body.style.overflow = 'hidden';
        }

        function closeMobileMenu() {
            mobileMenu.classList.remove('active');
            mobileMenuOverlay.classList.remove('active');
            document.body.style.overflow = '';
        }

        mobileMenuBtn.addEventListener('click', openMobileMenu);
        mobileMenuClose.addEventListener('click', closeMobileMenu);
        mobileMenuOverlay.addEventListener('click', closeMobileMenu);

        // Close mobile menu on link click
        mobileMenu.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', closeMobileMenu);
        });

        // Navbar Scroll Effect
        const navbar = document.getElementById('navbar');
        const navBg = document.getElementById('nav-bg');

        window.addEventListener('scroll', function() {
            if (window.scrollY > 50) {
                navBg.style.opacity = '1';
                navbar.classList.add('shadow-lg');
            } else {
                navBg.style.opacity = '0';
                navbar.classList.remove('shadow-lg');
            }
        });

        // Scroll Reveal Animation
        const revealElements = document.querySelectorAll('.reveal, .reveal-left, .reveal-right, .reveal-scale');

        const revealObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('active');
                }
            });
        }, {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        });

        revealElements.forEach(el => revealObserver.observe(el));

        // Counter Animation
        const counters = document.querySelectorAll('.counter');
        const counterSpeed = 200; // Lower is faster

        const counterObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const counter = entry.target;
                    const target = parseInt(counter.getAttribute('data-target'));
                    const updateCount = () => {
                        const count = parseInt(counter.innerText);
                        const increment = target / counterSpeed;
                        if (count < target) {
                            counter.innerText = Math.ceil(count + increment);
                            setTimeout(updateCount, 1);
                        } else {
                            counter.innerText = target;
                        }
                    };
                    updateCount();
                    counterObserver.unobserve(counter);
                }
            });
        }, {
            threshold: 0.5
        });

        counters.forEach(counter => counterObserver.observe(counter));

        // Job Filter
        const filterBtns = document.querySelectorAll('.job-filter-btn');
        const jobCards = document.querySelectorAll('.job-card');

        filterBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                // Update active button style
                filterBtns.forEach(b => {
                    b.classList.remove('active', 'bg-primary-600', 'text-white');
                    b.classList.add('bg-slate-100', 'text-slate-600');
                });
                btn.classList.add('active', 'bg-primary-600', 'text-white');
                btn.classList.remove('bg-slate-100', 'text-slate-600');

                // Filter cards
                const filter = btn.getAttribute('data-filter');
                jobCards.forEach(card => {
                    const category = card.getAttribute('data-category');
                    if (filter === 'all' || category === filter) {
                        card.style.display = 'block';
                        setTimeout(() => card.style.opacity = '1', 10);
                    } else {
                        card.style.opacity = '0';
                        setTimeout(() => card.style.display = 'none', 300);
                    }
                });
            });
        });

        // Initialize filter button styles
        filterBtns.forEach(btn => {
            if (btn.classList.contains('active')) {
                btn.classList.add('bg-primary-600', 'text-white');
            } else {
                btn.classList.add('bg-slate-100', 'text-slate-600');
            }
        });

        // Form Submission Handler
        const inquiryForm = document.getElementById('inquiry-form');
        const formStatus = document.getElementById('form-status');

        inquiryForm.addEventListener('submit', function(e) {
            e.preventDefault();

            // Simulate form submission
            const submitBtn = inquiryForm.querySelector('button[type="submit"]');
            const originalText = submitBtn.innerHTML;
            submitBtn.innerHTML = '<svg class="animate-spin h-5 w-5 mx-auto" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg>';
            submitBtn.disabled = true;

            setTimeout(() => {
                // Show success message
                formStatus.classList.remove('hidden', 'text-red-500');
                formStatus.classList.add('text-green-600');
                formStatus.textContent = 'Thank you! Your inquiry has been submitted successfully. We will contact you soon.';

                // Reset form
                inquiryForm.reset();

                // Reset button
                submitBtn.innerHTML = originalText;
                submitBtn.disabled = false;

                // Hide status after 5 seconds
                setTimeout(() => {
                    formStatus.classList.add('hidden');
                }, 5000);
            }, 1500);
        });

        // Job Apply Button Handler
        const applyBtns = document.querySelectorAll('.job-apply-btn');
        applyBtns.forEach(btn => {
            btn.addEventListener('click', function() {
                const card = this.closest('.job-card');
                const jobTitle = card.querySelector('h3').textContent;

                // Scroll to contact form
                document.getElementById('contact').scrollIntoView({
                    behavior: 'smooth'
                });

                // Pre-fill the position dropdown
                setTimeout(() => {
                    const positionSelect = document.getElementById('position');
                    for (let i = 0; i < positionSelect.options.length; i++) {
                        if (positionSelect.options[i].text.includes(jobTitle.split(' ')[0])) {
                            positionSelect.value = positionSelect.options[i].value;
                            break;
                        }
                    }
                }, 800);
            });
        });

        // Smooth scroll for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
    </script>
</body>

</html>