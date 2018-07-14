        <button class="edit-button" onclick="location.href='{{ route('currencies.edit', 
            ['id' => $currency['id']]) }}'" type="button">Edit</button>
        <button class="delete-button" onclick="location.href='{{ route('currencies.delete', 
            ['id' => $currency['id']]) }}'" type="button">Delete</button>