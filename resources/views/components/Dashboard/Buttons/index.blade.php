@props([
    'text'      => '',
    'href'      => '',
    'btn_color' => '',

    ])
<button href="{{$href}}" class="btn {{$btn_color}}" >{{$text}}</button>