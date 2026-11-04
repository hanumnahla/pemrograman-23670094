<!DOCTYPE html>
<html lang="zxx">

<head>
 @extends('landing.layouts.head')
</head>

<!-- LOADER -->
 @extends('landing.layouts.loader')
<!-- OUTER BG WRAPPER -->
<div class="bg-outer-wrapper position-relative float-left w-100 background-f7f9ff">
  <!-- HEADER SECTION -->
   @extends('landing.layouts.header')
  </header>
  <!-- SEARCH BAR -->
     @extends('landing.layouts.search')
  <!-- BANNER SECTION -->
    @yield('content')
 
<!-- FOOTER SECTION -->
        @extends('landing.layouts.footer')    
          
<!-- BACK TO TOP BUTTON -->
<button id="back-to-top-btn" title="Back to Top"></button>
        @extends('landing.layouts.script')    
</body>

</html>