<x-layout>
    <section class="py-6 text-center">
        <h1 class="text-3xl py-5">Let's Find Your Next Job</h1>
        <x-forms.form action="/search" method="get" class="mt-3">
            <x-forms.input :label="false" name="q" placeholder="WebDeveloper..."></x-forms.input>
        </x-forms.form>
    </section>
    <section>
        <x-section-heading>Top Jobs</x-section-heading>
        <div class="grid lg:grid-cols-3 gap-8 mt-6">
            @foreach($featuredJobs as $job )
                <x-job-card :$job />
            @endforeach
        </div>
    </section>
    <section>
        <x-section-heading>Tags</x-section-heading>
        <div class="mt-6 space-x-1 gap-y-2">
            @foreach($tags as $tag)
                <x-tag :$tag />
            @endforeach
        </div>
    </section>

    <section class="pt-4">
        <x-section-heading>Recent Jobs</x-section-heading>
        <div class="mt-6 space-y-3">
            <div class="grid lg:grid-cols-1 gap-8 mt-6">
                @foreach($jobs as $job )
                    <x-job-card-wide :$job  />
                @endforeach
            </div>
        </div>
    </section>
</x-layout>
