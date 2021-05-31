@extends('layouts.main-layout')

@section('content')
    <main>
        <h2>Employees &#8594; Tasks</h2>

        <ul>
            @foreach ($employees as $employee)
                <li>
                    {{$employee -> firstname . ' ' . $employee -> lastname}} &#8594;
                    <ul>
                        @foreach ($employee -> tasks as $task)
                            <li>
                                <strong>
                                    {{$task -> title}}: 
                                </strong>
                                {{$task -> description}}
                            </li>
                        @endforeach
                    </ul>
                </li> 
            @endforeach
        </ul>
    </main>
@endsection