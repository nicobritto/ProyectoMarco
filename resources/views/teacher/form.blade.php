<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('name') }}
            {{ Form::text('name', $teacher->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('specialization') }}
            {{ Form::text('specialization', $teacher->specialization, ['class' => 'form-control' . ($errors->has('specialization') ? ' is-invalid' : ''), 'placeholder' => 'Specialization']) }}
            {!! $errors->first('specialization', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('email') }}
            {{ Form::text('email', $teacher->email, ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''), 'placeholder' => 'Email']) }}
            {!! $errors->first('email', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('hireDate') }}
            {{ Form::text('hireDate', $teacher->hireDate, ['class' => 'form-control' . ($errors->has('hireDate') ? ' is-invalid' : ''), 'placeholder' => 'Hiredate']) }}
            {!! $errors->first('hireDate', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('rank') }}
            {{ Form::text('rank', $teacher->rank, ['class' => 'form-control' . ($errors->has('rank') ? ' is-invalid' : ''), 'placeholder' => 'Rank']) }}
            {!! $errors->first('rank', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>