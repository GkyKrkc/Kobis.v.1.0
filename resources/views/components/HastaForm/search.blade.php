
<!--<input class="form-control" type="text" name="key" placeholder="$placeholder" required/>->
<!-- Search Form -->
<div class="form-group {{$errors->has($name) ? 'has-error':null}}">

    {{ Form::text($name, array_merge(['class' => 'form-control'])) }}
    @if($errors->has($name))
        <span class="help-block">
            <strong>{{$errors->first($name)}}</strong>
        </span>
    @endif
</div>
<!-- Search Field -->