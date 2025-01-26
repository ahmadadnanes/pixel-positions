@props(['job'])
    <div class="p-4 bg-white/5 rounded-xl flex flex-col text-center">
            <div class="self-start text-sm">{{$job->employer->name}}</div>
            <div class="py-8 font-bold">
                <h3>{{$job->title}}</h3>
                <p>{{$job->salary}}</p>
            </div>
            <div class="flex justify-between items-center mt-auto">
                <div class="space-x-1">
                    @foreach ($job->tags as $tag)
                        <x-tag :$tag size="small" />
                    @endforeach
                </div>
                <x-employer-logo  width="42" />
            </div>
    </div>
