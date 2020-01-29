$(function () {
    $('[data-toggle="popover"]').popover()
  })
$('.popover-dismiss').popover({
    trigger: 'focus'
})
$('.service').click(function(e) {
    e.preventDefault();
});