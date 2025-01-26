<x-layout>
    <div class="space-y-10">
        <section class="text-center pt-6">
            <h1 class="font-bold text-4xl">Let's Find Your Next Job</h1>
            <form action="" class="mt-6">
                <input type="text" placeholder="Web Developer..." class="rounded-xl bg-white/5 border-white/10 px-5 py-4 w-full max-w-xl">
            </form>
        </section>
        <section class="pt-10">
            <x-section-heading>Top Jobs</x-section-heading>
            @if(isset($jobs[1]))
                <div class="grid lg:grid-cols-3 gap-8">
                    @foreach ($jobs[1] as $job)
                        <x-job-card :$job />
                    @endforeach
                </div>
            @endif
        </section>
        <section>
            <x-section-heading>Tags</x-section-heading>
            <div class="mt-6 space-x-1">
                @foreach ($tags as $tag)
                    <x-tag :$tag />
                @endforeach
            </div>
        </section>
        <section>
            <x-section-heading>Recent Jobs</x-section-heading>

            <div class="mt-6 space-y-6">
                @foreach ($jobs[0] as $job)
                    <x-job-card-wide :$job />
                @endforeach
            </div>
        </section>
        {{$jobs->links()}}
    </div>
</x-layout>
