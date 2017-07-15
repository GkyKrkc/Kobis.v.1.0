
<div class="form-group {{$errors->has($name) ? 'has-error':null}}">
    {{ Form::label($aciklama, null, ['class' => 'control-label']) }}
    {{ Form::file($name, array_merge(['class' => 'help-block','multiple'=>true])) }}
    @if($errors->has($name))
        <span class="help-block">
            <strong>{{$errors->first($name)}}</strong>
        </span>
    @endif
</div>

