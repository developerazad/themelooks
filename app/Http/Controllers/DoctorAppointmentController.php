<?php

namespace App\Http\Controllers;

use App\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DoctorAppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $header = [
            'title'     => 'Doctor',
            'pageTitle' => 'Doctor Appointment List',
        ];
        $appointments    = DB::table('appointments as app')
                            ->select('app.patient_name', 'doc.doctor_name', 's.date', 's.time')
                            ->leftJoin('doctors as doc', 'app.doctor_id', '=', 'doc.id')
                            ->leftJoin('slots as s', 'app.slot_id', '=', 's.id')
                            ->where('doc.status','=', 1)
                            ->whereMonth('s.date', '10')
                            ->orderBy('s.date', 'asc')
                            ->get();

        $maxAppointments = DB::table('appointments as app')
                            ->select('doc.doctor_name', DB::raw('COUNT(app.doctor_id) as total_appointment'))
                            ->leftJoin('doctors as doc', 'app.doctor_id', '=', 'doc.id')
                            ->where('doc.status','=', 1)
                            ->groupBy('app.doctor_id')
                            ->groupBy('doc.doctor_name')
                            ->orderBy('total_appointment', 'desc')
                            ->first();

        $durations      = DB::table('appointments as app')
                            ->select('doc.doctor_name', DB::raw('SUM(s.duration) as total_duration'))
                            ->leftJoin('doctors as doc', 'app.doctor_id', '=', 'doc.id')
                            ->leftJoin('slots as s', 'app.slot_id', '=', 's.id')
                            ->where('doc.status','=', 1)
                            ->groupBy('doc.doctor_name')
                            ->orderBy('s.duration', 'desc')
                            ->get();

        return view('admin.layouts.doctors.index', compact('header','appointments', 'maxAppointments', 'durations'));
    }


}
