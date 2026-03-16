<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo e($title ?? 'Admin Login'); ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            min-height: 100vh;
            overflow-x: hidden;
        }

        /* Full Background Image - No Overlay */
        .bg-image-container {
            position: fixed;
            inset: 0;
            z-index: 0;
        }

        .bg-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
        }

        /* Floating Particles */
        .particles {
            position: absolute;
            inset: 0;
            overflow: hidden;
            pointer-events: none;
        }

        .particle {
            position: absolute;
            width: 4px;
            height: 4px;
            background: rgba(255, 255, 255, 0.8);
            border-radius: 50%;
            animation: floatUp 20s linear infinite;
            box-shadow: 0 0 10px rgba(255, 255, 255, 0.5);
        }

        @keyframes floatUp {
            0% {
                transform: translateY(100vh) translateX(0);
                opacity: 0;
            }
            10% { opacity: 1; }
            90% { opacity: 1; }
            100% {
                transform: translateY(-20vh) translateX(20px);
                opacity: 0;
            }
        }

        /* Ultra Transparent Glass Card */
        .glass-card {
            background: rgba(255, 255, 255, 0.12);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            border: 1px solid rgba(255, 255, 255, 0.25);
            box-shadow: 
                0 8px 32px rgba(0, 0, 0, 0.05),
                inset 0 1px 1px rgba(255, 255, 255, 0.4);
            animation: cardFadeIn 0.6s ease-out forwards;
        }

        @keyframes cardFadeIn {
            from {
                opacity: 0;
                transform: translateY(20px) scale(0.96);
            }
            to {
                opacity: 1;
                transform: translateY(0) scale(1);
            }
        }

        /* Inputs - Transparent Glass */
        .glass-input {
            background: rgba(255, 255, 255, 0.35);
            border: 1px solid rgba(255, 255, 255, 0.5);
            transition: all 0.3s ease;
        }

        .glass-input:hover {
            background: rgba(255, 255, 255, 0.5);
        }

        .glass-input:focus {
            background: rgba(255, 255, 255, 0.65);
            border-color: rgba(255, 255, 255, 0.8);
            box-shadow: 0 0 20px rgba(124, 58, 237, 0.15);
        }

        /* Button Glow */
        .btn-glow {
            background: linear-gradient(135deg, #7c3aed 0%, #5b21b6 100%);
            box-shadow: 0 4px 20px rgba(124, 58, 237, 0.4);
            transition: all 0.3s ease;
        }

        .btn-glow:hover {
            box-shadow: 0 6px 30px rgba(124, 58, 237, 0.6);
            transform: translateY(-1px);
        }

        /* Custom Scrollbar */
        ::-webkit-scrollbar { width: 6px; }
        ::-webkit-scrollbar-track { background: transparent; }
        ::-webkit-scrollbar-thumb { background: rgba(124, 58, 237, 0.3); border-radius: 3px; }

        /* Reduced Motion */
        @media (prefers-reduced-motion: reduce) {
            *, *::before, *::after {
                animation-duration: 0.01ms !important;
                transition-duration: 0.01ms !important;
            }
        }
    </style>
</head>

<body>
    <!-- Background Image - Fully Visible -->
    <div class="bg-image-container">
        <img 
            src="<?php echo e(asset('images/AYAW.png')); ?>" 
            alt="Office Background" 
            class="bg-image"
            loading="eager">
        <div class="particles" id="particles"></div>
    </div>

    <!-- Main Content -->
    <main class="relative z-10 min-h-screen flex items-center justify-center p-4">
        <div class="w-full max-w-sm">
            <?php echo $__env->yieldContent('content'); ?>
        </div>
    </main>

    <script>
        // Minimal Particles
        const container = document.getElementById('particles');
        for (let i = 0; i < 15; i++) {
            const p = document.createElement('div');
            p.className = 'particle';
            p.style.left = Math.random() * 100 + '%';
            p.style.animationDelay = Math.random() * 20 + 's';
            p.style.animationDuration = (15 + Math.random() * 10) + 's';
            p.style.opacity = 0.4 + Math.random() * 0.4;
            container.appendChild(p);
        }
    </script>
</body>
</html><?php /**PATH C:\Users\user\agency-site\resources\views/layouts/auth.blade.php ENDPATH**/ ?>