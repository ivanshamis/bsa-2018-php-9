@include('parts/currency-form-item', ['field'=>'title', 'caption'=>'Currency title'])
@include('parts/currency-form-item', ['field'=>'short_name', 'caption'=>'Short name'])
@include('parts/currency-form-item', ['field'=>'price', 'caption'=>'Price'])
@include('parts/currency-form-item', ['field'=>'logo_url', 'caption'=>'Logo URL'])
<button type="submit" class="btn btn-primary">Save</button>