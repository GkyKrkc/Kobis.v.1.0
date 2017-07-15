<div class="form-group {{$errors->has($name) ? 'has-error':null}}">
    {{ Form::label($name, null, ['class' => 'control-label']) }}
    {{ Form::file($name, $value, array_merge(['class' => 'form-control'],'id'=>'photo')) }}
    {{ Form::p($aciklama, array_merge(['class' => 'help-block'])) }}
    @if($errors->has($name))
        <span class="help-block">
            <strong>{{$errors->first($name)}}</strong>
        </span>
    @endif
</div>