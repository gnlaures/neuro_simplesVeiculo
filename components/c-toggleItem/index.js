$(document).on('click', '.c-toggleItem__head', function() {
    $(this).closest(".c-toggleItem").toggleClass("is-active");
});