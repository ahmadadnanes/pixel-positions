@props(['job'])
<div class="bg-white/10 rounded-xl flex p-4 justify-between">
    <div class="flex gap-x-5">
        <div>
            <img src="{{$job->employer->logo}}" alt="" class="rounded" width="90">
        </div>
        <div class="flex-1 flex flex-col">
            <a href="" class="self-start text-sm text-gray-600">{{$job->employer->name}}</a>
            <h3 class="mt-3">
                <a href="{{$job->url}}" target="_blank">
                    {{$job->title}}
                </a>
            </h3>
            <p class="mt-auto text-gray-400">{{$job->schedule}} - From {{$job->salary}}</p>
        </div>
    </div>

    <div class="">
        <div>
            @foreach($job->tags as $tag)
                <x-tag :$tag></x-tag>
            @endforeach
        </div>
    </div>
</div>
