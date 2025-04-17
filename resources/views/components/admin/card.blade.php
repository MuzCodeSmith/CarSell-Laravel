<div>
    @if(empty($title))
        Default Title
    @else    
        <h1 class="card-header" >{{$title}}</h1>
    @endif

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