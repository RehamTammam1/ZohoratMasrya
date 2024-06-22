<x-layout>
     <x-slot:heading>Our Jobs</x-slot>
      @foreach ($jobs as $job)
        <ul>
            <a href="/jobs/{{$job['id']}}">
                <li>
                    <strong>{{$job['Title']}}:</strong> Pays {{$job['Salary']}}
                </li>
            </a>
        </ul>

     @endforeach

     </x-layout>
