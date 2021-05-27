<div class="flex flex-col h-screen justify-between">
<header>
    <div class="p-4 flex md:justify-between items-center">
        <div class="p-4 flex md:justify-between items-center md:w-1/2">
            <a href="{{ URL::to('/') }}"><img src="{{ URL::asset('imagens/logos/logo.png') }}" width="140" alt="Logo"></a>
        </div>

        <div class="md:w-2/3 md:self-center w-1/2 ml-2 md:mr-96">
            <h1 class="text-azulMAT1 md:text-4xl md:text-center md:mb-4 font-bold">{{ __('Department of Mathematics') }}</h1>
        </div>

        <div class="w-1/4 align-middle">
              <div class="m-auto">
                  <div class="btn border-primary md:border-2 bg-blue-200 hover:bg-blue-300 transition ease-in duration-150">
                    <a href="{{ route('lang.portuguese') }}">{{ __('Português') }}</a>
                  </div>
                  <div class="btn  border-primary md:border-2 bg-blue-200 hover:bg-blue-300 transition ease-in duration-150">
                    <a href="{{ route('lang.english') }}">English</a>
                  </div>
              </div>
              <div>
                <form class="py-4">
                    <input class="w-1/2 border rounded text-sm border-0 shadow focus:outline-none text-base" placeholder="{{ __('Search') }}"/>
                    <button class="w-1/4 bg-blue-400 border rounded text-base">{{ __('Search') }}</button>
                </form>     
              </div>
        </div>
    </div>