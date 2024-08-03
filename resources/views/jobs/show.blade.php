
<x-layout>
    <x-slot:heading> Jobs </x-slot:heading>
    <h2 class = "font-bold text-lg">{{$job->title}}</h2>
    <p>this job pays {{$job->salary}} per year</p>
    @can('edit',$job)
    <p class="mt-6">
        <x-button href="/jobs/{{$job->id}}/edit">Edit job</x-button>
    </p>
    @endcan
</x-layout>