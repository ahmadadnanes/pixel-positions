@props(['job'])
<div class="bg-white/10 rounded-xl flex flex-col text-center p-4 border border-transparent hover:border-blue-800 group">
    <div class="self-start text-sm">
        {{$job->employer->name}}
    </div>
    <div class="py-8 font-bold flex flex-col ">
        <h3 class="group-hover:text-blue-800">
            <a href="{{$job->url}}" target="_blank">
                {{$job->title}}
            </a>
        </h3>
        <p class="mt-auto">{{$job->schedule}} - From {{$job->salary}}</p>
    </div>
    <div class="flex justify-between items-center mt-auto">
        <div>
           @foreach($job->tags as $tag)
                <x-tag :$tag></x-tag>
           @endforeach
        </div>
        <img src="{{$job->employer->logo}}" alt="" class="rounded" width="40">
    </div>
</div>
