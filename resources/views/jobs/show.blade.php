<x-layout>

    <x-slot:heading>
        Job
    </x-slot:heading>

    <h2 class="font-bold text-lg">{{ $job->title }} </h2>

    <p>This Job Pays {{ $job->salary }} Per Years</p>
    <br>

    {{-- if (Auth::user()->cannot('edit-job', $job)) {
    dd('failure');
    } --}}

    @can('edit-job', $job)
        <p>
            <x-button href="/jobs/{{ $job->id }}/edit">Edit Job</x-button>
        </p>
    @endcan


</x-layout>
