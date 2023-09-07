<!doctype html>
<html lang="en">

<!-- Mirrored from preview.colorlib.com/theme/product/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 20 Aug 2023 11:56:34 GMT -->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content />
<meta name="keywords" content />


<link rel="stylesheet" href="{{ asset('css/fontfamily.css') }}">
<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/owl.carousel.min.cs') }}s">
<link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.cs') }}s">
<link rel="stylesheet" href="{{ asset('css/jquery.fancybox.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/fontstyle.css') }}">
<link rel="stylesheet" href="{{ asset('css/fontstylecustom.css') }}">
<link rel="stylesheet" href="{{ asset('css/flaticon.css') }}">
<link rel="stylesheet" href="{{ asset('css/aos.css') }}">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<link rel="stylesheet" href="{{ asset('css/customstyle.css') }}">
<title>Evaly Ecommerce</title>
<script nonce="677ef611-bbbb-4eba-b655-803049e91e5f">(function(w,d){!function(j,k,l,m){j[l]=j[l]||{};j[l].executed=[];j.zaraz={deferred:[],listeners:[]};j.zaraz.q=[];j.zaraz._f=function(n){return async function(){var o=Array.prototype.slice.call(arguments);j.zaraz.q.push({m:n,a:o})}};for(const p of["track","set","debug"])j.zaraz[p]=j.zaraz._f(p);j.zaraz.init=()=>{var q=k.getElementsByTagName(m)[0],r=k.createElement(m),s=k.getElementsByTagName("title")[0];s&&(j[l].t=k.getElementsByTagName("title")[0].text);j[l].x=Math.random();j[l].w=j.screen.width;j[l].h=j.screen.height;j[l].j=j.innerHeight;j[l].e=j.innerWidth;j[l].l=j.location.href;j[l].r=k.referrer;j[l].k=j.screen.colorDepth;j[l].n=k.characterSet;j[l].o=(new Date).getTimezoneOffset();if(j.dataLayer)for(const w of Object.entries(Object.entries(dataLayer).reduce(((x,y)=>({...x[1],...y[1]})),{})))zaraz.set(w[0],w[1],{scope:"page"});j[l].q=[];for(;j.zaraz.q.length;){const z=j.zaraz.q.shift();j[l].q.push(z)}r.defer=!0;for(const A of[localStorage,sessionStorage])Object.keys(A||{}).filter((C=>C.startsWith("_zaraz_"))).forEach((B=>{try{j[l]["z_"+B.slice(7)]=JSON.parse(A.getItem(B))}catch{j[l]["z_"+B.slice(7)]=A.getItem(B)}}));r.referrerPolicy="origin";r.src="../../cdn-cgi/zaraz/sd0d9.js?z="+btoa(encodeURIComponent(JSON.stringify(j[l])));q.parentNode.insertBefore(r,q)};["complete","interactive"].includes(k.readyState)?zaraz.init():j.addEventListener("DOMContentLoaded",zaraz.init)}(w,d,"zarazData","script");})(window,document);</script></head>
<body>

<div class="site-mobile-menu">
<div class="site-mobile-menu-header">
<div class="site-mobile-menu-close">
<span class="icofont-close js-menu-toggle"></span>
</div>
</div>
<div class="site-mobile-menu-body"></div>
</div>
 
<!-- Navbar Start Section -->

 @include('frondend.nav')


 <!-- Navbar End Section -->




 <!-- Welcome Page -->

 @yield('contain')

 <!-- End Welcome Page --.




<!-- Footer Start -->

 @include('frondend.footer')

<!-- Footer End  -->
<script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/jquery.animateNumber.min.js') }}"></script>
<script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('js/jquery.fancybox.min.js') }}"></script>
<script src="{{ asset('js/jquery.sticky.js') }}"></script>
<script src="{{ asset('js/aos.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>


<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');
    </script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v8b253dfea2ab4077af8c6f58422dfbfd1689876627854" integrity="sha512-bjgnUKX4azu3dLTVtie9u6TKqgx29RBwfj3QXYt5EKfWM/9hPSAI/4qcV5NACjwAo8UtTeWefx6Zq5PHcMm7Tg==" data-cf-beacon='{"rayId":"7f9a742c08a36ee0","version":"2023.8.0","b":1,"token":"cd0b4b3a733644fc843ef0b185f98241","si":100}' crossorigin="anonymous"></script>
</body>


</html>