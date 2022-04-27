@php
$navlinks = [
[
"name=" => "home",
"route" => "home",
"text" => "Home",
"image" => '<svg class="fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
  <path d="M21 13v10h-6v-6h-6v6h-6v-10h-3l12-12 12 12h-3zm-1-5.907v-5.093h-3v2.093l3 3z" />
</svg>'
],
[
"name" => "dasboard",
"route" => "app-dashboard",
"text" => "Dashboard",
"image" => '<svg class="fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
  <path
    d="M22 6v16h-20v-16h20zm2-6h-24v24h24v-24zm-16 9h-4v4h4v-4zm6 0h-4v4h4v-4zm6 0h-4v4h4v-4zm-12 6h-4v4h4v-4zm6 0h-4v4h4v-4z" />
</svg>'
],
[
"name=" => "eventos",
"route" => "eventos",
"text" => "Eventos",
"image" => '<svg class="fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
  <path
    d="M17 3v-2c0-.552.447-1 1-1s1 .448 1 1v2c0 .552-.447 1-1 1s-1-.448-1-1zm-12 1c.553 0 1-.448 1-1v-2c0-.552-.447-1-1-1-.553 0-1 .448-1 1v2c0 .552.447 1 1 1zm13 13v-3h-1v4h3v-1h-2zm-5 .5c0 2.481 2.019 4.5 4.5 4.5s4.5-2.019 4.5-4.5-2.019-4.5-4.5-4.5-4.5 2.019-4.5 4.5zm11 0c0 3.59-2.91 6.5-6.5 6.5s-6.5-2.91-6.5-6.5 2.91-6.5 6.5-6.5 6.5 2.91 6.5 6.5zm-14.237 3.5h-7.763v-13h19v1.763c.727.33 1.399.757 2 1.268v-9.031h-3v1c0 1.316-1.278 2.339-2.658 1.894-.831-.268-1.342-1.111-1.342-1.984v-.91h-9v1c0 1.316-1.278 2.339-2.658 1.894-.831-.268-1.342-1.111-1.342-1.984v-.91h-3v21h11.031c-.511-.601-.938-1.273-1.268-2z" />
</svg>'
],
[
"name=" => "presentaciones",
"route" => "presentaciones",
"text" => "Presentaciones",
"image" => '<svg class="fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
  <path
    d="M13 20.002h2v3.998h-2v-3.998zm-6.902 3.998h2.627l3.42-3.998h-2.633l-3.414 3.998zm9.773-3.998l3.42 3.998h2.627l-3.414-3.998h-2.633zm8.129-17.01c0 .876-.399 1.654-1 2.2v12.808h-18.984v-4h-4.016c.854-1.333 1.016-2.932 1.016-5.456v-5.183c0-2.062 1.322-3.292 2.953-3.339-.017-.031 16.996-.02 17.031-.02 1.657 0 3 1.333 3 2.99zm-18.939.021c0-.551-.448-1-1-1-.747 0-1.061.599-1.061 1.348v5.183c0 1.583 0 2.442-.229 3.458h1.244v-7.989c.552 0 1.046-.449 1.046-1zm15.955 2.987h-15.016v10.002h15.016v-10.002zm-.016-4h-14.124c.255.699.238 1.339-.001 2.002h14.125c1.303 0 1.345-2.002 0-2.002zm-10.666 12c1.307-2.344 2.214-3.548 3.454-4.63l-.161-.37c-1.503.935-2.312 1.64-3.535 3.028-.651-.464-1.018-.678-1.597-.958l-.495.458c.991.918 1.528 1.523 2.334 2.472zm8.666-5h-4v1h4v-1zm0 2h-4v1h4v-1zm0 2h-4v1h4v-1z" />
</svg>'
],
[
"name=" => "panelistas",
"route" => "panelistas",
"text" => "Panelistas",
"image" => '<svg class="fill-current" width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd"
  clip-rule="evenodd">
  <path
    d="M7 16.488l1.526-.723c1.792-.81 2.851-.344 4.349.232 1.716.661 2.365.883 3.077 1.164 1.278.506.688 2.177-.592 1.838-.778-.206-2.812-.795-3.38-.931-.64-.154-.93.602-.323.818 1.106.393 2.663.79 3.494 1.007.831.218 1.295-.145 1.881-.611.906-.72 2.968-2.909 2.968-2.909.842-.799 1.991-.135 1.991.72 0 .23-.083.474-.276.707-2.328 2.793-3.06 3.642-4.568 5.226-.623.655-1.342.974-2.204.974-.442 0-.922-.084-1.443-.25-1.825-.581-4.172-1.313-6.5-1.6v-5.662zm-1 6.538h-4v-8h4v8zm1-7.869v-1.714c-.006-1.557.062-2.447 1.854-2.861 1.963-.453 4.315-.859 3.384-2.577-2.761-5.092-.787-7.979 2.177-7.979 2.907 0 4.93 2.78 2.177 7.979-.904 1.708 1.378 2.114 3.384 2.577 1.799.415 1.859 1.311 1.853 2.879 0 .13-.011 1.171 0 1.665-.483-.309-1.442-.552-2.187.106-.535.472-.568.504-1.783 1.629-1.75-.831-4.456-1.883-6.214-2.478-.896-.304-2.04-.308-2.962.075l-1.683.699z" />
</svg>'
]
];
@endphp
<div x-data="{ open: true }" x-cloak>

  <header class="">
    <div class="logos-large hidden lg:flex items-center justify-between flex-wrap p-6 w-full z-10 bg-neutral-color">
      <div class="flex items-center flex-shrink-0 text-accent-color mr-6">
        <a class="" target="_blank" href="https://dsc.itiguala.edu.mx/cat/">
          <img id="logodsc" class="w-36" alt="logo-DSC" src=" {{url('/img/logoDSC.svg')}} " />
        </a>
        <h1 class="ml-4 text-3xl font-raleway font-semibold">
          Event Manager
        </h1>
      </div>
      <div>
        <a class="" target="_blank" href="https://itiguala.edu.mx/">
          <img id="logotec" class="w-10" alt="" src=" {{url('/img/logo_tec.png')}} " />
        </a>
      </div>
    </div>

    <div class="logos-small block lg:hidden p-6 w-full z-10 bg-neutral-color">
      <div class="flex items-center justify-between flex-shrink-0">
        <a class="" target="_blank" href="https://dsc.itiguala.edu.mx/cat/">
          <img id="logodsc-small" class="w-36" alt="" src=" {{url('/img/logoDSC.svg')}} " />
        </a>
        <div>
          <a class="" target="_blank" href="https://itiguala.edu.mx/">
            <img id="logotec-small" class="w-10" alt="" src=" {{url('/img/logo_tec.png')}} " />
          </a>
        </div>
      </div>
      <h1 class="text-center text-3xl font-raleway font-bold tracking-wide text-accent-color my-4">
        Event Manager
      </h1>
    </div>
  </header>
  <nav class=" p-6 w-full bg-accent-color" x-data="{ isOpen: false }" @keydown.escape="isOpen = false"
    @click.away="isOpen = false">
    <!--Toggle button (hidden on large screens)-->
    <div class="flex items-center justify-between w-full">
      <button @click="isOpen = !isOpen" type="button"
        class="block lg:hidden px-2 text-gray-400 hover:text-white focus:outline-none focus:text-white cursor-pointer"
        :class="{ 'transition transform-180': isOpen }">
        <svg class="h-6 w-6 fill-current text-primary-color" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
          <path x-show="isOpen" fill-rule="evenodd" clip-rule="evenodd"
            d="M18.278 16.864a1 1 0 0 1-1.414 1.414l-4.829-4.828-4.828 4.828a1 1 0 0 1-1.414-1.414l4.828-4.829-4.828-4.828a1 1 0 0 1 1.414-1.414l4.829 4.828 4.828-4.828a1 1 0 1 1 1.414 1.414l-4.828 4.829 4.828 4.828z" />
          <path x-show="!isOpen" fill-rule="evenodd"
            d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z" />
        </svg>
      </button>
      <h3 @click="isOpen = !isOpen"
        class="block lg:hidden px-2 text-gray-400 hover:text-white focus:outline-none focus:text-white cursor-pointer">
        MENU
      </h3>
    </div>

    <hr class="lg:hidden my-3 border-gray-500 w-full" :class="{'block': isOpen, 'hidden': !isOpen }" />

    <!-- Menú para móviles  -->
    <div class="lg:hidden w-full bg-accent-color text-main-color"
      :class="{ 'block shadow-3xl': isOpen, 'hidden': !isOpen }" x-show.transition="true">
      <ul class="lg:pt-0 list-reset lg:flex justify-end flex-1 items-center lg:h-auto">
        <li class="hover:bg-main-color hover:text-accent-color py-2">
          <a class="mx-6 flex" href="{{ route('home') }}">
            <svg class="w-5 fill-current mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
              <path d="M21 13v10h-6v-6h-6v6h-6v-10h-3l12-12 12 12h-3zm-1-5.907v-5.093h-3v2.093l3 3z" />
            </svg>
            <p>Home</p>
          </a>
        </li>
        <li class="text-orange-600 hover:bg-main-color hover:text-accent-color py-2">
          <a class="mx-6 flex" href="{{ route('app-dashboard') }}">
            <svg class="w-5 fill-current mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
              <path
                d="M22 6v16h-20v-16h20zm2-6h-24v24h24v-24zm-16 9h-4v4h4v-4zm6 0h-4v4h4v-4zm6 0h-4v4h4v-4zm-12 6h-4v4h4v-4zm6 0h-4v4h4v-4z" />
            </svg>
            <p>Dashboard</p>
          </a>
        </li>
        <li class="hover:bg-main-color hover:text-accent-color py-2">
          <a class="mx-6 flex" href="{{ route('eventos') }}">
            <svg class="w-5 fill-current mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
              <path
                d="M17 3v-2c0-.552.447-1 1-1s1 .448 1 1v2c0 .552-.447 1-1 1s-1-.448-1-1zm-12 1c.553 0 1-.448 1-1v-2c0-.552-.447-1-1-1-.553 0-1 .448-1 1v2c0 .552.447 1 1 1zm13 13v-3h-1v4h3v-1h-2zm-5 .5c0 2.481 2.019 4.5 4.5 4.5s4.5-2.019 4.5-4.5-2.019-4.5-4.5-4.5-4.5 2.019-4.5 4.5zm11 0c0 3.59-2.91 6.5-6.5 6.5s-6.5-2.91-6.5-6.5 2.91-6.5 6.5-6.5 6.5 2.91 6.5 6.5zm-14.237 3.5h-7.763v-13h19v1.763c.727.33 1.399.757 2 1.268v-9.031h-3v1c0 1.316-1.278 2.339-2.658 1.894-.831-.268-1.342-1.111-1.342-1.984v-.91h-9v1c0 1.316-1.278 2.339-2.658 1.894-.831-.268-1.342-1.111-1.342-1.984v-.91h-3v21h11.031c-.511-.601-.938-1.273-1.268-2z" />
            </svg>
            <p>Eventos</p>
          </a>
        </li>
        <li class="hover:bg-main-color hover:text-accent-color py-2">
          <a class="mx-6 flex" href="{{ route('presentaciones') }}">
            <svg class="w-5 fill-current mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
              <path
                d="M13 20.002h2v3.998h-2v-3.998zm-6.902 3.998h2.627l3.42-3.998h-2.633l-3.414 3.998zm9.773-3.998l3.42 3.998h2.627l-3.414-3.998h-2.633zm8.129-17.01c0 .876-.399 1.654-1 2.2v12.808h-18.984v-4h-4.016c.854-1.333 1.016-2.932 1.016-5.456v-5.183c0-2.062 1.322-3.292 2.953-3.339-.017-.031 16.996-.02 17.031-.02 1.657 0 3 1.333 3 2.99zm-18.939.021c0-.551-.448-1-1-1-.747 0-1.061.599-1.061 1.348v5.183c0 1.583 0 2.442-.229 3.458h1.244v-7.989c.552 0 1.046-.449 1.046-1zm15.955 2.987h-15.016v10.002h15.016v-10.002zm-.016-4h-14.124c.255.699.238 1.339-.001 2.002h14.125c1.303 0 1.345-2.002 0-2.002zm-10.666 12c1.307-2.344 2.214-3.548 3.454-4.63l-.161-.37c-1.503.935-2.312 1.64-3.535 3.028-.651-.464-1.018-.678-1.597-.958l-.495.458c.991.918 1.528 1.523 2.334 2.472zm8.666-5h-4v1h4v-1zm0 2h-4v1h4v-1zm0 2h-4v1h4v-1z" />
            </svg>
            <p>Presentaciones</p>
          </a>
        </li>
        <li class="hover:bg-main-color hover:text-accent-color py-2">
          <a class="mx-6 flex" href="{{ route('panelistas') }}">
            <svg class="w-5 fill-current mr-2" width="24" height="24" xmlns="http://www.w3.org/2000/svg"
              fill-rule="evenodd" clip-rule="evenodd">
              <path
                d="M7 16.488l1.526-.723c1.792-.81 2.851-.344 4.349.232 1.716.661 2.365.883 3.077 1.164 1.278.506.688 2.177-.592 1.838-.778-.206-2.812-.795-3.38-.931-.64-.154-.93.602-.323.818 1.106.393 2.663.79 3.494 1.007.831.218 1.295-.145 1.881-.611.906-.72 2.968-2.909 2.968-2.909.842-.799 1.991-.135 1.991.72 0 .23-.083.474-.276.707-2.328 2.793-3.06 3.642-4.568 5.226-.623.655-1.342.974-2.204.974-.442 0-.922-.084-1.443-.25-1.825-.581-4.172-1.313-6.5-1.6v-5.662zm-1 6.538h-4v-8h4v8zm1-7.869v-1.714c-.006-1.557.062-2.447 1.854-2.861 1.963-.453 4.315-.859 3.384-2.577-2.761-5.092-.787-7.979 2.177-7.979 2.907 0 4.93 2.78 2.177 7.979-.904 1.708 1.378 2.114 3.384 2.577 1.799.415 1.859 1.311 1.853 2.879 0 .13-.011 1.171 0 1.665-.483-.309-1.442-.552-2.187.106-.535.472-.568.504-1.783 1.629-1.75-.831-4.456-1.883-6.214-2.478-.896-.304-2.04-.308-2.962.075l-1.683.699z" />
            </svg>
            <p>Panelistas</p>
          </a>
        </li>
        <li class="hover:bg-main-color hover:text-accent-color py-2">

          <form method="POST" action="{{ route('logout') }}">
            @csrf
            <a class="mx-6 flex items-center" href="{{ route('logout') }}"
              onclick="event.preventDefault(); this.closest('form').submit();">
              <svg class="w-5 fill-current mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path
                  d="M16 9v-4l8 7-8 7v-4h-8v-6h8zm-2 10v-.083c-1.178.685-2.542 1.083-4 1.083-4.411 0-8-3.589-8-8s3.589-8 8-8c1.458 0 2.822.398 4 1.083v-2.245c-1.226-.536-2.577-.838-4-.838-5.522 0-10 4.477-10 10s4.478 10 10 10c1.423 0 2.774-.302 4-.838v-2.162z" />
              </svg>
              <p>LogOut</p>
            </a>
          </form>
        </li>
      </ul>
    </div>

    <!-- Menú -->
    <div class="hidden w-4/5 lg:block mx-auto  bg-accent-color text-main-color">
      <ul class="w-full flex justify-evenly items-center">
        @foreach ($navlinks as $link)
        <x-utils.menu-item class="{{ (url()->current() == route($link['route'])) ? 'text-orange-600' : '' }}"
          :routeInMenu="$link['route']">
          <x-slot name="image">
            {!! $link['image'] !!}
          </x-slot>
          {{$link['text']}}
        </x-utils.menu-item>
        @endforeach
        <li class="hover:bg-main-color hover:text-accent-color py-2 transform transition hover:translate-y-1">
          <form method="POST" action="{{ route('logout') }}">
            @csrf
            <a class="mx-6 flex flex-col items-center text-lg tracking-wide font-semibold" href="{{ route('logout') }}"
              onclick="event.preventDefault(); this.closest('form').submit();">
              <svg class="w-5 fill-current mb-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path
                  d="M16 9v-4l8 7-8 7v-4h-8v-6h8zm-2 10v-.083c-1.178.685-2.542 1.083-4 1.083-4.411 0-8-3.589-8-8s3.589-8 8-8c1.458 0 2.822.398 4 1.083v-2.245c-1.226-.536-2.577-.838-4-.838-5.522 0-10 4.477-10 10s4.478 10 10 10c1.423 0 2.774-.302 4-.838v-2.162z" />
              </svg>
              <p>Logout</p>
            </a>
          </form>
        </li>
      </ul>
    </div>
  </nav>
</div>