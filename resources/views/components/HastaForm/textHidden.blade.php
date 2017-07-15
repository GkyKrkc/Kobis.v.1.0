    {{ Form::hidden($name, $value, array_merge(['class' => 'form-control'])) }}
    @if($errors->has($name))
        <span class="help-block">
            <strong>{{$errors->first($name)}}</strong>
        </span>
        @endif
