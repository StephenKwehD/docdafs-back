@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Your appointments ({{ $appointments->count() }})</div>

                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Doctor</th>
                                <th scope="col">Time</th>
                                <th scope="col">Date for</th>
                                <th scope="col">Created date</th>
                                <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($appointments as $key => $appointment)
                            <tr>
                                <th scope="row">{{ $key+1 }}</th>
                                <td>{{ $appointment->doctor->name }}</td>
                                <td>{{ $appointment->time }}</td>
                                <td>{{ $appointment->date }}</td>
                                <td>{{ $appointment->created_at }}</td>
                                <td>
                                    @if($appointment->status == 0)
                                    <div class="btn-group" role="group" aria-label="Appointment Actions">
                                        <div class="d-inline-block">
                                            <button class="btn btn-primary">Not visited</button>
                                        </div>
                                        <div class="d-inline-block ml-2">
                                            <button class="btn btn-danger">Cancel</button>
                                        </div>
                                    </div>
                                    @else
                                    <button class="btn btn-success">Checked</button>
                                    @endif
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="6">You have no appointments</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
