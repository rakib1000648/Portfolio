<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name') }} | @yield('page_title')</title>

        @yield('link')
        @livewireStyles

    </head>
    <body>
        @yield('content')

        @livewireScripts
        <script>
            $(document).ready(function(){
            window.livewire.on('alert_remove',()=>{
              setTimeout(function(){ $(".alert-success").fadeOut('fast');
              }, 2000); // 2 secs
              });
          });

          window.livewire.on('skillUpdateClose',()=>{
                $('#editSkillsModal').modal('hide');
            });

        </script>
        @yield('script')
    </body>
</html>
