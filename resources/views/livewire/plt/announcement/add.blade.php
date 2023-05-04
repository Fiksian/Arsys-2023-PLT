<div>
    <div class="row">
        <div class="col-sm-12 text-right">
                <x-adminlte-button wire:click="$emitUp('addAnnouncement_Disable')" class="btn-xs" label="X" theme="danger" />
        </div>
    </div> 
        
    <div class="card">
        <div class="card-header">
            <b>Announcement</b> | Create Announcement
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-4 text-right">
                Title
                </div>
                <div class="col-sm-8">
                <x-adminlte-input wire:model="title" name="iLabel" placeholder="Add That Anouncement Tittle"/>
                </div>
            </div> 
            <div class="row">
                <div class="col-sm-4 text-right">
                Body
                </div>
                <div class="col-sm-8">
                    <x-adminlte-textarea wire:model="body" name="taBasic" placeholder="Insert description..."/>
                </div>
            </div> 
            <div class="row">
                <div class="col-sm-12 text-right">
                    <x-adminlte-button wire:click="save" class="btn-sm" label="Save" theme="success" icon="fas fa-save" />
                </div>
            </div> 
        </div>
        <div class="card-footer text-muted">
            @arsys<i>2023</i>
        </div>
    </div> 
</div>
