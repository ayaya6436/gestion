<!DOCTYPE html>

<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Gestion</title>
   <!--CSS link-->
   <link rel="stylesheet" href="{{ mix('css/app.css')}}">
   @livewireStyles

   <script>
      (function(w,d){!function(a,e,t,r,z){a.zarazData=a.zarazData||{},a.zarazData.executed=[],a.zarazData.tracks=[],a.zaraz={deferred:[]};var s=e.getElementsByTagName("title")[0];s&&(a.zarazData.t=e.getElementsByTagName("title")[0].text),a.zarazData.w=a.screen.width,a.zarazData.h=a.screen.height,a.zarazData.j=a.innerHeight,a.zarazData.e=a.innerWidth,a.zarazData.l=a.location.href,a.zarazData.r=e.referrer,a.zarazData.k=a.screen.colorDepth,a.zarazData.n=e.characterSet,a.zarazData.o=(new Date).getTimezoneOffset(),a.dataLayer=a.dataLayer||[],a.zaraz.track=(e,t)=>{for(key in a.zarazData.tracks.push(e),t)a.zarazData["z_"+key]=t[key]},a.zaraz._preSet=[],a.zaraz.set=(e,t,r)=>{a.zarazData["z_"+e]=t,a.zaraz._preSet.push([e,t,r])},a.dataLayer.push({"zaraz.start":(new Date).getTime()}),a.addEventListener("DOMContentLoaded",(()=>{var t=e.getElementsByTagName(r)[0],z=e.createElement(r);z.defer=!0,z.src="/cdn-cgi/zaraz/s.js?z="+btoa(encodeURIComponent(JSON.stringify(a.zarazData))),t.parentNode.insertBefore(z,t)}))}(w,d,0,"script");})(window,document);
   </script>
</head>

<body class="hold-transition sidebar-mini">
   <div class="wrapper">
      {{-- topnavbar --}}
     <x-topnav />

      <aside class="main-sidebar sidebar-dark-primary elevation-4">

         <a href="index3.html" class="brand-link">
            <span class="brand-text font-weight-light" style="font-size:1.3em"><strong> GESTION </strong></span>
         </a>
         <div class="sidebar">

            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
               <div class="image">
                  <img src="{{ asset('images/user.jpg') }}" class="img-circle elevation-2" alt="User Image">
               </div>
               <div class="info">
                  <a href="#" class="d-block">{{ userFullName() }}</a>
               </div>
            </div>
            {{-- sidebar menu --}}
               <x-menu />
         </div>

      </aside>

      <div class="content-wrapper">
         <div class="content">
            @yield('content')
           
         </div>
      </div>

   </div>

{{-- sidebar --}}
   <x-sidebar />
  
   <footer class="main-footer">

      <div class="float-right d-none d-sm-inline">
      </div>
      <strong>Copyright &copy; 2022 <a href="https://adminlte.io">Gestion</a>.</strong> Tous droits reserves.
   </footer>

   </div>
   <script src="{{ mix('js/app.js') }}"></script>
   @livewireScripts
</body>
</html>