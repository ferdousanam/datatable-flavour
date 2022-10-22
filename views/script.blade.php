<script>
    $('th[data-order-column]').click(function (event) {
        var form = $('.filter-form');
        var inputOrderBy = $("<input>").attr("type", "hidden").attr("name", 'order-by').val($(this).data('order-column'));
        var order = 'asc';
        if ($(this).hasClass('sorting_asc')) {
            order = 'desc';
        }
        var inputOrder = $("<input>").attr("type", "hidden").attr("name", 'order').val(order);
        form.append($(inputOrderBy)).append(inputOrder);
        form.submit();
    });
</script>
