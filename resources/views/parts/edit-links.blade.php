@can('update', $currency)
    <div>
        <a href="{{ route('currencies.edit', ['id' => $currency['id']]) }}">Edit</a>
    </div>
@endcan

@can('delete', $currency)
    <button class="delete-button" onclick="location.href='{{ route('currencies.delete', 
        ['id' => $currency['id']]) }}'" type="button">Delete</button>
@endcan 