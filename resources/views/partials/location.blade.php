<div class="mt-4 light-bg">
    <h6>Location</h6>
    {{-- <div class="mb-3"><input type="text" class="form-control search-form1" placeholder="Example Delhi"></div>
    <div>
        <input type="checkbox">
        <label for="">Work from home</label>
    </div>
    <div>
        <input type="checkbox" id="css">
        <label for="">Part time</label>
    </div> --}}
    <select class="form-control">
        @foreach($states as $state)
        <option>{{ $state->name }}</option>
        @endforeach
    </select>
</div>