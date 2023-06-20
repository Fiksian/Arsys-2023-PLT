<div>
    <div class="row">
        <div class="col-sm-12 text-right">
                <x-adminlte-button wire:click="$emitUp('addEvent_Disable')" class="btn-xs" label="X" theme="danger" />
        </div>
    </div> 
        
    <div class="card">
        <div class="card-header">
            <b>Event</b> | Create Event
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-4 text-right">
                Nama Event
                </div>
                <div class="col-sm-8">
                <x-adminlte-input wire:model="event_id" name="iLabel" placeholder="Add That Event Tittle"/>
                </div>
            </div> 
            @section('plugins.TempusDominusBs4', true)

                <div class="row">
                    <div class="col-sm-4 text-right">
                    Application Deadline
                    </div>
                    
                    <div class="col-sm-8">
                        @php
                        $config = [
                            'format' => 'YYYY-MM-DD HH.mm',
                            'dayViewHeaderFormat' => 'MMM YYYY',
                            'minDate' => "js:moment().startOf('month')",
                            'maxDate' => "js:moment().endOf('month')",
                            'daysOfWeekDisabled' => [0, 6],
                        ];
                        @endphp
                        <x-adminlte-input-date wire:model="application_deadline" name="idSizeSm" igroup-size="sm"
                            :config="$config" placeholder="Choose a application date...">
                            <x-slot name="appendSlot">
                                <div class="input-group-text bg-dark">
                                    <i class="fas fa-calendar-day"></i>
                                </div>
                            </x-slot>
                        </x-adminlte-input-date>
                    </div>
                </div> 
            @section('plugins.TempusDominusBs4', true)   
                <div class="row">
                    <div class="col-sm-4 text-right">
                    Draft Deadline
                    </div>
                    
                    <div class="col-sm-8">
                        @php
                        $config = [
                            'format' => 'YYYY-MM-DD HH.mm',
                            'dayViewHeaderFormat' => 'MMM YYYY',
                            'minDate' => "js:moment().startOf('month')",
                            'maxDate' => "js:moment().endOf('month')",
                            'daysOfWeekDisabled' => [0, 6],
                        ];
                        @endphp
                        <x-adminlte-input-date wire:model="draft_deadline" name="idSizeSm" igroup-size="sm"
                            :config="$config" placeholder="Choose a draft date...">
                            <x-slot name="appendSlot">
                                <div class="input-group-text bg-dark">
                                    <i class="fas fa-calendar-day"></i>
                                </div>
                            </x-slot>
                        </x-adminlte-input-date>
                    </div>
                </div> 
            
            <div class="row">
                <div class="col-sm-4 text-right">
                Seats
                </div>
                <div class="col-sm-8">
                    <x-adminlte-input wire:model="quota" name="ilabel" placeholder="Insert description..."/>
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
