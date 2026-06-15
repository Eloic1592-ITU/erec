$(document).ready(function () {
  $(".show-pass")
    .off("click")
    .on("click", function () {
      $(this).addClass("d-none");
      $(this).parent(".input-group").find(".hide-pass").removeClass("d-none");
      $(this).parent(".input-group").find("input").attr("type", "text");
    });

  $(".hide-pass")
    .off("click")
    .on("click", function () {
      $(this).addClass("d-none");
      $(this).parent(".input-group").find(".show-pass").removeClass("d-none");
      $(this).parent(".input-group").find("input").attr("type", "password");
    });
});
