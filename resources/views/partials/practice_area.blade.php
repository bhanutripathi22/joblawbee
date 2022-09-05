<div class="light-bg">
    <h6>Category</h6>
    {{-- <input type="text" class="form-control search-form1" placeholder="Example marketing"> --}}
    <select class="form-control">
        @foreach($practice_areas as $area)
        <option>{{ $area->name }}</option>
        @endforeach
    </select>
</div>