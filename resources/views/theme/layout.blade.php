@include('theme.partials.head')

<!-- Start Header/Navigation -->
@include('theme.partials.nav')
<!-- End Header/Navigation -->

<!-- Start Hero Section -->
@include('theme.partials.hero')
<!-- End Hero Section -->

<!-- Start Different Content -->
@yield('content')
<!-- End Different Content -->

<!-- Start Footer Section -->
@include('theme.partials.footer')
<!-- End Footer Section -->

@include('theme.partials.scripts')
