@props(['active'])

<a class="{{Request::is('/')?'bg-gray-900 text-white':'text-gray-300 hover:bg-gray-700 hover:text-white'}} rounded-md px-3 py-2 text-sm font-medium" 
aria-current="{{(Request::is('/')?'page':'false')}}"
{{ $attributes}}
>{{ $slot}}</a>
