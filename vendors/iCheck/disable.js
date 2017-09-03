$(function() {
  enable_cb();
  $(".flat").click(enable_cb);
});

function enable_cb() {
  if (this.checked) {
    $("input.flat").removeAttr("disabled");
  } else {
    $("input.flat).attr("disabled", true);
  }
}