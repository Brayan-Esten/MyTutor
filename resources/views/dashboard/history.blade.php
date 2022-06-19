@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Booking History</h1>
    </div>

    <div class="table-responsive col-lg-12 mt-5">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Subject</th>
                    <th scope="col">Level</th>
                    <th scope="col">Tutor</th>
                    <th scope="col">Date</th>
                    <th scope="col">Time</th>
                    <th scope="col">Price</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $row)
                    <tr>
                        <td>
                            {{ $loop->iteration }}
                        </td>
                        <td style="text-transform: capitalize">
                            {{ $row->tutor->subject->field->name }}
                        </td>
                        <td style="text-transform: capitalize">
                            {{ $row->tutor->subject->edulvl->level }}
                        </td>
                        <td>
                            {{ $row->tutor->name }}
                        </td>
                        <td>
                            {{ date('F jS, Y', strtotime($row->date)) }}
                        </td>
                        <td>
                            {{ $row->start_time . ':00 - ' . $row->end_time . ':00 WIB' }}
                        </td>
                        <td class="text-danger">
                            {{ '- IDR ' . $row->price . 'K' }}
                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
