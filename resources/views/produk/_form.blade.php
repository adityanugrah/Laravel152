<div class="form-group {{$errors->has('ProductName')?'has-error has-feedback' : ''}}">
    <label class="col-md-2 control-label" for="ProductName">Name</label>
    <div class="col-md-4">
        <input type="text" class="form-control" id="ProductName" name="ProductName" value="{{ old('ProductName') ? old('ProductName'):(isset($products->ProductName) ? $products->ProductName : '') }}">
		<?php echo $errors->first('ProductName','<span class="glyphicon glyphicon-remove form-control-feedback"></span><span class="help-block">:message</span>'); ?>
    </div>
</div>

<div class="form-group {{$errors->has('Category')?'has-error has-feedback' : ''}}">
    <label class="col-md-2 control-label" for="Category">Category</label>
    <div class="col-md-2">
        <select class="form-control" id="Category" name="CategoryID">
            @foreach($categories as $category)
                <option value="{{ $category->CategoryID }}" {{ isset($products) && ($category->CategoryID == $products->CategoryID) ? 'selected' : '' }}>{{ $category->CategoryName }}</option>
            @endforeach
        </select>
		<?php echo $errors->first('Category','<span class="glyphicon glyphicon-remove form-control-feedback"></span><span class="help-block">:message</span>'); ?>
    </div>
</div>

<div class="form-group{{$errors->has('Supplier')?'has-error has-feedback' : ''}}">
    <label class="col-md-2 control-label" for="Supplier">Supplier</label>
    <div class="col-md-3">
        <select class="form-control" id="Supplier" name="SupplierID">
            @foreach($suppliers as $supplier)
                <option value="{{ $supplier->SupplierID }}" {{ isset($products) && ($supplier->SupplierID == $products->SupplierID) ? 'selected' : '' }}>PT. {{ $supplier->CompanyName }}</option>
            @endforeach
        </select>
		<?php echo $errors->first('Supplier','<span class="glyphicon glyphicon-remove form-control-feedback"></span><span class="help-block">:message</span>'); ?>
    </div>
</div>

<div class="form-group {{$errors->has('UnitPrice')?'has-error has-feedback' : ''}}">
    <label class="col-md-2 control-label" for="UnitPrice">Unit Price</label>
    <div class="col-md-2">
        <div class="input-group">
            <span class="input-group-addon">$</span>
            <input type="text" class="form-control text-right" id="UnitPrice" name="UnitPrice" value="{{ old('UnitPrice') ? old('UnitPrice'):(isset($products->UnitPrice) ? $products->UnitPrice : '') }}">
        </div>
		<?php echo $errors->first('UnitPrice','<span class="glyphicon glyphicon-remove form-control-feedback"></span><span class="help-block">:message</span>'); ?>
    </div>
</div>

<div class="form-group {{$errors->has('QuantityPerUnit')?'has-error has-feedback' : ''}}">
    <label class="col-md-2 control-label" for="QuantityPerUnit">Quantity Per Unit</label>
    <div class="col-md-2">
        <div class="input-group">
            <input type="text" class="form-control text-right" id="QuantityPerUnit" name="QuantityPerUnit" value="{{old('QuantityPerUnit') ? old('QuantityPerUnit'):(isset($products->QuantityPerUnit) ? $products->QuantityPerUnit : '') }}">
            <span class="input-group-addon">pcs</span>
        </div>
		<?php echo $errors->first('QuantityPerUnit','<span class="help-block">:message</span>'); ?>
    </div>
</div>

<div class="form-group {{$errors->has('UnitsInStock')?'has-error has-feedback' : ''}}">
    <label class="col-md-2 control-label" for="UnitsInStock">Units In Stock</label>
    <div class="col-md-2">
        <div class="input-group">
            <input type="text" class="form-control text-right" id="UnitsInStock" name="UnitsInStock" value="{{ old('UnitsInStock') ? old('UnitsInStock'):(isset($products->UnitsInStock) ? $products->UnitsInStock : '') }}">
            <span class="input-group-addon">pcs</span>
        </div>
		<?php echo $errors->first('UnitsInStock','<span class="help-block">:message</span>'); ?>
    </div>
</div>

<div class="form-group {{$errors->has('UnitsOnOrder')?'has-error has-feedback' : ''}}">
    <label class="col-md-2 control-label" for="UnitsOnOrder">Units On Order</label>
    <div class="col-md-2">
        <div class="input-group">
            <input type="text" class="form-control text-right" id="UnitsOnOrder" name="UnitsOnOrder" value="{{ old('UnitsOnOrder') ? old('UnitsOnOrder'):(isset($products->UnitsOnOrder) ? $products->UnitsOnOrder : '') }}">
            <span class="input-group-addon">pcs</span>
        </div>
		<?php echo $errors->first('UnitsOnOrder','<span class="help-block">:message</span>'); ?>
    </div>
</div>

<div class="form-group {{$errors->has('ReorderLevel')?'has-error has-feedback' : ''}}">
    <label class="col-md-2 control-label" for="ReorderLevel">Reorder Level</label>
    <div class="col-md-2">	
        <div class="input-group">		
            <input type="text" class="form-control text-right" id="ReorderLevel" name="ReorderLevel" value="{{ old('ReorderLevel') ? old('ReorderLevel'):(isset($products->ReorderLevel) ? $products->ReorderLevel : '') }}">
            <span class="input-group-addon">pcs</span>
        </div>
		<?php echo $errors->first('ReorderLevel','<span class="help-block">:message</span>'); ?>
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-2 col-md-3">
        <div class="checkbox">
            <label>
                <input type="checkbox" name="Discontinued" {{ (isset($products->Discontinued) && ($products->Discontinued)) ? 'checked' : '' }}> Discontinued
            </label>
        </div>
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-2 col-md-6">
        @if (strpos(URL::current(), 'product/create') !== false)
            <button type="submit" class="btn btn-primary">
                <span class="glyphicon glyphicon-floppy-disk"></span> Tambah Baru
            </button> 
        @else
            <button type="submit" class="btn btn-primary">
                <span class="glyphicon glyphicon-floppy-disk"></span> Simpan Perubahan
            </button> 
        @endif

        <button type="reset" class="btn btn-danger">Reset</button>
    </div>
</div>