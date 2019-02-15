$(document).ready(function() {
    $('#products').pinterest_grid({
        no_columns: 4,
        padding_x: 10,
        padding_y: 10,
        margin_bottom: 50,
        single_column_breakpoint: 700
    });

    //UPDATE ITEM CART
    $(".btn-update-item").click(function (e) {
        e.preventDefault();
        // console.log('dassad');
        var id = $(this).data('id');
            var href = $(this).data('href');
            var qty = $('#product_' + id).val();

        window.location.href = "update/" + href + "/" + qty;
    });
});