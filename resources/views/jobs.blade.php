<x-layout>

<x-slot name="heading">
    Job Listing   
    </x-slot > 


   
   <div class="space-y-4">
<!-- 
   loops through ech job in the jobs array -->
    @foreach ($jobs as $job )
   

    <!-- each job title is displayed as a clickable link -->
       <a href="/jobs/{{ $job['id']}}" class="block px-4 py-5 border border-gray-200 rounded-lg ">
         <div class="font-bold text-blue-500  text-sm">
            {{ $job->employer->name }}
         </div>
       <div>
       <strong>{{ $job['title']}}</strong> : Pays {{ $job['salary']}}  per year 
       </div>
          </a>
   
    @endforeach
    <div>
      {{ $jobs->links() }}
    </div>
</div>
</x-layout>
