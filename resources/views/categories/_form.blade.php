<div class="form-group {{$errors->has('CategoryName')?'has-error has-feedback' : ''}}">
    <label class="col-md-2 control-label" for="CategoryName">Category Name</label>
    <div class="col-md-4">
        <input type="text" class="form-control" id="CategoryName" name="CategoryName" value="{{ old('CategoryName') ? old('CategoryName'):(isset($categories->CategoryName) ? $categories->CategoryName : '') }}">
		<?php echo $errors->first('CategoryName','<span class="glyphicon glyphicon-remove form-control-feedback"></span><span class="help-block">:message</span>'); ?>
    </div>
</div>

<div class="form-group {{$errors->has('Description')?'has-error has-feedback' : ''}}">
    <label class="col-md-2 control-label" for="Description">Description</label>
    <div class="col-md-4">
        <input type="text" class="form-control" id="Description" name="Description" value="{{ old('Description') ? old('Description'):(isset($categories->Description) ? $categories->Description : '') }}">
		<?php echo $errors->first('Description','<span class="glyphicon glyphicon-remove form-control-feedback"></span><span class="help-block">:message</span>'); ?>
    </div>
</div>

<div class="form-group {{$errors->has('Picture')?'has-error has-feedback' : ''}}">
    <label class="col-md-2 control-label" for="Picture">Picture</label>
    <div class="col-md-4">
        <input type="file" class="form-control" id="Picture" name="Picture" value="{{old('Picture') ? old('Picture'): (isset($categories->Picture) ? $categories->Picture : '') }}">
		<?php echo $errors->first('Picture','<span class="glyphicon glyphicon-remove form-control-feedback"></span><span class="help-block">:message</span>'); ?>
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-2 col-md-6">
        @if (strpos(URL::current(), 'categories/create') !== false)
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