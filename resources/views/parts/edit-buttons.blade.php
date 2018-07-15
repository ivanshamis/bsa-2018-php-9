@can('update', $currency)
    <div>
        <a href="{{ route('currencies.edit', ['id' => $currency['id']]) }}">Edit</a>
    </div>
@endcan

@can('delete', $currency)
    <form method="POST" action="{{ route('currencies.update', ['id'=>$currency['id']]) }}">
        @method('DELETE')
        {{ csrf_field() }}
        <button type="submit" class="btn btn-primary">Delete</button>
    </form>
@endcan