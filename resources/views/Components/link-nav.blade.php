@props(['active'=>False,'type'=>['a','button']])

@if($type == 'a') 

 <a class="{{ $active ?'bg-rose-400 text-white':'text-gray-300 hover:bg-gray-700 hover:text-white'}}"
  aria-current="page"{{$attributes}}>{{$slot}}</a>

@else
    <button class="{{ $active ?'bg-rose-400 text-white':'text-gray-300 hover:bg-gray-700 hover:text-white'}}"
  aria-current="page"{{$attributes}}>{{$slot}}</button>

@endif