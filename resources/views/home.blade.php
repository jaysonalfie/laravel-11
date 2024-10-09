<x-layout>
    {{--Strong tag to change into bold---}}
    <x-slot name="heading">
    Home Page    
    </x-slot >
 
    @foreach ($jobs as $job )
       <li><strong>{{ $job['title']}}</strong> : Pays {{ $job['salary']}}  per year </li>
    @endforeach
</x-layout>
