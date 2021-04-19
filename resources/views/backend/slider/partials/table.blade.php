<tr>
    <td>{{++$key}}</td>
    <td><img src="{{asset($slide->thumbnail_path)}}" class="img-circle width-1" alt="slide_image" width="50" height="50"></td>
    <td>{{ Str::limit($slide->title, 47) }}</td>
{{--    <td class="text-center">{{ Carbon\Carbon::parse($slide->date)->format('Y-m-d') }}</td>--}}

    <td class="text-center">
        @if($slide->is_published =='1')
            <span class="badge" style="background-color: #419645">{{$slide->is_published ? 'Yes' : 'No'}}</span>
        @elseif($slide->is_published =='0')
            <span class="badge" style="background-color: #f44336">{{$slide->is_published ? 'Yes' : 'No'}}</span>
        @endif    </td>
    <td class="text-right">
        <a href="{{route('slider.edit', $slide->id)}}" class="btn btn-flat btn-primary btn-xs" title="edit">
            <i class="glyphicon glyphicon-edit"></i>
        </a>
        <button type="button" data-url="{{ route('slider.destroy', $slide->id) }}"
                class="btn btn-flat btn-danger btn-xs item-delete" title="delete">
            <i class="glyphicon glyphicon-trash"></i>
        </button>
    </td>
</tr>

