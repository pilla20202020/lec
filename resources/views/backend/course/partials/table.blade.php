<tr>
    <td>{{++$key}}</td>
    <td>{{ Str::limit($course->title, 47) }}</td>
    <td class="text-center">{{ Carbon\Carbon::parse($course->date)->format('Y-m-d') }}</td>

    <td class="text-center">
        @if($course->is_published =='1')
            <span class="badge" style="background-color: #419645">{{$course->is_published ? 'Yes' : 'No'}}</span>
        @elseif($course->is_published =='0')
            <span class="badge" style="background-color: #f44336">{{$course->is_published ? 'Yes' : 'No'}}</span>
        @endif    </td>
    <td class="text-right">
        <a href="{{route('course.edit', $course->slug)}}" class="btn btn-flat btn-primary btn-xs" title="edit">
            <i class="glyphicon glyphicon-edit"></i>
        </a>
        <button type="button" data-url="{{ route('course.destroy', $course->slug) }}"
                class="btn btn-flat btn-danger btn-xs item-delete" title="delete">
            <i class="glyphicon glyphicon-trash"></i>
        </button>
    </td>
</tr>

