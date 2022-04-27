<x-master title="Eventos">

  <main class="container my-4 lg:w-4/5 lg:mx-auto">
    <div
      class="nextevent cursor-pointer flex flex-col items-start justify-center pl-4 w-4/5 xl:w-1/2 h-32 lg:h-36 xl:h-40 bg-white mx-auto lg:mx-0 rounded-md shadow-lg border-l-8 border-box1-color my-8">
      <a href="" class="">
        <div class="nextevent__advisor font-raleway lg:text-lg text-accent-color font-bold mb-3">
          Próximo evento:
        </div>
        <div class="nextevent__title mb-2 font-poppins text-sm lg:text-base text-accent-color font-semibold">
          Coloquio 2022: Mercados Digitales
        </div>
        <div class="nextevent__date font-poppins font-light text-sm lg:text-base text-accent-color">
          28 ABR 2022
        </div>
      </a>
    </div>

    <div class="container-grid lg:w-3/5 xl:w-1/2 2xl:w-2/5 lg:grid grid-cols-2 gap-4 lg:mx-auto">
      <div
        class="addEvents w-2/4 lg:w-full h-52 lg:h-72 mb-8 lg:mb-0 text-accent-color font-raleway p-4 bg-white rounded-md mx-auto items-center">
        <a class="" href="{{ route('eventos-create') }}">
          <svg class="fill-current w-6 lg:w-12" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
            <path
              d="m8.5 18 3.5 4 3.5-4H19c1.103 0 2-.897 2-2V4c0-1.103-.897-2-2-2H5c-1.103 0-2 .897-2 2v12c0 1.103.897 2 2 2h3.5zM7 9h4V5h2v4h4v2h-4v4h-2v-4H7V9z">
            </path>
          </svg>
          <img class="w-36 md:w-40 lg:w-80 xl:w-56 mx-auto mt-2" src="{{url('/img/events.png')}}" alt="" />

          <p class="font-semibold tracking-wider lg:text-xl text-center">
            Crear Evento
          </p>
        </a>
      </div>

      <div
        class="totalEvents w-2/4 lg:w-full h-52 lg:h-72 text-main-color font-raleway p-4 bg-orange-500 rounded-md mx-auto lg:flex flex-col justify-evenly text-center">
        <svg class="fill-current w-6 lg:w-12" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
          <path
            d="M13.838 8.076l-.171.098v.858l.171-.098v-.858zm1.412.054l-.171.098v-.859l.171-.098v.859zm-4.367-8.13l-4.883 2.758v5.753l6.125 3.489 4.875-2.775v-5.754l-6.117-3.471zm-.001 1.149l4.557 2.585-.851.458-4.511-2.589.805-.454zm.618 9.344l-4.5-2.563v-4.095l4.5 2.609v4.049zm.509-4.91l-4.43-2.569 1.022-.584 4.409 2.61-1.001.543zm3.991 3.06l-3.5 1.993v-4.181l1-.539v1.428l1.5-.844v-1.393l1-.539v4.075zm-2.453.458l-.175.098v-.858l.175-.099v.859zm.702-.401l-.172.098v-.859l.172-.098v.859zm.287-.163l-.171.098v-.859l.171-.098v.859zm.292-.166l-.175.099v-.859l.175-.099v.859zm5.172 5.004v-3.213c0-.77.506-1.162 1.008-1.162.498 0 .992.383.992 1.163v4.086c0 .796-.071 1.179-.573 2.092-.793 1.441-2.242 4.807-2.242 7.66h-5.002s-.559-2.759-.763-3.942c-.411-2.377.126-3.471 1.109-4.485 1.021-1.053 1.527-1.551 1.995-2.035 1.081-1.121 2.552.194 1.694 1.222-.468.561-1.624 1.803-1.901 2.171-.268.356.231.857.624.447.573-.599 1.905-2.083 2.365-2.618.443-.517.694-.829.694-1.386zm-16 0v-3.213c0-.77-.506-1.162-1.008-1.162-.498 0-.992.383-.992 1.163v4.086c0 .796.071 1.179.573 2.092.793 1.441 2.242 4.461 2.242 7.66h5.002s.559-2.759.763-3.942c.411-2.377-.126-3.471-1.109-4.485-1.021-1.053-1.527-1.551-1.995-2.035-1.081-1.121-2.552.194-1.694 1.222.468.561 1.624 1.803 1.901 2.171.268.356-.231.857-.624.447-.573-.599-1.905-2.083-2.365-2.618-.443-.517-.694-.829-.694-1.386z" />
        </svg>
        <div class="totalEvents__number mx-auto text-8xl lg:text-9xl font-semibold tracking-wider">
          12
        </div>

        <p class="font-semibold lg:text-lg tracking-wider">
          Eventos en el sistema
        </p>
      </div>

      <div
        class="publihedEvents w-2/4 lg:w-full h-52 lg:h-72 my-8 lg:my-0 text-main-color font-raleway p-4 bg-purple-600 rounded-md mx-auto lg:flex flex-col justify-evenly text-center">
        <svg class="fill-current w-6 lg:w-12" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
          <path
            d="M15.883 10c-4.227-4.529-.1-8.598-.1-8.598l-1.393-1.389 5.61-.013v5.607l-1.394-1.391c0 .001-4.252 1.685-2.723 5.784zm-2.904-8.438l-1.452-1.438-7.255 4.108 1.992 1.171 6.715-3.841zm11.021 6.483v10.83l-9 5.125v-11.132l9-4.823zm-5.959 9.388l-.35.199v1.713l.35-.195v-1.717zm.584-.333l-.344.195v1.717l.344-.195v-1.717zm.82-.468l-.343.196v1.717l.343-.196v-1.717zm.575-.326l-.342.195v1.717l.342-.195v-1.717zm.584-.333l-.349.199v1.717l.349-.199v-1.717zm.844-.481l-.343.195v1.717l.289-.165.054-.031v-1.716zm-8.479-3.825l-10.094-5.938-2.875 3.91 10.108 5.997 2.861-3.969zm-10.969 1.484v4.298l11 6.265v-8.67l-2.339 3.245-8.661-5.138z" />
        </svg>
        <div class="publihedEvents__number mx-auto text-8xl lg:text-9xl font-semibold tracking-wider">
          1
        </div>

        <p class="font-semibold lg:text-lg tracking-wider">
          Eventos publicados
        </p>
      </div>

      <div
        class="archivedEvents w-2/4 lg:w-full h-52 lg:h-72 my-8 lg:my-0 text-main-color font-raleway p-4 bg-box1-color rounded-md mx-auto lg:flex flex-col justify-evenly text-center">
        <svg class="fill-current w-6 lg:w-12" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
          <path
            d="M15.01 9.968l-3.961-3.968h1.968s.991-4.178-2.985-6c6.191.222 6.972 6 6.972 6h1.968l-3.962 3.968zm8.99-1.923v10.83l-9 5.125v-11.132l9-4.823zm-5.959 9.388l-.35.199v1.713l.35-.195v-1.717zm.584-.333l-.344.195v1.717l.344-.195v-1.717zm.82-.468l-.343.196v1.717l.343-.196v-1.717zm.575-.326l-.342.195v1.717l.342-.195v-1.717zm.584-.333l-.349.199v1.717l.349-.199v-1.717zm.844-.481l-.343.195v1.717l.289-.165.054-.031v-1.716zm-10.851-12.534c-.331-.629-1.081-1.348-1.72-1.326l-4.604 2.6 1.992 1.171 4.332-2.445zm2.372 8.709l-10.094-5.938-2.875 3.91 10.108 5.997 2.861-3.969zm-10.969 1.484v4.298l11 6.265v-8.67l-2.339 3.245-8.661-5.138z" />
        </svg>
        <div class="totalEvents__number mx-auto text-8xl lg:text-9xl font-semibold tracking-wider">
          12
        </div>

        <p class="font-semibold lg_text-lg tracking-wider">
          Eventos archivados
        </p>
      </div>
    </div>
  </main>

</x-master>