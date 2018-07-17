@can('update', $currency)
<div class="form-group">
    <a class="edit-button btn btn-primary"
    href="{{ route('currencies.edit', ['id' => $currency['id']]) }}">Edit<a/>
</div>
@endcan

@can('delete', $currency)
<div class="form-group">
    {!! Form::open([
        'route' => ['currencies.destroy', $currency['id']],
        'method' => 'DELETE'
    ]) !!}
    <button type="submit" class="delete-button btn btn-primary">Delete</button>
    {!! Form::close() !!}
</div>
@endcan