{{-- <x-layout>
    <x-slot:heading>
        Job Listings
    </x-slot:heading>

    <div class="space-y-4">
        @foreach ($jobs as $job)
            <a href="/jobs/{{ $job['id'] }}" class="block px-4 py-6 border border-gray-200 rounded-lg">

                <div class="font-bold text-blue-500">
                    {{ $job->employer->name }}
                </div>

                <div>
                    <strong>{{ $job['title'] }}:</strong>
                    Pays {{ $job['salary'] }} per year.
                </div>
            </a>
        @endforeach
    </div>
</x-layout> --}}


<x-layout>
    <x-slot:heading>
        Job Listings
    </x-slot:heading>

    <div class="grid gap-5 md:grid-cols-2 lg:grid-cols-3">
        @foreach ($jobs as $job)
            <a href="/jobs/{{ $job->id }}"
                class="group block rounded-xl border border-gray-200 bg-white p-6 shadow-sm transition duration-300 hover:-translate-y-1 hover:border-blue-400 hover:shadow-lg">

                <div class="mb-4 flex items-center justify-between">
                    <span class="rounded-full bg-blue-100 px-3 py-1 text-sm font-semibold text-blue-700">
                        {{ $job->employer->name }}
                    </span>
                </div>

                <h2 class="mb-2 text-xl font-bold text-gray-900 transition group-hover:text-blue-600">
                    {{ $job->title }}
                </h2>

                <p class="mb-5 text-gray-600">
                    This job pays
                    <span class="font-semibold text-green-600">
                        {{ $job->salary }}
                    </span>
                    per year.
                </p>

                <div class="flex items-center justify-between border-t border-gray-100 pt-4">
                    <span class="text-sm font-medium text-blue-600">
                        View job details
                    </span>

                    <span class="text-xl text-blue-600 transition group-hover:translate-x-1">
                        &rarr;
                    </span>
                </div>
            </a>
        @endforeach
    </div>

    <div class="mt-8">
        {{ $jobs->links() }}
    </div>

    {{-- <p>
        Page {{ $jobs->currentPage() }}
        of {{ $jobs->lastPage() }}
    </p> --}}
</x-layout>
