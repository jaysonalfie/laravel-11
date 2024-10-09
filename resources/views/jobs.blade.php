<x-layout>

<x-slot name="heading">
    Job Listing   
    </x-slot > 


   <ul>
        @foreach ($jobs as $job )
       <a href="/jobs/1">
        strong>{{ $job['title']}}</strong> : Pays {{ $job['salary']}}  per year 
          </a>
    </li>
    @endforeach
   </ul>
</x-layout>
