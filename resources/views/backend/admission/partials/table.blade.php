<tr>
    <td>{{++$key}}</td>
    <td>{{ Str::limit($admission->name, 47) }}</td>
    <td class="text-center">{{ Carbon\Carbon::parse($admission->date)->format('Y-m-d') }}</td>

    <td class="text-center">
        @if($admission->is_published =='1')
            <span class="badge" style="background-color: #419645">{{$admission->is_published ? 'Yes' : 'No'}}</span>
        @elseif($admission->is_published =='0')
            <span class="badge" style="background-color: #f44336">{{$admission->is_published ? 'Yes' : 'No'}}</span>
        @endif    </td>
    <td class="text-right">
        <button type="button" data-url="{{ route('admission.destroy', $admission->id) }}"
                class="btn btn-flat btn-danger btn-xs item-delete" title="delete">
            <i class="glyphicon glyphicon-trash"></i>
        </button>

        <a href="{{ route('admission.show', $admission->id) }}">
            <button type="button" 
                class="btn btn-flat btn-danger btn-xs item-delete"title="View">
                <i class="glyphicon glyphicon-eye-open"></i>
            </button>
        </a>
    </td>
</tr>

