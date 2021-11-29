<!DOCTYPE html>
<html lang="en">
    <head>
        <title>@yield('title_page')</title>
        @yield('private_link')
        @include('client.template.include.head')
    </head>
    <body>
        <!-- mobile menu -->
        <div class="mercado-clone-wrap">
            @include('client.template.include.mobile_menu')
        </div>
        <!-- end mobile menu -->

        <!--header-->
        <header id="header" class="header header-style-1">
            @include('client.template.include.header')
        </header>
        <!--end header-->

        <!--main content page-->
        @yield('main_content_page')
        <!--end main content page-->
        <!--footer-->
        <footer id="footer">
            @include('client.template.include.footer')
        </footer>

        <!--end footer-->
        <!--scripts js-->

        @include('client.template.include.scripts_common')
        @yield('private_scripts')

        <!--end scripts js-->
    </body>
</html>
