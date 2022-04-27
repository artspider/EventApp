<x-master title="Presentaciones">

  <div class="container my-12 px-4 lg:px-0 lg:w-4/5 lg:mx-auto">
    <div class="grid-container 2xl:grid grid-cols-2 mx-auto">
      <div class="nextpresentations lg:w-4/5">
        <h2 class="text-2xl font-raleway font-semibold">
          Próximas presentaciones
        </h2>
        <div class="card-next p-6 bg-white round-md shadow-lg border-r-4 border-r-purple-600 mt-6">
          <div class="date-hour flex items-center">
            <div class="timer-wrapper w-14 h-14 bg-purple-600 rounded-md flex items-center justify-center">
              <svg class="w-10 fill-current text-main-color" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path
                  d="M12 2c5.514 0 10 4.486 10 10s-4.486 10-10 10-10-4.486-10-10 4.486-10 10-10zm0-2c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm5.848 12.459c.202.038.202.333.001.372-1.907.361-6.045 1.111-6.547 1.111-.719 0-1.301-.582-1.301-1.301 0-.512.77-5.447 1.125-7.445.034-.192.312-.181.343.014l.985 6.238 5.394 1.011z" />
              </svg>
            </div>
            <div class="text-wrapper ml-4">
              <p class="date font-poppins font-semibold">28 ABR 2022</p>
              <p class="time text-sm font-poppins font-light">09:00</p>
            </div>
          </div>
          <div class="title text-lg font-raleway font-semibold mt-4">
            Mercados Electrónicos (Seguridad de Información mediante
            aplicaciones blockchain y fintech)
          </div>
        </div>

        <div class="card-next p-6 bg-white round-md shadow-lg border-r-4 border-r-orange-600 mt-6">
          <div class="date-hour flex items-center">
            <div class="timer-wrapper w-14 h-14 bg-orange-600 rounded-md flex items-center justify-center">
              <svg class="w-10 fill-current text-main-color" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path
                  d="M12 2c5.514 0 10 4.486 10 10s-4.486 10-10 10-10-4.486-10-10 4.486-10 10-10zm0-2c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm5.848 12.459c.202.038.202.333.001.372-1.907.361-6.045 1.111-6.547 1.111-.719 0-1.301-.582-1.301-1.301 0-.512.77-5.447 1.125-7.445.034-.192.312-.181.343.014l.985 6.238 5.394 1.011z" />
              </svg>
            </div>
            <div class="text-wrapper ml-4">
              <p class="date font-poppins font-semibold">28 ABR 2022</p>
              <p class="time text-sm font-poppins font-light">10:00</p>
            </div>
          </div>
          <div class="title text-lg font-raleway font-semibold mt-4">
            Server Driven UI. La Interfaz de usuario impulsada por el servidor
          </div>
        </div>

        <div class="card-next p-6 bg-white round-md shadow-lg border-r-4 border-r-pink-600 mt-6">
          <div class="date-hour flex items-center">
            <div class="timer-wrapper w-14 h-14 bg-pink-600 rounded-md flex items-center justify-center">
              <svg class="w-10 fill-current text-main-color" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path
                  d="M12 2c5.514 0 10 4.486 10 10s-4.486 10-10 10-10-4.486-10-10 4.486-10 10-10zm0-2c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm5.848 12.459c.202.038.202.333.001.372-1.907.361-6.045 1.111-6.547 1.111-.719 0-1.301-.582-1.301-1.301 0-.512.77-5.447 1.125-7.445.034-.192.312-.181.343.014l.985 6.238 5.394 1.011z" />
              </svg>
            </div>
            <div class="text-wrapper ml-4">
              <p class="date font-poppins font-semibold">28 ABR 2022</p>
              <p class="time text-sm font-poppins font-light">11:00</p>
            </div>
          </div>
          <div class="title text-lg font-raleway font-semibold mt-4">
            Kavak: La migración a mercados electrónicos
          </div>
        </div>
      </div>

      <div class="presentationdatacontainer lg:w-3/5 xl:w-1/2 2xl:w-full lg:grid grid-cols-2 gap-4 lg:mx-auto my-8">
        <!-- Crear Presentacion-->
        <div
          class="addEvents w-3/5 lg:w-full h-60 lg:h-72 mb-8 lg:mb-0 text-accent-color font-raleway p-4 bg-white rounded-md shadow-lg mx-auto items-center">
          <a class="" href="{{ route('presentaciones-create') }}">
            <svg class="fill-current w-8 lg:w-12" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
              <path
                d="m8.5 18 3.5 4 3.5-4H19c1.103 0 2-.897 2-2V4c0-1.103-.897-2-2-2H5c-1.103 0-2 .897-2 2v12c0 1.103.897 2 2 2h3.5zM7 9h4V5h2v4h4v2h-4v4h-2v-4H7V9z">
              </path>
            </svg>
            <img class="w-48 md:w-40 lg:w-80 xl:w-56 mx-auto mt-2" src="{{url('/img/conference.png')}}" alt="" />

            <p class="font-semibold tracking-wider lg:text-xl text-center">
              Crear Presentación
            </p>
          </a>
        </div>

        <!-- Presentaciones en el próximo evento -->
        <div
          class="totalPresentations w-3/5 lg:w-full h-60 lg:h-72 mb-8 lg:mb-0 p-4 text-main-color font-raleway bg-purple-500 rounded-md shadow-lg mx-auto flex flex-col justify-evenly text-center">
          <svg class="fill-current w-8 lg:w-12" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
            <path
              d="M19 2H5a2 2 0 0 0-2 2v13a2 2 0 0 0 2 2h4l3 3 3-3h4a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2zm-7 3c1.727 0 3 1.272 3 3s-1.273 3-3 3c-1.726 0-3-1.272-3-3s1.274-3 3-3zM7.177 16c.558-1.723 2.496-3 4.823-3s4.266 1.277 4.823 3H7.177z">
            </path>
          </svg>
          <div class="totalEvents__number mx-auto text-8xl lg:text-9xl font-semibold tracking-wider">
            12
          </div>

          <p class="font-semibold lg:text-lg tracking-wider">
            Ponencias en el siguente evento
          </p>
        </div>

        <!-- Presentaciones en el sistema -->
        <div
          class="totalPresentations w-3/5 lg:w-full h-60 lg:h-72 mb-8 lg:mb-0 p-4 text-main-color font-raleway bg-orange-500 rounded-md mx-auto flex flex-col justify-evenly text-center">
          <svg class="fill-current w-8 lg:w-12" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
            <path
              d="M1.8 9l-.8-4h22l-.8 4h-2.029l.39-2h-17.122l.414 2h-2.053zm18.575-6l.604-2h-17.979l.688 2h16.687zm3.625 8l-2 13h-20l-2-13h24zm-8 4c0-.552-.447-1-1-1h-6c-.553 0-1 .448-1 1s.447 1 1 1h6c.553 0 1-.448 1-1z" />
          </svg>

          <div class="totalEvents__number mx-auto text-8xl lg:text-9xl font-semibold tracking-wider">
            143
          </div>

          <p class="font-semibold lg:text-lg tracking-wider">
            Ponencias en el sistema
          </p>
        </div>

        <!-- Temas -->
        <div
          class="totalPresentations w-3/5 lg:w-full h-60 lg:h-72 mb-8 lg:mb-0 p-4 text-main-color font-raleway bg-box1-color rounded-md mx-auto flex flex-col justify-evenly text-center">
          <svg class="fill-current w-8 lg:w-12" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
            <path
              d="M18.376 13.896l-2.376.479.479-2.375 1.897 1.896zm-1.425-2.368l1.896 1.896 5.153-5.153-1.896-1.896-5.153 5.153zm3.31 3.311l-.094.08v2.241c-3.927.269-6.853 1.148-8.25 1.649v-11.74c2.705-1.602 7.582-2.172 10.083-2.303v-1.766c-4.202.128-8.307.804-11 2.481-2.693-1.677-6.798-2.353-11-2.481v15.904c3.608.11 7.146.624 9.778 1.829.775.355 1.666.356 2.444 0 2.633-1.205 6.169-1.718 9.777-1.829v-5.804l-1.738 1.739zm-10.178 3.969c-1.397-.5-4.322-1.38-8.25-1.649v-12.228c4.727.356 6.9 1.341 8.25 2.14v11.737zm4.959-4.263l.177-1.066-2.219.549v1.019l2.042-.502z" />
          </svg>
          <div class="totalEvents__number mx-auto text-8xl lg:text-9xl font-semibold tracking-wider">
            32
          </div>

          <p class="font-semibold lg:text-lg tracking-wider">
            Diferentes temas
          </p>
        </div>
      </div>
    </div>
  </div>

</x-master>