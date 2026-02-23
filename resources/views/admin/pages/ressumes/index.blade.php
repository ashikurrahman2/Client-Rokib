@extends('layouts.admin')

@section('title', 'Resume')

@section('admin_content')
<div class="pc-container">
    <div class="pc-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center justify-content-between">
                    <div class="col-sm-auto">
                        <div class="page-header-title">
                            <h5 class="mb-0">Resume</h5>
                        </div>
                    </div>
                    <div class="col-sm-auto">
                        <ul class="breadcrumb">
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addModal">+ Add New</button>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->

        <!-- [ Main Content ] start -->
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header table-card-header">
                        <h5>All Resume List</h5>
                    </div>
                    <div class="card-body">
                        <div class="dt-responsive table-responsive">
                            <table class="table table-striped table-bordered nowrap table-sm ytable">
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Name</th>
                                        <th>Designation</th>
                                        <th>Current Designation</th>
                                        <th>Total Experience</th>
                                        <th>Company Name</th>
                                        <th>Current Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Data populated by DataTables via AJAX -->
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>SL</th>
                                        <th>Name</th>
                                        <th>Designation</th>
                                        <th>Current Designation</th>
                                        <th>Total Experience</th>
                                        <th>Company Name</th>
                                        <th>Current Status</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ Main Content ] end -->
    </div>
</div>

<!-- Insert Modal -->
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <form action="{{ route('ressume.store') }}" method="POST">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add New Resume</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-group mb-3">
                        <label>Name <span class="text-danger">*</span></label>
                        <input type="text" name="name" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label>Designation <span class="text-danger">*</span></label>
                        <input type="text" name="designation" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label>Current Designation</label>
                        <input type="text" name="currentdesignation" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label>Total Experience (Years)</label>
                        <input type="number" name="total_exp" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label>Cover Letter</label>
                        <textarea name="cover_letter" class="form-control" rows="4"></textarea>
                    </div>
                    <div class="form-group mb-3">
                        <label>Company Name</label>
                        <input type="text" name="company_name" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label>Current Status</label>
                        <select name="current_status" class="form-control">
                            <option value="employed">Employed</option>
                            <option value="unemployed">Unemployed</option>
                            <option value="freelance">Freelance</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Add Resume</button>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- Edit Modal -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Edit Resume</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="edit-form-body">
                <!-- Edit form content will be loaded here -->
            </div>
        </div>
    </div>
</div>

<!-- Scripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<script type="text/javascript">
    $(function () {
        var table = $('.ytable').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('ressume.index') }}",
            language: {
                emptyTable: `
                    <div style="display: flex; flex-direction: column; align-items: center; justify-content: center; padding: 40px 0;">
                        <img src="{{ asset('admin/images/no_data.svg') }}" alt="No Data" style="width: 80px; height:80px; margin-bottom: 15px;" />
                        <div style="font-size: 16px; color: #555;"><b>No data available</b><br/><p>Please add new entity regarding this table</p></div>
                    </div>`
            },
            columns: [
                { data: 'DT_RowIndex',       name: 'DT_RowIndex' },
                { data: 'name',              name: 'name' },
                { data: 'designation',       name: 'designation' },
                { data: 'currentdesignation',name: 'currentdesignation' },
                { data: 'total_exp',         name: 'total_exp' },
                { data: 'company_name',      name: 'company_name' },
                { data: 'current_status',    name: 'current_status' },
                { data: 'action',            name: 'action', orderable: false, searchable: false }
            ]
        });
    });

    // Load edit form
    $('body').on('click', '.edit', function () {
        let id = $(this).data('id');
        $.get("ressume/" + id + "/edit", function (data) {
            $('#edit-form-body').html(data);
        });
    });
</script>

@endsection