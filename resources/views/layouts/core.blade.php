<!DOCTYPE html>
<html lang="en">
<head>

    @include("layouts.global_head")

    @yield("custom_css")

    <title>@yield("title") | README</title>
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
</head>
<body id="kt_body" class="aside-enabled">

    <!-- Main -->
    @guest
        @include('layouts.content_auth')
    @endguest
    @auth
        @include('layouts.content_main')
    @endauth
    <!-- End Main -->

    <!-- Global Javascript Bundle(used by all pages) -->
    @include("layouts.global_script")
    
    <!-- Page Vendors Javascript(used by this page)-->
    @yield("vendor_js")

    <!-- Page Custom Javascript(used by this page) -->
    @yield("custom_js")

</body>
</html>