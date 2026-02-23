<form action="{{ route('ressume.update', $ressume->id) }}" method="post" id="edit-form">
    @csrf
    @method('PUT')
    <div class="modal-body">

        <div class="form-group mb-3">
            <label for="name" class="col-form-label pt-0">Name <sup class="text-danger">*</sup></label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $ressume->name }}">
            <small class="form-text text-muted">Full name of the candidate</small>
        </div>

        <div class="form-group mb-3">
            <label for="designation" class="col-form-label pt-0">Designation <sup class="text-danger">*</sup></label>
            <input type="text" class="form-control" id="designation" name="designation" value="{{ $ressume->designation }}" required>
            <small class="form-text text-muted">Job designation of the candidate</small>
        </div>

        <div class="form-group mb-3">
            <label for="currentdesignation" class="col-form-label pt-0">Current Designation</label>
            <input type="text" class="form-control" id="currentdesignation" name="currentdesignation" value="{{ $ressume->currentdesignation }}">
            <small class="form-text text-muted">Current job designation</small>
        </div>

        <div class="form-group mb-3">
            <label for="total_exp" class="col-form-label pt-0">Total Experience (Years)</label>
            <input type="number" class="form-control" id="total_exp" name="total_exp" value="{{ $ressume->total_exp }}">
            <small class="form-text text-muted">Total years of experience</small>
        </div>

        <div class="form-group mb-3">
            <label for="cover_letter" class="col-form-label pt-0">Cover Letter</label>
            <textarea class="form-control" id="cover_letter" name="cover_letter" rows="4">{{ $ressume->cover_letter }}</textarea>
            <small class="form-text text-muted">Short cover letter</small>
        </div>

        <div class="form-group mb-3">
            <label for="company_name" class="col-form-label pt-0">Company Name</label>
            <input type="text" class="form-control" id="company_name" name="company_name" value="{{ $ressume->company_name }}">
            <small class="form-text text-muted">Current or last company name</small>
        </div>

        <div class="form-group mb-3">
            <label for="current_status" class="col-form-label pt-0">Current Status</label>
            <select name="current_status" id="current_status" class="form-control">
                <option value="employed"   {{ $ressume->current_status == 'employed'   ? 'selected' : '' }}>Employed</option>
                <option value="unemployed" {{ $ressume->current_status == 'unemployed' ? 'selected' : '' }}>Unemployed</option>
                <option value="freelance"  {{ $ressume->current_status == 'freelance'  ? 'selected' : '' }}>Freelance</option>
            </select>
            <small class="form-text text-muted">Current employment status</small>
        </div>

    </div>

    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-primary">Update Resume</button>
    </div>
</form>