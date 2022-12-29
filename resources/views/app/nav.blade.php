<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        <a class="navbar-brand fs-3 text-center fw-semibold" href="{{route('home')}}">Gujurly bilim merkezi</a>
        <div class="collapse navbar-collapse row" id="navbarSupportedContent">
            <ul class="navbar-nav justify-content-center mb-2 mb-lg-0 row text-center">
                <li class="nav-item dropdown col-2 bg-secondary  mx-1 rounded">
                    <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Courses
                    </a>
                        <ul class="dropdown-menu text-light">
                            @foreach($courses as $course)
                                <li><a class="dropdown-item" href="{{route('courses.show', $course->id)}}">{{$course->name}}</a></li>
                            @endforeach
                        </ul>
                </li>
                <li class="nav-item dropdown col-2 bg-secondary  mx-1 rounded">
                    <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Teachers
                    </a>
                        <ul class="dropdown-menu text-light">
                            @foreach($teachers as $teacher)
                                <li><a class="dropdown-item" href="{{route('teachers.show', $teacher->id)}}">{{$teacher->first_name}} {{$teacher->last_name}}</a></li>
                            @endforeach
                        </ul>
                </li>
                <li class="nav-item dropdown col-2 bg-secondary  mx-1 rounded">
                    <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Classrooms
                    </a>
                    <ul class="dropdown-menu text-light">
                        @foreach($classrooms as $classroom)
                            <li><a class="dropdown-item" href="{{route('classrooms.show', $classroom->id)}}">{{$classroom->name}}</a></li>
                        @endforeach
                    </ul>
                </li>
                <li class="nav-item dropdown col-2 bg-success  mx-1 rounded">
                    <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Create
                    </a>
                    <ul class="dropdown-menu text-light">
                        <li><a class="dropdown-item" href="{{route('teachers.create')}}">Teacher</a></li>
                        <li><a class="dropdown-item" href="{{route('courses.create')}}">Course</a></li>
                        <li><a class="dropdown-item" href="{{route('classrooms.create')}}">Classroom</a></li>
                    </ul>
                </li>

                <li class="nav-item col-2">
                    <a href="{{route('registrations.create')}}" class="btn btn-warning  px-5">Registration</a>
                </li>
            </ul>
        </div>
    </div>
</nav>