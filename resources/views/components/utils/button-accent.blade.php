<button {{ $attributes->merge(['class' => 'bg-accent-color border
  border-transparent rounded-md font-semibold text-sm text-main-color uppercase tracking-wide
  hover:bg-sky-400 active:bg-sky-700 focus:outline-none focus:border-sky-700
  focus:ring ring-sky-300 disabled:opacity-25 transition ease-in-out duration-150']) }}>
  {{ $slot }}
</button>