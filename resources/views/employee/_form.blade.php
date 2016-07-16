<div class="form-group {{$errors->has('LastName')?'has-error has-feedback' : ''}}">
    <label class="col-md-2 control-label" for="LastName">Last Name</label>
    <div class="col-md-4">
        <input type="text" class="form-control" id="LastName" name="LastName" value="{{ old('LastName') ? old('LastName'):(isset($employee->LastName) ? $employee->LastName : '') }}">
		<?php echo $errors->first('LastName','<span class="glyphicon glyphicon-remove form-control-feedback"></span><span class="help-block">:message</span>'); ?>
    </div>
</div>

<div class="form-group {{$errors->has('FirstName')?'has-error has-feedback' : ''}}">
    <label class="col-md-2 control-label" for="FirstName">First Name</label>
    <div class="col-md-4">
        <input type="text" class="form-control" id="FirstName" name="FirstName" value="{{ old('FirstName') ? old('FirstName'):(isset($employee->FirstName) ? $employee->FirstName : '') }}">
		<?php echo $errors->first('FirstName','<span class="glyphicon glyphicon-remove form-control-feedback"></span><span class="help-block">:message</span>'); ?>
    </div>
</div>

<div class="form-group {{$errors->has('Title')?'has-error has-feedback' : ''}}">
    <label class="col-md-2 control-label" for="Title">Title</label>
    <div class="col-md-4">
        <input type="text" class="form-control" id="Title" name="Title" value="{{ old('Title') ? old('Title'):(isset($employee->Title) ? $employee->Title : '') }}">
		<?php echo $errors->first('Title','<span class="glyphicon glyphicon-remove form-control-feedback"></span><span class="help-block">:message</span>'); ?>
    </div>
</div>

<div class="form-group {{$errors->has('TitleOfCourtesy')?'has-error has-feedback' : ''}}">
    <label class="col-md-2 control-label" for="TitleOfCourtesy">Title Of Courtesy</label>
    <div class="col-md-4">
        <input type="text" class="form-control" id="TitleOfCourtesy" name="TitleOfCourtesy" value="{{ old('TitleOfCourtesy') ? old('TitleOfCourtesy'):(isset($employee->TitleOfCourtesy) ? $employee->TitleOfCourtesy : '') }}">
		<?php echo $errors->first('TitleOfCourtesy','<span class="glyphicon glyphicon-remove form-control-feedback"></span><span class="help-block">:message</span>'); ?>
    </div>
</div>

<div class="form-group {{$errors->has('BirthDate')?'has-error has-feedback' : ''}}">
    <label class="col-md-2 control-label" for="BirthDate">Birth Date</label>
    <div class="col-md-4">
        <input type="date" class="form-control" id="BirthDate" name="BirthDate" value="{{ old('BirthDate') ? old('BirthDate'):(isset($employee->BirthDate) ? $employee->BirthDate : '') }}">
		<?php echo $errors->first('BirthDate','<span class="glyphicon glyphicon-remove form-control-feedback"></span><span class="help-block">:message</span>'); ?>
    </div>
</div>

<div class="form-group {{$errors->has('HireDate')?'has-error has-feedback' : ''}}">
    <label class="col-md-2 control-label" for="HireDate">Hire Date</label>
    <div class="col-md-4">
        <input type="date" class="form-control" id="HireDate" name="HireDate" value="{{ old('HireDate') ? old('HireDate'):(isset($employee->HireDate) ? $employee->HireDate : '') }}">
		<?php echo $errors->first('HireDate','<span class="glyphicon glyphicon-remove form-control-feedback"></span><span class="help-block">:message</span>'); ?>
    </div>
</div>

<div class="form-group {{$errors->has('Address')?'has-error has-feedback' : ''}}">
    <label class="col-md-2 control-label" for="Address">Address</label>
    <div class="col-md-4">
        <input type="text" class="form-control" id="Address" name="Address" value="{{ old('Address') ? old('Address'):(isset($employee->Address) ? $employee->Address : '') }}">
		<?php echo $errors->first('Address','<span class="glyphicon glyphicon-remove form-control-feedback"></span><span class="help-block">:message</span>');?>
	</div>
</div>

<div class="form-group {{$errors->has('City')?'has-error has-feedback' : ''}}">
    <label class="col-md-2 control-label" for="City">City</label>
    <div class="col-md-4">
        <input type="text" class="form-control" id="City" name="City" value="{{ old('City') ? old('City'):(isset($employee->City) ? $employee->City : '') }}">
		<?php echo $errors->first('City','<span class="glyphicon glyphicon-remove form-control-feedback"></span><span class="help-block">:message</span>');?>
    </div>
</div>

<div class="form-group {{$errors->has('Region')?'has-error has-feedback' : ''}}">
    <label class="col-md-2 control-label" for="Region">Region</label>
    <div class="col-md-4">
        <input type="text" class="form-control" id="Region" name="Region" value="{{ old('Region') ? old('Region'):(isset($employee->Region) ? $employee->Region : '') }}">
		<?php echo $errors->first('Region','<span class="glyphicon glyphicon-remove form-control-feedback"></span><span class="help-block">:message</span>');?>
    </div>
</div>

<div class="form-group {{$errors->has('PostalCode')?'has-error has-feedback' : ''}}">
    <label class="col-md-2 control-label" for="PostalCode">Postal Code</label>
    <div class="col-md-4">
        <input type="text" class="form-control" id="PostalCode" name="PostalCode" value="{{ old('PostalCode') ? old('PostalCode'):(isset($employee->PostalCode) ? $employee->PostalCode : '') }}">
		<?php echo $errors->first('PostalCode','<span class="glyphicon glyphicon-remove form-control-feedback"></span><span class="help-block">:message</span>');?>
    </div>
</div>

<div class="form-group {{$errors->has('Country')?'has-error has-feedback' : ''}}">
    <label class="col-md-2 control-label" for="Country">Country</label>
    <div class="col-md-4">
        <input type="text" class="form-control" id="Country" name="Country" value="{{ old('Country') ? old('Country'):(isset($employee->Country) ? $employee->Country : '') }}">
		<?php echo $errors->first('Country','<span class="glyphicon glyphicon-remove form-control-feedback"></span><span class="help-block">:message</span>');?>
    </div>
</div>

<div class="form-group {{$errors->has('HomePhone')?'has-error has-feedback' : ''}}">
    <label class="col-md-2 control-label" for="HomePhone">Home Phone</label>
    <div class="col-md-4">
        <input type="text" class="form-control" id="HomePhone" name="HomePhone" value="{{ old('HomePhone') ? old('HomePhone'):(isset($employee->HomePhone) ? $employee->HomePhone : '') }}">
		<?php echo $errors->first('HomePhone','<span class="glyphicon glyphicon-remove form-control-feedback"></span><span class="help-block">:message</span>');?>
    </div>
</div>

<div class="form-group {{$errors->has('Extension')?'has-error has-feedback' : ''}}">
    <label class="col-md-2 control-label" for="Extension">Extension</label>
    <div class="col-md-4">
        <input type="text" class="form-control" id="Extension" name="Extension" value="{{ old('Extension') ? old('Extension'):(isset($employee->Extension) ? $employee->Extension : '') }}">
		<?php echo $errors->first('Extension','<span class="glyphicon glyphicon-remove form-control-feedback"></span><span class="help-block">:message</span>');?>
    </div>
</div>

<div class="form-group {{$errors->has('Photo')?'has-error has-feedback' : ''}}">
    <label class="col-md-2 control-label" for="Photo">Photo</label>
    <div class="col-md-4">
        <input type="file" class="form-control" id="Photo" name="Photo" value="{{ old('Photo') ? old('Photo'):(isset($employee->Photo) ? $employee->Photo : '') }}">
		<?php echo $errors->first('Photo','<span class="glyphicon glyphicon-remove form-control-feedback"></span><span class="help-block">:message</span>');?>
    </div>
</div>

<div class="form-group {{$errors->has('Notes')?'has-error has-feedback' : ''}}">
    <label class="col-md-2 control-label" for="Notes">Notes</label>
    <div class="col-md-4">
       <textarea class="form-control" id="Notes" name="Notes" rows="5">{{ old('Notes') ? old('Notes') : (isset($employee->Notes) ? $employee->Notes : '') }}</textarea>
    </div>
</div>

<div class="form-group {{$errors->has('ReportsTo')?'has-error has-feedback' : ''}}">
    <label class="col-md-2 control-label" for="ReportsTo">Reports To</label>
    <div class="col-md-4">
          <select class="form-control" id="ReportsTo" name="ReportsTo">
                    @foreach($employees as $emp)
                        <option value="{{ $emp->EmployeeID }}" {{ isset($employee) && 
                                                                  ($emp->EmployeeID == (old('ReportsTo') ? old('ReportsTo') : $employee->ReportsTo)) ? 'selected' : '' }}>
                            {{ $emp->FirstName }} {{ $emp->LastName }}, {{ $emp->TitleOfCourtesy }}
                        </option>
                    @endforeach
                </select>
		<?php echo $errors->first('ReportsTo','<span class="glyphicon glyphicon-remove form-control-feedback"></span><span class="help-block">:message</span>');?>
    </div>
</div>

<div class="form-group {{$errors->has('PhotoPath')?'has-error has-feedback' : ''}}">
    <label class="col-md-2 control-label" for="PhotoPath">Photo Path</label>
    <div class="col-md-4">
        <input type="text" class="form-control" id="PhotoPath" name="PhotoPath" value="{{ old('PhotoPath') ? old('PhotoPath'):(isset($employee->PhotoPath) ? $employee->PhotoPath : '') }}">
		<?php echo $errors->first('PhotoPath','<span class="glyphicon glyphicon-remove form-control-feedback"></span><span class="help-block">:message</span>');?>
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-2 col-md-6">
        @if (strpos(URL::current(), 'employee/create') !== false)
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