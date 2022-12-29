<div class="bg-white rounded shadow p-3 mb-3">
    <div class="row">
        <div class="col">
            <div class="h6">
                <span class="text-secondary">Classroom</span>
                <a href="{{ route('home', ['classroom_id' => $registration->classroom_id]) }}">
                    {{ $registration->classroom->name }}
                </a>
            </div>
            <div class="h6 mb-0">
                <span class="text-secondary">Course</span>
                <a href="{{ route('home', ['course_id' => $registration->course_id]) }}">
                    {{ $registration->course->name }}
                </a>
            </div>
        </div>
        <div class="col">
            <div class="h6">
                <span class="text-secondary">Student</span>
                <a href="{{ route('home', ['student_id' => $registration->student_id]) }}">
                    {{ $registration->student->name }}
                </a>
            </div>
            <div class="h6 mb-0">
                <span class="text-secondary">Teacher</span>
                <a href="{{ route('home', ['teacher_id' => $registration->teacher_id]) }}">
                    {{ $registration->teacher->name }}
                </a>
            </div>
        </div>
        <div class="col">
            <div class="h6">
                <span class="text-secondary">Phone</span>
                {{ $registration->student->phone }}
            </div>
            <div class="h6 mb-0">
                <span class="text-secondary">Price</span>
                {{ number_format($registration->course->price, 0, '.', ' ') }}K
            </div>
        </div>
    </div>
</div>