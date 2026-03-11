<!DOCTYPE html>
<html lang="en">

<head>
    @include('partials.head')
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body class="antialiased">
    <!-- Preloader -->
    @include('partials.preloader')

    <!-- Navigation -->
    @include('partials.navbar')
    <!-- Mobile Menu -->
    @include('partials.mobile-menu')
    <!-- Hero Section -->
    @include('partials.home')
    <!-- Stats Section -->
    @include('partials.stats')

    <!-- About Section with Image -->
    @include('partials.about')

    <!-- Services Section with Images -->
    @include('partials.services')

    <!-- Job Opportunities Section -->
    @include('partials.jobs')

    <!-- Deployment Section with Country Images -->
    @include('partials.deployment')
    <!-- Why Choose Us Section -->
    @include('partials.whyus')

    <!-- Testimonials Section with Real Photos -->
    @include('partials.testimonials')

    <!-- Contact Section -->
    @include('partials.contact')
    <!-- Footer -->
    @include('partials.footer')

    <!-- JavaScript -->
        <script src="{{ asset('js/app.js') }}"></script>
    
</body>

</html>