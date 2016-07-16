<div class="form-group {{$errors->has('CustomerID')?'has-error has-feedback' : ''}}">
    <label class="col-md-2 control-label" for="CustomerID">Customer ID</label>
    <div class="col-md-4">
        <input type="text" class="form-control" id="CustomerID" name="CustomerID" value="{{ old('CustomerID') ? old('CustomerID'):(isset($customers->CustomerID) ? $customers->CustomerID : '') }}" >
		<?php echo $errors->first('CustomerID','<span class="glyphicon glyphicon-remove form-control-feedback"></span><span class="help-block">:message</span>'); ?>
	</div>
</div>

<div class="form-group {{$errors->has('CompanyName')?'has-error has-feedback' : ''}}">
    <label class="col-md-2 control-label" for="CompanyName">Company Name</label>
    <div class="col-md-4">
		<div class="input-group">
			<span class="input-group-addon">PT.</span>
			<input type="text" class="form-control" id="CompanyName" name="CompanyName" value="{{ old('CompanyName') ? old('CompanyName'):(isset($customers->CompanyName) ? $customers->CompanyName : '') }}">
		</div>
		<?php echo $errors->first('CompanyName','<span class="glyphicon glyphicon-remove form-control-feedback"></span><span class="help-block">:message</span>'); ?>
    </div>
</div>

<div class="form-group {{$errors->has('ContactName')?'has-error has-feedback' : ''}}">
    <label class="col-md-2 control-label" for="ContactName">Contact Name</label>
    <div class="col-md-4">
        <input type="text" class="form-control" id="ContactName" name="ContactName" value="{{ old('ContactName') ? old('ContactName'):(isset($customers->ContactName) ? $customers->ContactName : '') }}">
		<?php echo $errors->first('ContactName','<span class="glyphicon glyphicon-remove form-control-feedback"></span><span class="help-block">:message</span>'); ?>
    </div>
</div>

<div class="form-group {{$errors->has('ContactTitle')?'has-error has-feedback' : ''}}">
    <label class="col-md-2 control-label" for="ContactTitle">Contact Title</label>
    <div class="col-md-4">
        <input type="text" class="form-control" id="ContactTitle" name="ContactTitle" value="{{ old('ContactTitle') ? old('ContactTitle'):(isset($customers->ContactTitle) ? $customers->ContactTitle : '') }}">
		<?php echo $errors->first('ContactTitle','<span class="glyphicon glyphicon-remove form-control-feedback"></span><span class="help-block">:message</span>'); ?>
    </div>
</div>

<div class="form-group {{$errors->has('Address')?'has-error has-feedback' : ''}}">
    <label class="col-md-2 control-label" for="Address">Address</label>
    <div class="col-md-4">
        <input type="text" class="form-control" id="Address" name="Address" value="{{ old('Address') ? old('Address'):(isset($customers->Address) ? $customers->Address : '') }}">
		<?php echo $errors->first('Address','<span class="glyphicon glyphicon-remove form-control-feedback"></span><span class="help-block">:message</span>'); ?>
    </div>
</div>

<div class="form-group {{$errors->has('City')?'has-error has-feedback' : ''}}">
    <label class="col-md-2 control-label" for="City">City</label>
    <div class="col-md-4">
        <input type="text" class="form-control" id="City" name="City" value="{{ old('City') ? old('City'):(isset($customers->City) ? $customers->City : '') }}">
		<?php echo $errors->first('City','<span class="glyphicon glyphicon-remove form-control-feedback"></span><span class="help-block">:message</span>'); ?>
    </div>
</div>

<div class="form-group {{$errors->has('Region')?'has-error has-feedback' : ''}}">
    <label class="col-md-2 control-label" for="Region">Region</label>
    <div class="col-md-4">
        <input type="text" class="form-control" id="Region" name="Region" value="{{ old('Region') ? old('Region'):(isset($customers->Region) ? $customers->Region : '') }}">
		<?php echo $errors->first('Region','<span class="glyphicon glyphicon-remove form-control-feedback"></span><span class="help-block">:message</span>'); ?>
    </div>
</div>

<div class="form-group {{$errors->has('PostalCode')?'has-error has-feedback' : ''}}">
    <label class="col-md-2 control-label" for="PostalCode">Postal Code</label>
    <div class="col-md-4">
        <input type="text" class="form-control" id="PostalCode" name="PostalCode" value="{{ old('PostalCode') ? old('PostalCode'):(isset($customers->PostalCode) ? $customers->PostalCode : '') }}">
		<?php echo $errors->first('PostalCode','<span class="glyphicon glyphicon-remove form-control-feedback"></span><span class="help-block">:message</span>'); ?>
    </div>
</div>

<div class="form-group {{$errors->has('Country')?'has-error has-feedback' : ''}}">
    <label class="col-md-2 control-label" for="Country">Country</label>
    <div class="col-md-4">
        <input type="text" class="form-control" id="Country" name="Country" value="{{ old('Country') ? old('Country'):(isset($customers->Country) ? $customers->Country : '') }}">
		<?php echo $errors->first('Country','<span class="glyphicon glyphicon-remove form-control-feedback"></span><span class="help-block">:message</span>'); ?>
    </div>
</div>

<div class="form-group {{$errors->has('Phone')?'has-error has-feedback' : ''}}">
    <label class="col-md-2 control-label" for="Phone">Phone</label>
    <div class="col-md-4">
        <input type="text" class="form-control" id="Phone" name="Phone" value="{{ old('Phone') ? old('Phone'):(isset($customers->Phone) ? $customers->Phone : '') }}">
		<?php echo $errors->first('Phone','<span class="glyphicon glyphicon-remove form-control-feedback"></span><span class="help-block">:message</span>'); ?>
    </div>
</div>

<div class="form-group {{$errors->has('Fax')?'has-error has-feedback' : ''}}">
    <label class="col-md-2 control-label" for="Fax">Fax</label>
    <div class="col-md-4">
        <input type="text" class="form-control" id="Fax" name="Fax" value="{{ old('Fax') ? old('Fax'):(isset($customers->Fax) ? $customers->Fax : '') }}">
		<?php echo $errors->first('Fax','<span class="glyphicon glyphicon-remove form-control-feedback"></span><span class="help-block">:message</span>'); ?>
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-2 col-md-6">
        @if (strpos(URL::current(), 'customers/create') !== false)
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