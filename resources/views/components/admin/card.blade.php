
<div {{$attributes->merge(['lang'=>'ka'])->class("card card-text-$color card-bg-$bgColor")}}>
    @isset($title)
    <div {{$title->attributes->class("card-header")}} >{{$title}}</div>
    @endisset
    @if($slot->isEmpty())
        Default Content
    @else
        {{$slot}}
    @endif
    @isset($footer)
    <div class="card-footer">
        {{$footer}}
    </div>
    @endisset
</div>