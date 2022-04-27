<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>
    @isset($title)
    {{ $title }} -
    @endisset
    {{ config('app.name', 'Event Manager') }}
  </title>

  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins&display=swap">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Raleway&display=swap">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Raleway&family=Source+Sans+Pro&display=swap">

  <!-- Styles -->
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/pikaday/css/pikaday.css">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  @livewireStyles

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>
  <script src="{{ asset('js/notifications.js') }}"></script>
  <script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.min.js"></script>
  <script src="https://unpkg.com/tippy.js@6/dist/tippy-bundle.umd.js"></script>
</head>

<body
  class="font-sans bg-main-color h-screen antialiased leading-none scrollbar scrollbar-thumb-box1-color scrollbar-track-orange-600">

  <div>
    @include('layouts.app-navigation')
  </div>

  <!-- Page Content -->
  <main>
    {{ $slot }}
  </main>
  @livewire('livewire-ui-modal')
  @livewireScripts
  <script src="https://cdn.jsdelivr.net/npm/pikaday/pikaday.js"></script>
  @stack('modals')

</body>

</html>