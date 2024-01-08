<?php

namespace App\Http\Controllers;

use App\Models\ResidentProfile;
use Illuminate\Http\Request;

class ResidentProfileController extends Controller
{
    public function index()
    {
        return view('residents.index');
    }

    public function create()
    {
        return view('residents.create');
    }

    public function show($id)
    {
        $resident = ResidentProfile::findOrFail($id);

        return view('residents.show', [
            'resident' => $resident
        ]);
    }

    public function residentDatatables(Request $request)
    {
        $draw = $request->get('draw');
        $start = $request->get("start");
        $rowperpage = $request->get("length"); // Rows display per page

        $columnIndex_arr = $request->get('order');
        $columnName_arr = $request->get('columns');
        $order_arr = $request->get('order');
        $search_arr = $request->get('search');

        $columnIndex = $columnIndex_arr[0]['column']; // Column index
        $columnName = $columnName_arr[$columnIndex]['data'];
        $columnName2 = ''; // Column name
        $columnSortOrder = $order_arr[0]['dir']; // asc or desc
        $searchValue = $search_arr['value']; // Search value


        if ($columnName == 'name') {
            $columnName = 'first_name';
            $columnName2 = 'last_name';
        }

        // Total records
        $totalRecords = ResidentProfile::select('count(*) as allcount')->count();

        $totalRecordswithFilter = ResidentProfile::select('count(*) as allcount');

        if ($request->get('custom_search') != '' && strlen($request->custom_search) <= 3) {
            $totalRecordswithFilter = $totalRecordswithFilter->whereRaw("concat(resident_profiles.first_name, ' ', resident_profiles.last_name) like '%" . $request->get('custom_search') . "%' ");
        }

        $totalRecordswithFilter = $totalRecordswithFilter->count();

        // Fetch records
        if ($columnName2 != '') {
            $records = ResidentProfile::orderBy($columnName, $columnSortOrder)
            ->orderBy($columnName2, $columnSortOrder)
            ->select('resident_profiles.*')
            ->skip($start)
            ->take($rowperpage);
        } else {
            $records = ResidentProfile::orderBy($columnName, $columnSortOrder)
            ->select('resident_profiles.*')
            ->skip($start)
            ->take($rowperpage);
        }

        if ($request->get('custom_search') != '') {
            $records = $records->whereRaw("concat(resident_profiles.first_name, ' ', resident_profiles.last_name) like '%" . $request->get('custom_search') . "%' ");
        }

        $data_arr = array();
        foreach ($records->get() as $record) {
            $data_arr[] = array(
                "id" => $record->id,
                "profile_picture" => $record->profile_picture,
                "name" => $record->full_name,
                "birth_date" => date('F d, Y', strtotime($record->birth_date))
            );
        }

        $response = array(
            "draw" => intval($draw),
            "iTotalRecords" => $totalRecords,
            "iTotalDisplayRecords" => $totalRecordswithFilter,
            "aaData" => $data_arr
        );

        return json_encode($response);
    }
}
