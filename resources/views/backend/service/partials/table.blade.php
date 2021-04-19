<tr>
    <td>{{++$key}}</td>
    @if(!empty($services->title))
        <td>{{ Str::limit($services->title, 47) }}</td>
    @endif

    <td class="text-center">
        @if($services->is_published =='1')
            <span class="badge" style="background-color: #419645">{{$services->is_published ? 'Yes' : 'No'}}</span>
        @elseif($services->is_published =='0')
            <span class="badge" style="background-color: #f44336">{{$services->is_published ? 'Yes' : 'No'}}</span>
        @endif
    </td>
    <td class="text-right">
        @if(!empty($services->slug))
            <a href="{{route('service.edit', $services->slug)}}" class="btn btn-flat btn-primary btn-xs" title="edit">
                <i class="glyphicon glyphicon-edit"></i>
            </a>
            <button type="button" data-url="{{ route('service.destroy', $services->slug) }}"
                    class="btn btn-flat btn-danger btn-xs item-delete" title="delete">
                <i class="glyphicon glyphicon-trash"></i>
            </button>
        @endif
    </td>
</tr>

