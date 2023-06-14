<div>
    @foreach($events as $index => $event)
        {{$index+1}}. {{$event->Application_Deadline}} 
        <br>
    @endforeach
</div>