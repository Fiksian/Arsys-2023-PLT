<div class="card">
    <div class="row">
        <div class="col-sm-2">
            <div class="card-body bg-primary text-dark">
                Event Name
            </div>
            <div class="card-body">
                @livewire('event.functions.lists')
            </div>
        </div>
        <div class="col-sm-2">
            <div class="card-body bg-primary text-dark">
                Event Date
            </div>
            <div class="card-body">
                @livewire('event.functions.event-date')
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card-body bg-primary text-dark">
                Application Deadline
            </div>
            <div class="card-body">
                @livewire('event.functions.application-deadline')
            </div>
        </div>
        <div class="col-sm-2">
            <div class="card-body bg-primary text-dark">
                Draft Deadline
            </div>
            <div class="card-body">
                @livewire('event.functions.draft-deadline')
            </div>
        </div>
         <div class="col-sm-2">
            <div class="card-body bg-primary text-dark">
                Seats
            </div>
            <div class="card-body">
                @livewire('event.functions.seats')
            </div>
        </div>
    </div>
</div>