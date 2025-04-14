<x-layout>
  <div class="mt-5 pt-5">
     <x-slot name="title">Log</x-slot>
     <x-slot name="header">Log</x-slot>

    <div class="container">
        <h1>Log</h1>
        <div style="overflow-x: auto;">
            <table class="table table-striped">
                <thead>
                <tr>
                  <th>#</th>
                  
                  <th>IP Address</th>
                  <th>User Agent</th>
                  <th>URL</th>
                  <th>Method</th>
                  <th>Headers</th>
                  <th>Payload</th>
                  <th>Created At</th>
                  <th>Updated At</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($logs as $index => $log)
                  <tr>
                  <td>{{ $index + 1 }}</td>

                  <td>{{ $log->ip_address }}</td>
                  <td>{{ $log->user_agent }}</td>
                  <td>{{ $log->url }}</td>
                  <td>{{ $log->method }}</td>
                  <td>{{ $log->headers }}</td>
                  <td>{{ $log->payload ?? 'N/A' }}</td>
                  <td>{{ $log->created_at }}</td>
                  <td>{{ $log->updated_at }}</td>
                  </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        @if ($logs->isNotEmpty())
          <div class="my-5">
            <p>Note: This log is for debugging purposes only. It may contain sensitive information.</p>
            <a class="text-danger" href="clear-log" onclick="return confirm('Are you sure you want to clear the log?')"><strong>CLEAR LOG.</strong></a>
          </div>
        @endif
    </div>
  </div>
</x-layout>
