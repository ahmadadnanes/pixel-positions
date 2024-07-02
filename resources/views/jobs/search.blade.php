<x-layout>
    <x-page-heading>
        Results
    </x-page-heading>
    <div class="grid lg:grid-cols-1 gap-8 mt-6">
        @foreach($jobs as $job )
            <x-job-card-wide :$job />
        @endforeach
    </div>
</x-layout>
