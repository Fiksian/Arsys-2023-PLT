<div>
    @foreach($events as $index => $event)
        {{$index+1}}. {{$event->Event_Name}}
        <br>
    @endforeach
</div>
