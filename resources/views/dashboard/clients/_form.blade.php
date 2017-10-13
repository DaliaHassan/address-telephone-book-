<fieldset>
    <legend>City Info</legend>
    <div class="form-body">
        <div class="form-group">
            <label for="name" class="col-md-3 control-label">Name</label>
            <div class="col-md-6">
                {!! Form::text('name', old('name'), ['class' => 'form-control','required'=>'true']) !!}
                <div class="error">
                    <span style="color:red">
                        {{ $errors->first('name') }}
                    </span>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="name" class="col-md-3 control-label">Telephone</label>
            <div class="col-md-6">
                {!! Form::text('telephone', old('telephone'), ['class' => 'form-control','required'=>'true']) !!}
                <div class="error">
                    <span style="color:red">
                        {{ $errors->first('telephone') }}
                    </span>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="name" class="col-md-3 control-label">Address</label>
            <div class="col-md-6">
                {!! Form::text('address', old('address'), ['class' => 'form-control','required'=>'true']) !!}
                <div class="error">
                    <span style="color:red">
                        {{ $errors->first('address') }}
                    </span>
                </div>
            </div>
        </div>
    </div>
</fieldset>
