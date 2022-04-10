<form action="">
    helloooo
</form>
<form action="{{ route('structure.store') }}" method="post">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name">
    </div>
    <div class="mb-3">
        <label for="type" class="form-label">Type</label>
        <textarea name="type" id="type" class="form-control" rows="5"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
