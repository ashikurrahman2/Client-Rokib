<form action="{{ route('skill.update', $skill->id) }}" method="post" id="edit-form">
    @csrf
    @method('PUT')
    <div class="modal-body">

        <div class="form-group mb-3">
            <label for="skill_name" class="col-form-label pt-0">Skill Name <sup class="text-danger">*</sup></label>
            <input type="text" class="form-control" id="skill_name" name="skill_name" value="{{ $skill->skill_name }}" required>
            <small class="form-text text-muted">Enter the skill name</small>
        </div>

    </div>

    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-primary">Update Skill</button>
    </div>
</form>