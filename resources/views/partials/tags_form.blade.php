
{{--
This form needs those variables to work

$tags->selected : an array of current tags
$tags->list : an array of available tags 
$tags->allow_new : true if new tags are allowed, false otherwise (false assumed)

--}}


<div class="form-group">
    <label for="tags">{{trans('messages.tags')}}</label>

    <div class="small-help">
        <i class="fas fa-info-circle"></i>
        {{trans('messages.tags_help')}}
    </div>


    <select class="form-control tags"
    name="tags[]"
    multiple="multiple"
    @if (isset($tags->allow_new) && $tags->allow_new) 
    data-tags="true" @endif>

    
        @if (isset($tags->current))
            @foreach ($tags->current as $tag)
                <option selected="selected" value="{{$tag}}">{{$tag}}</option>
            @endforeach
        @endif

        @if (isset($tags->list))
            @foreach ($tags->list as $tag)
                <option value="{{$tag}}">{{$tag}}</option>
            @endforeach
        @endif

    </select>


</div>
