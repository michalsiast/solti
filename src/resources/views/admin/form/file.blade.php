{{--@dump($errors)--}}
<div class="form-group">
    <label for="{{$model.'_'.$field['name']}}">{{__($field['label'])}}</label>

    <input id="{{$model.'_'.$field['name']}}" name="{{$model}}[{{$field['name']}}]" type="file" value="{{old($model.'.'.$field['name']) ?? $field['value']}}"
           class="form-control {{$field['class']}} {{$errors->get($model.'.'.$field['name']) ? 'is-invalid' : ''}}" placeholder="{{__($field['label'])}}"
    @foreach($field['rules'] as $ruleName=>$ruleValue) {{--{{$ruleName}}="{{$ruleValue}}"--}} @endforeach
    @foreach($field['attrs'] as $attr=>$value){{$attr}}="{{$value == 1 ? $attr : $value}}"@endforeach
    >

    @if($errors->has($model.'.'.$field['name']))
        <div class="invalid-feedback">
            {{$errors->first($model.'.'.$field['name'])}}
        </div>
    @endif
</div>
