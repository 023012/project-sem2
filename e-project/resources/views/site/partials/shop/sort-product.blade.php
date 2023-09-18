
<!-- Start Sort Select Option -->
<div class="sort-select-list d-flex align-items-center">
    <label class="mr-2">Sort By: </label>
    <form action="{{route('site.shop')}}" method="get">
        @csrf
        <fieldset>
            <select name="sort_option" id="sort_option" onchange="this.form.submit()">
                @foreach ($sortOptions as $key => $value)
                    <option value="{{ $key }}">{{ $value }}</option>
                @endforeach
            </select>
        </fieldset>
    </form>
</div> <!-- End Sort Select Option -->
<script>
    $('[name="sort_option"]').change(function() {
        $(this).closest('form').submit();

    })
</script>
