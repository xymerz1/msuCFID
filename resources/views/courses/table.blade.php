<table class="table table-responsive" id="courses-table">
    <thead>
        <th colspan="6">Course Name</th>
        <th colspan="6">Course Code</th>
        <!-- <th>User Id</th> -->
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($courses as $course)
        <tr>
            <td colspan="6">{!! $course->courseName !!}</td>
            <td colspan="6">{!! $course->courseCode !!}</td>
            <!-- <td>{!! $course->user_id !!}</td> -->
            <td colspan="3"> 
                {!! Form::open(['route' => ['courses.destroy', $course->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('courses.show', [$course->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('courses.edit', [$course->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>