<div>
    <br>
    @if($addAnnouncement != true)
    <div class='row'>
        <div class='col-sm-12 text-right'>
        <x-adminlte-button wire:click="addAnnouncement_Enable" class="btn-sm" label="Add Announcement" theme="success" icon="fas fa-adjust"/>
        </div>
    </div>
    @else
        @livewire('plt.announcement.add')
    @endif
    <hr>

    <div class='row'>
        <div class='col-sm-12'>
            @if($editEnable == true)
                @livewire('plt.announcement.edit', ['announcementId' => $announcementId])
            @else
                 @livewire('plt.announcement.lists')
            @endif
        </div>
    </div>
</div>
