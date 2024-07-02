@props(['tag'])
<a href="/tags/{{strtolower($tag->name)}}" class="bg-white/10 hover:bg-white/25 rounded-xl text-xs px-2 py-1 transition-colors duration-300">{{$tag->name}}</a>
