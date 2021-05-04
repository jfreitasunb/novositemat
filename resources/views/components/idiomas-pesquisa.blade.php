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