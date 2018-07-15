        {{ csrf_field() }}
        <div class="form-group">
            <label for="title">Currency title</label>
            <input type="text" class="form-control" name="title" placeholder="Enter currency title" 
                value="{{ old('title',  isset($currency['title']) ? $currency['title'] : null) }}">
            @if ($errors->has('title'))
            <span class="help-block">{{ $errors->first('title') }}</span>
            @endif
        </div>
        <div class="form-group">
            <label for="short_name">Short name</label>
            <input type="text" class="form-control" name="short_name" placeholder="Enter currency short name" 
                value="{{ old('short_name',  isset($currency['short_name']) ? $currency['short_name'] : null) }}">
            @if ($errors->has('short_name'))
            <span class="help-block">{{ $errors->first('short_name') }}</span>
            @endif
        </div>
        <div class="form-group">
            <label for="price">Price</label>
            <input type="text" class="form-control" name="price" placeholder="Enter currency price" 
                value="{{ old('price',  isset($currency['price']) ? $currency['price'] : null) }}">
            @if ($errors->has('price'))
            <span class="help-block">{{ $errors->first('price') }}</span>
            @endif
        </div>
        <div class="form-group">
            <label for="logo_url">Logo URL</label>
            <input type="text" class="form-control" name="logo_url" placeholder="Enter currency logo URL" 
                value="{{ old('logo_url',  isset($currency['logo_url']) ? $currency['logo_url'] : null) }}">
            @if ($errors->has('logo_url'))
            <span class="help-block">{{ $errors->first('logo_url') }}</span>
            @endif
        </div>
        <button type="submit" class="btn btn-primary">Save</button>