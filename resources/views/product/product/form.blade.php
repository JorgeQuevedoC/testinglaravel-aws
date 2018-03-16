<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    <label for="name" class="col-md-4 control-label">{{ 'Name' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="name" type="text" id="name" value="{{ $product->name or ''}}" required>
        {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('code') ? 'has-error' : ''}}">
    <label for="code" class="col-md-4 control-label">{{ 'Code' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="code" type="text" id="code" value="{{ $product->code or ''}}" required>
        {!! $errors->first('code', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('buyPrice') ? 'has-error' : ''}}">
    <label for="buyPrice" class="col-md-4 control-label">{{ 'Buyprice' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="buyPrice" type="number" id="buyPrice" value="{{ $product->buyPrice or ''}}" required>
        {!! $errors->first('buyPrice', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('sellPrice') ? 'has-error' : ''}}">
    <label for="sellPrice" class="col-md-4 control-label">{{ 'Sellprice' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="sellPrice" type="number" id="sellPrice" value="{{ $product->sellPrice or ''}}" required>
        {!! $errors->first('sellPrice', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Create' }}">
    </div>
</div>
