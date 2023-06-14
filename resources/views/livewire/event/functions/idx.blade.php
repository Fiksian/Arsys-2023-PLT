<div>
<br>
    @if($addEvent != true)
    <div class='row'>
        <div class='col-sm-12 text-right'>
        <x-adminlte-button wire:click="addEvent_Enable" class="btn-sm" label="Add Event" theme="success" icon="fas fa-adjust"/>
        </div>
    </div>
    @else
        @livewire('event.functions.add')
    @endif
    <div class='row'>
        <div class='col-sm-12 text-right'>
            @if($editEnable == true)
                @livewire('event.functions.edit', ['eventId' => $eventId])
            @endif
        </div>    
    </div>
</div>
<br>
<div>
    @livewire('event.content')
</div>
<br>


