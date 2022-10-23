<script>
    $('th[data-sort-by]').click(function (event) {
        var form = $('.filter-form');
        var inputSortBy = $("<input>").attr("type", "hidden").attr("name", 'sort-by').val($(this).data('sort-by'));
        var sortDirection = 'asc';
        if ($(this).hasClass('sorting_asc')) {
            sortDirection = 'desc';
        }
        var inputSortDirection = $("<input>").attr("type", "hidden").attr("name", 'sort-direction').val(sortDirection);
        form.append($(inputSortBy)).append(inputSortDirection);
        form.submit();
    });
</script>
