@extends('layouts.app')

@section('content')
<!-- Page JS Plugins CSS -->
<link rel="stylesheet" href="{{ asset('js/plugins/datatables-bs5/css/dataTables.bootstrap5.min.css') }}">
<link rel="stylesheet" href="{{ asset('js/plugins/datatables-buttons-bs5/css/buttons.bootstrap5.min.css') }}">
<link rel="stylesheet" href="{{ asset('js/plugins/datatables-responsive-bs5/css/responsive.bootstrap5.min.css') }}">
<div class="py-5">
<button type="button" class="btn btn-alt-primary push" data-bs-toggle="modal" data-bs-target="#modal-default-slideup">Default</button>

    <!-- Page Content -->
    <div class="content">
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
            <thead>
                <tr>
                <th class="text-center" style="width: 80px;"></th>
                <th>Name</th>
                <th class="d-none d-sm-table-cell" style="width: 10%;">Birth Date</th>
                <th class="d-none d-sm-table-cell" style="width: 15%;">Gender</th>
                <th style="width: 15%;">Purok</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <td class="text-center"><img class="img-avatar img-avatar32" src="{{ asset('media/avatars/avatar10.jpg') }}" alt=""></td>
                <td class="fw-semibold">
                    <a href="be_pages_generic_blank.html">Judy Ford</a>
                </td>
                <td class="d-none d-sm-table-cell">
                    client1<em class="text-muted">@example.com</em>
                </td>
                <td class="d-none d-sm-table-cell">
                    <span class="badge bg-primary">Personal</span>
                </td>
                <td>
                    <em class="text-muted">7 days ago</em>
                </td>
                </tr>
                <tr>
                <td class="text-center"><img class="img-avatar img-avatar32" src="{{ asset('media/avatars/avatar10.jpg') }}" alt=""></td>                <td class="fw-semibold">
                    <a href="be_pages_generic_blank.html">Danielle Jones</a>
                </td>
                <td class="d-none d-sm-table-cell">
                    client2<em class="text-muted">@example.com</em>
                </td>
                <td class="d-none d-sm-table-cell">
                    <span class="badge bg-info">Business</span>
                </td>
                <td>
                    <em class="text-muted">5 days ago</em>
                </td>
                </tr>
                <tr>
                <td class="text-center"><img class="img-avatar img-avatar32" src="{{ asset('media/avatars/avatar10.jpg') }}" alt=""></td>                <td class="fw-semibold">
                    <a href="be_pages_generic_blank.html">Barbara Scott</a>
                </td>
                <td class="d-none d-sm-table-cell">
                    client3<em class="text-muted">@example.com</em>
                </td>
                <td class="d-none d-sm-table-cell">
                    <span class="badge bg-primary">Personal</span>
                </td>
                <td>
                    <em class="text-muted">2 days ago</em>
                </td>
                </tr>
                <tr>
                <td class="text-center"><img class="img-avatar img-avatar32" src="{{ asset('media/avatars/avatar10.jpg') }}" alt=""></td>                <td class="fw-semibold">
                    <a href="be_pages_generic_blank.html">Amber Harvey</a>
                </td>
                <td class="d-none d-sm-table-cell">
                    client4<em class="text-muted">@example.com</em>
                </td>
                <td class="d-none d-sm-table-cell">
                    <span class="badge bg-warning">Trial</span>
                </td>
                <td>
                    <em class="text-muted">8 days ago</em>
                </td>
                </tr>
                <tr>
                <td class="text-center"><img class="img-avatar img-avatar32" src="{{ asset('media/avatars/avatar10.jpg') }}" alt=""></td>                <td class="fw-semibold">
                    <a href="be_pages_generic_blank.html">Helen Jacobs</a>
                </td>
                <td class="d-none d-sm-table-cell">
                    client5<em class="text-muted">@example.com</em>
                </td>
                <td class="d-none d-sm-table-cell">
                    <span class="badge bg-info">Business</span>
                </td>
                <td>
                    <em class="text-muted">4 days ago</em>
                </td>
                </tr>
                <tr>
                <td class="text-center"><img class="img-avatar img-avatar32" src="{{ asset('media/avatars/avatar10.jpg') }}" alt=""></td>                <td class="fw-semibold">
                    <a href="be_pages_generic_blank.html">Danielle Jones</a>
                </td>
                <td class="d-none d-sm-table-cell">
                    client6<em class="text-muted">@example.com</em>
                </td>
                <td class="d-none d-sm-table-cell">
                    <span class="badge bg-info">Business</span>
                </td>
                <td>
                    <em class="text-muted">3 days ago</em>
                </td>
                </tr>
                <tr>
                <td class="text-center"><img class="img-avatar img-avatar32" src="{{ asset('media/avatars/avatar10.jpg') }}" alt=""></td>                <td class="fw-semibold">
                    <a href="be_pages_generic_blank.html">Ralph Murray</a>
                </td>
                <td class="d-none d-sm-table-cell">
                    client7<em class="text-muted">@example.com</em>
                </td>
                <td class="d-none d-sm-table-cell">
                    <span class="badge bg-info">Business</span>
                </td>
                <td>
                    <em class="text-muted">6 days ago</em>
                </td>
                </tr>
                <tr>
                <td class="text-center"><img class="img-avatar img-avatar32" src="{{ asset('media/avatars/avatar10.jpg') }}" alt=""></td>                <td class="fw-semibold">
                    <a href="be_pages_generic_blank.html">Andrea Gardner</a>
                </td>
                <td class="d-none d-sm-table-cell">
                    client8<em class="text-muted">@example.com</em>
                </td>
                <td class="d-none d-sm-table-cell">
                    <span class="badge bg-danger">Disabled</span>
                </td>
                <td>
                    <em class="text-muted">8 days ago</em>
                </td>
                </tr>
                <tr>
                <td class="text-center"><img class="img-avatar img-avatar32" src="{{ asset('media/avatars/avatar10.jpg') }}" alt=""></td>                <td class="fw-semibold">
                    <a href="be_pages_generic_blank.html">Brian Cruz</a>
                </td>
                <td class="d-none d-sm-table-cell">
                    client9<em class="text-muted">@example.com</em>
                </td>
                <td class="d-none d-sm-table-cell">
                    <span class="badge bg-info">Business</span>
                </td>
                <td>
                    <em class="text-muted">4 days ago</em>
                </td>
                </tr>
                <tr>
                <td class="text-center"><img class="img-avatar img-avatar32" src="{{ asset('media/avatars/avatar10.jpg') }}" alt=""></td>
                <td class="fw-semibold">
                    <a href="be_pages_generic_blank.html">Sara Fields</a>
                </td>
                <td class="d-none d-sm-table-cell">
                    client10<em class="text-muted">@example.com</em>
                </td>
                <td class="d-none d-sm-table-cell">
                    <span class="badge bg-warning">Trial</span>
                </td>
                <td>
                    <em class="text-muted">6 days ago</em>
                </td>
                </tr>
                <tr>
                <td class="text-center"><img class="img-avatar img-avatar32" src="{{ asset('media/avatars/avatar10.jpg') }}" alt=""></td>
                <td class="fw-semibold">
                    <a href="be_pages_generic_blank.html">Sara Fields</a>
                </td>
                <td class="d-none d-sm-table-cell">
                    client11<em class="text-muted">@example.com</em>
                </td>
                <td class="d-none d-sm-table-cell">
                    <span class="badge bg-info">Business</span>
                </td>
                <td>
                    <em class="text-muted">9 days ago</em>
                </td>
                </tr>
                <tr>
                <td class="text-center"><img class="img-avatar img-avatar32" src="{{ asset('media/avatars/avatar10.jpg') }}" alt=""></td>
                <td class="fw-semibold">
                    <a href="be_pages_generic_blank.html">Brian Cruz</a>
                </td>
                <td class="d-none d-sm-table-cell">
                    client12<em class="text-muted">@example.com</em>
                </td>
                <td class="d-none d-sm-table-cell">
                    <span class="badge bg-info">Business</span>
                </td>
                <td>
                    <em class="text-muted">5 days ago</em>
                </td>
                </tr>
                <tr>
                <td class="text-center"><img class="img-avatar img-avatar32" src="{{ asset('media/avatars/avatar10.jpg') }}" alt=""></td>
                <td class="fw-semibold">
                    <a href="be_pages_generic_blank.html">Marie Duncan</a>
                </td>
                <td class="d-none d-sm-table-cell">
                    client13<em class="text-muted">@example.com</em>
                </td>
                <td class="d-none d-sm-table-cell">
                    <span class="badge bg-danger">Disabled</span>
                </td>
                <td>
                    <em class="text-muted">10 days ago</em>
                </td>
                </tr>
                <tr>
                <td class="text-center"><img class="img-avatar img-avatar32" src="{{ asset('media/avatars/avatar10.jpg') }}" alt=""></td>
                <td class="fw-semibold">
                    <a href="be_pages_generic_blank.html">Barbara Scott</a>
                </td>
                <td class="d-none d-sm-table-cell">
                    client14<em class="text-muted">@example.com</em>
                </td>
                <td class="d-none d-sm-table-cell">
                    <span class="badge bg-primary">Personal</span>
                </td>
                <td>
                    <em class="text-muted">9 days ago</em>
                </td>
                </tr>
                <tr>
                <td class="text-center"><img class="img-avatar img-avatar32" src="{{ asset('media/avatars/avatar10.jpg') }}" alt=""></td>
                <td class="fw-semibold">
                    <a href="be_pages_generic_blank.html">Marie Duncan</a>
                </td>
                <td class="d-none d-sm-table-cell">
                    client15<em class="text-muted">@example.com</em>
                </td>
                <td class="d-none d-sm-table-cell">
                    <span class="badge bg-danger">Disabled</span>
                </td>
                <td>
                    <em class="text-muted">8 days ago</em>
                </td>
                </tr>
                <tr>
                <td class="text-center"><img class="img-avatar img-avatar32" src="{{ asset('media/avatars/avatar10.jpg') }}" alt=""></td>
                <td class="fw-semibold">
                    <a href="be_pages_generic_blank.html">Barbara Scott</a>
                </td>
                <td class="d-none d-sm-table-cell">
                    client16<em class="text-muted">@example.com</em>
                </td>
                <td class="d-none d-sm-table-cell">
                    <span class="badge bg-primary">Personal</span>
                </td>
                <td>
                    <em class="text-muted">9 days ago</em>
                </td>
                </tr>
                <tr>
                <td class="text-center"><img class="img-avatar img-avatar32" src="{{ asset('media/avatars/avatar10.jpg') }}" alt=""></td>
                <td class="fw-semibold">
                    <a href="be_pages_generic_blank.html">Andrea Gardner</a>
                </td>
                <td class="d-none d-sm-table-cell">
                    client17<em class="text-muted">@example.com</em>
                </td>
                <td class="d-none d-sm-table-cell">
                    <span class="badge bg-info">Business</span>
                </td>
                <td>
                    <em class="text-muted">7 days ago</em>
                </td>
                </tr>
                <tr>
                <td class="text-center"><img class="img-avatar img-avatar32" src="{{ asset('media/avatars/avatar10.jpg') }}" alt=""></td>
                <td class="fw-semibold">
                    <a href="be_pages_generic_blank.html">Laura Carr</a>
                </td>
                <td class="d-none d-sm-table-cell">
                    client18<em class="text-muted">@example.com</em>
                </td>
                <td class="d-none d-sm-table-cell">
                    <span class="badge bg-success">VIP</span>
                </td>
                <td>
                    <em class="text-muted">2 days ago</em>
                </td>
                </tr>
                <tr>
                <td class="text-center"><img class="img-avatar img-avatar32" src="{{ asset('media/avatars/avatar10.jpg') }}" alt=""></td>
                <td class="fw-semibold">
                    <a href="be_pages_generic_blank.html">Susan Day</a>
                </td>
                <td class="d-none d-sm-table-cell">
                    client19<em class="text-muted">@example.com</em>
                </td>
                <td class="d-none d-sm-table-cell">
                    <span class="badge bg-danger">Disabled</span>
                </td>
                <td>
                    <em class="text-muted">8 days ago</em>
                </td>
                </tr>
                <tr>
                <td class="text-center"><img class="img-avatar img-avatar32" src="{{ asset('media/avatars/avatar10.jpg') }}" alt=""></td>
                <td class="fw-semibold">
                    <a href="be_pages_generic_blank.html">Sara Fields</a>
                </td>
                <td class="d-none d-sm-table-cell">
                    client20<em class="text-muted">@example.com</em>
                </td>
                <td class="d-none d-sm-table-cell">
                    <span class="badge bg-primary">Personal</span>
                </td>
                <td>
                    <em class="text-muted">6 days ago</em>
                </td>
                </tr>
            </tbody>
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