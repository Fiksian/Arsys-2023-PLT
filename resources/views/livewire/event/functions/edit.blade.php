<div>
    <div class="row">
        <div class="col-sm-12 text-right">
                <x-adminlte-button wire:click="$emitUp('eventEdit_Disable')" class="btn-xs" label="X" theme="danger" />
        </div>
    </div> 
        
    <div class="card">
        <div class="card-header">
            <b>Event</b> | Edit Event
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-4 text-right">
                Event_Name
                </div>
                <div class="col-sm-8">
                <x-adminlte-input wire:model="Event_Name" name="iLabel" placeholder="Add That Event Tittle"/>
                </div>
            </div> 
            <div class="row">
                <div class="col-sm-4 text-right">
                Seats
                </div>
                <div class="col-sm-8">
                    <x-adminlte-input wire:model="Seats" name="ilabel" placeholder="Insert description..."/>                </div>
                </div> 
            <div class="row">
                <div class="col-sm-12 text-right">
                    <x-adminlte-button wire:click="update" class="btn-sm" label="update" theme="success" icon="fas fa-save" />
                </div>
            </div> 
        </div>
        <div class="card-footer text-muted">
            @arsys<i>2023</i>
        </div>
    </div> 
</div>