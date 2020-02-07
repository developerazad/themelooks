@extends('admin.app')

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">

                <div class="box">
                    <div class="box-header">

                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Sl</th>
                                    <th>Doctor Name</th>
                                    <th>Patient Name</th>
                                    <th>Slot date time</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($appointments as $key => $row)
                                <tr>
                                    <td>{{ ++$key }}</td>
                                    <td>{{ $row->doctor_name }}</td>
                                    <td>{{ $row->patient_name }}</td>
                                    <td>{{ $row->date }} {{ date('H:i', strtotime($row->time)) }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>Sl</th>
                                <th>Doctor Name</th>
                                <th>Total Appointment</th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>{{ $maxAppointments->doctor_name }}</td>
                                    <td>{{ $maxAppointments->total_appointment }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>Sl</th>
                                <th>Doctor Name</th>
                                <th>Total Duration</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($durations as $key => $row)
                                <tr>
                                    <td>{{ ++$key }}</td>
                                    <td>{{ $row->doctor_name }}</td>
                                    <td>{{ $row->total_duration }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->



@endsection
