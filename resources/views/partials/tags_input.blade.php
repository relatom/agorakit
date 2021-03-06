
<div class="form-group">
    <label for="tags">{{trans('messages.tags')}}</label>

    <div class="small-help">
        <i class="fas fa-info-circle"></i>
        {{trans('messages.tags_help')}}
    </div>

    <div class="flex flex-wrap sm:grid sm:grid-cols-2 md:grid-cols-4 lg:grid-cols-5 my-4">

    @if (isset($selectedTags))
            @foreach ($selectedTags as $tag)
                <div class="mr-4" >
                    <input type=checkbox checked value="{{$tag->normalized}}" id="{{$tag->normalized}}"  name="tags[]"/>
                    <label for="{{$tag->normalized}}">
                    <span class="inline-block w-2 h-2 rounded-sm" style="background-color: {{$tag->color}}"></span>
                     {{$tag->name}}
                    </label>
                </div>
            @endforeach
    @endif


    @if (isset($allowedTags))
            @foreach ($allowedTags as $tag)
                @if (isset($selectedTags))
                    @unless ($selectedTags->contains($tag->name))
                        <div class="mr-4">
                            <input type="checkbox" value="{{$tag->normalized}}" name="tags[]" id="{{$tag->normalized}}"/>
                            <label for="{{$tag->normalized}}">
                            <span class="inline-block w-2 h-2 rounded-sm" style="background-color: {{$tag->color}}"></span>
                            {{$tag->name}}
                            </label>
                        </div>
                    @endunless
                @else 
                    <div class="mr-4">
                        <input type="checkbox" value="{{$tag->normalized}}" name="tags[]" id="{{$tag->normalized}}"/>
                        <label for="{{$tag->normalized}}">
                        <span class="inline-block w-2 h-2 rounded-sm" style="background-color: {{$tag->color}}"></span>
                        {{$tag->name}}
                        </label>
                    </div>
                @endif
            @endforeach
    @endif

    </div>


    @if ($newTagsAllowed)
        <label>
            {{trans('messages.new_tags')}} : 
        </label>
        <select class="form-control js-tags" name="tags[]" multiple="multiple"  data-tags="true">
        </select>
    @endif


</div>
