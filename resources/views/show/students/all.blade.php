<div>
    <!-- Simplicity is the essence of happiness. - Cedric Bledsoe -->
</div>
@section('content')
    @foreach($student as $student)
    <tr>
        <td>{{ $student -> id }}</td>
        <td>{{ $student -> name }}</td>
        <td>{{ $student -> id }}</td>
    </tr>
        
    @endforeach
@endsection