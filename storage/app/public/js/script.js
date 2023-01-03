$(document).ready(function () {
    // Product's Quantity Button
    $(".increment-qty").click(function (e) {
        e.preventDefault();
        var qty = $(this).closest(".product-card").find(".input-qty").val();

        // Jika qty not a number return 0
        qty = isNaN(qty) ? 0 : qty;
        qty++;
        $(this).closest(".product-card").find(".input-qty").val(qty);
    });

    $(".decrement-qty").click(function (e) {
        e.preventDefault();
        var qty = $(this).closest(".product-card").find(".input-qty").val();

        // Jika qty not a number return 0
        qty = isNaN(qty) ? 0 : qty;

        if (qty > 0) {
            qty--;
        }
        $(this).closest(".product-card").find(".input-qty").val(qty);
    });
});
