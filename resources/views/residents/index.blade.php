@extends('layouts.app')

@section('content')
<!-- Page JS Plugins CSS -->
<link rel="stylesheet" href="{{ asset('js/plugins/datatables-bs5/css/dataTables.bootstrap5.min.css') }}">
<link rel="stylesheet" href="{{ asset('js/plugins/datatables-buttons-bs5/css/buttons.bootstrap5.min.css') }}">
<link rel="stylesheet" href="{{ asset('js/plugins/datatables-responsive-bs5/css/responsive.bootstrap5.min.css') }}">
<div class="py-6">
    <!-- Page Content -->
    <div class="content">
        <div class="d-flex justify-content-end pb-2">
            <a href="{{ route('residents.create') }}" class="btn btn-primary"><i class="fa fa-add"></i>&nbsp;Create</a>
        </div>

        <!-- Dynamic Table with Export Buttons -->
        <div class="block block-rounded">
        <div class="block-header block-header-default">
            <h3 class="block-title">
            Resident Masterlist
            </h3>
        </div>
        <div class="block-content block-content-full">
        
            <!-- DataTables init on table by adding .js-dataTable-buttons class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
            <table class="table table-bordered table-striped table-vcenter js-dataTable-buttons">
            <input type="text" name="custom_search" class="form-control" id="custom_search" placeholder="Search items...">
            <thead>
                <tr>
                <th class="text-center" style="width: 80px;"></th>
                <th>Name</th>
                <th class="d-none d-sm-table-cell" style="width: 10%;">Birth Date</th>
                <th class="d-none d-sm-table-cell" style="width: 10%;">Action</th>
                </tr>
            </thead>
            </table>
        </div>
        </div>
        <!-- END Dynamic Table with Export Buttons -->

    </div>
    <!-- END Page Content -->
</div>

<!-- jQuery (required for DataTables plugin) -->
<script src="{{ asset('js/lib/jquery.min.js') }}"></script>

<!-- Page JS Plugins -->
<script src="{{ asset('js/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('js/plugins/datatables-bs5/js/dataTables.bootstrap5.min.js') }}"></script>
<script src="{{ asset('js/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('js/plugins/datatables-responsive-bs5/js/responsive.bootstrap5.min.js') }}"></script>
<script src="{{ asset('js/plugins/datatables-buttons/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('js/plugins/datatables-buttons-bs5/js/buttons.bootstrap5.min.js') }}"></script>
<script src="{{ asset('js/plugins/datatables-buttons-jszip/jszip.min.js') }}"></script>
<script src="{{ asset('js/plugins/datatables-buttons-pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ asset('js/plugins/datatables-buttons-pdfmake/vfs_fonts.js') }}"></script>
<script src="{{ asset('js/plugins/datatables-buttons/buttons.print.min.js') }}"></script>
<script src="{{ asset('js/plugins/datatables-buttons/buttons.html5.min.js') }}"></script>

<!-- Page JS Code -->
<script src="{{ asset('js/pages/be_tables_datatables.min.js') }}"></script>
@endsection