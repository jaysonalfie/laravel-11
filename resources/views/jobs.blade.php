<x-layout>

<x-slot name="heading">
    Job Listing   
    </x-slot > 


   
   <ul>
<!-- 
   loops through ech job in the jobs array -->
    @foreach ($jobs as $job )
    <li>

    <!-- each job title is displayed as a clickable link -->
       <a href="/jobs/{{ $job['id']}}" class="text-blue-500  hover:underline">
        <strong>{{ $job['title']}}</strong> : Pays {{ $job['salary']}}  per year 
          </a>
    </li>
    @endforeach
   </ul>
</x-layout>
