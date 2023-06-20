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
                @foreach($Lists as $key => $item)
                    @php
                        $eventIds = is_array($item->event_id) ? $item->event_id : explode(',', $item->event_id);
                        $descriptions = [];
                        foreach ($eventIds as $eventId) {
                            $prefix = substr(trim($eventId), 0, 3);
                            switch ($prefix) {
                                case 'PRE':
                                    $descriptions[] = 'Pre-Defense';
                                    break;
                                case 'STE':
                                    $descriptions[] = 'EE Seminar';
                                    break;
                                case 'PUB':
                                    $descriptions[] = 'Final Defense';
                                    break;
                                default:
                                    $descriptions[] = 'Unknown Description';
                                    break;
                            }
                        }
                    @endphp
                    @if ($item->event_id === $search) <!-- Tambahkan kondisi ini -->
                    @endif
                    <tr>
                        <td>{{ $Lists->firstItem() + $key }}</td>
                        <td>
                            {{ $item->event_id }}
                            <ul>
                                <li>{{ implode(', ', $descriptions) }}</li>
                            </ul>
                        </td>
                        <td>{{ $item->application_deadline }}</td>
                        <td>{{ $item->draft_deadline }}</td>
                        <td>{{ $item->quota }}</td>
                    </tr>
                @endforeach
            </tbody>   
        </table>
        <div class="card-body">
            {{ $Lists->links() }}
        </div>
    </div>
</div>
