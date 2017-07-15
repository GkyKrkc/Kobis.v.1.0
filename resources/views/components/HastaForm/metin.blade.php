<div class="form-group {{$errors->has($name) ? 'has-error':null}}">
{!! Form::label($name,null)!!}
{!! Form::textarea($name, null, ['size' => '30x5','class'=>'form-control'])!!}
    @if($errors->has($name))
        <span class="help-block">
            <strong>{{$errors->first($name)}}</strong>
        </span>
    @endif
</div>