<li {{$attributes->merge(['class' => 'hover:bg-main-color hover:text-accent-color py-2 transform transition
  hover:translate-y-1'])}}>

  <a class="mx-6 flex flex-col items-center text-lg tracking-wide font-semibold" href="{{ route($routeInMenu) }}">
    <div class=" w-5 mb-2"> {{$image}} </div>
    <p> {{ $slot }} </p>

  </a>
</li>