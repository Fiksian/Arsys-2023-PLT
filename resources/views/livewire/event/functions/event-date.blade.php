<div>
    @foreach($events as $index => $event)
        {{$index+1}}. {{$event->Event_Date}} 
        <br>
    @endforeach
</div>
