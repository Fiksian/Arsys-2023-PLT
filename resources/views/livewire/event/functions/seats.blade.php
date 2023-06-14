<div>
    @foreach($events as $index => $event)
        {{$index+1}}. {{$event->Seats}} 
        <br>
    @endforeach
</div>
