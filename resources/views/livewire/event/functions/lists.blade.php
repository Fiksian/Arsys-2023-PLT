<div class="card">
    <div class="card-body table-responsive">
        <table class="table table-light">
          <thead class="thead-light">
                <tr>
                    <th>No</th>
                    <th>Event Name</th>
                    <th>Application Deadline</th>
                    <th>Draft Deadline</th>
                    <th>Quota</th>
                </tr>
            </thead>
            <tbody>
                @foreach($Lists as $key=> $item)
                <tr>
                    <td>{{$Lists->firstItem() + $key}}</td>
                    <td>{{$item->event_id}}</td>
                    <td>{{$item->application_deadline}}</td>
                    <td>{{$item->draft_deadline}}</td>
                    <td>{{$item->quota}}</td>
                </tr>
                @endforeach
            </tbody>      
        </table>
        <div class="card-body">
            {{$Lists->links()}}
        </div>
    </div>
</div>