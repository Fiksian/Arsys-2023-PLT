<div>
    @foreach($events as $index => $event)
        {{$index+1}}. {{$event->Draft_Deadline}} 
        <br>
    @endforeach
</div>
