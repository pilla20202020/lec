<tr>
    <td>{{++$key}}</td>
    <td>{{ Str::limit($student->title, 47) }}</td>
    <td class="text-center">{{ Carbon\Carbon::parse($student->date)->format('Y-m-d') }}</td>

    <td class="text-center">
        @if($student->is_published =='1')
            <span class="badge" style="background-color: #419645">{{$student->is_published ? 'Yes' : 'No'}}</span>
        @elseif($student->is_published =='0')
            <span class="badge" style="background-color: #f44336">{{$student->is_published ? 'Yes' : 'No'}}</span>
        @endif    </td>
    <td class="text-right">
        <a href="{{route('student.edit', $student->slug)}}" class="btn btn-flat btn-primary btn-xs" title="edit">
            <i class="glyphicon glyphicon-edit"></i>
        </a>
        <button type="button" data-url="{{ route('student.destroy', $student->slug) }}"
                class="btn btn-flat btn-danger btn-xs item-delete" title="delete">
            <i class="glyphicon glyphicon-trash"></i>
        </button>
    </td>
</tr>

