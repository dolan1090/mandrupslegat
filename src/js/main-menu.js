document.addEventListener("DOMContentLoaded", function () {
  var menu_site = document.querySelector(".menu-site");
  var open_menu = document.querySelector(".open-menu");
  var menu_items = document.querySelectorAll(".menu-site > ul > li");

  open_menu.onclick = function () {
    menu_site.classList.toggle("active");
  }

  // var close_menu = document.querySelector(".close-menu");
  // close_menu.onclick = function () {
  //   menu_site.style.width = "0";
  // }

  // var bg_menu = document.querySelector(".bg-menu");
  // bg_menu.onclick = function () {
  //   menu_site.style.width = "0";
  // }

  menu_items.forEach(function (menuItem) {
    var sub_menu = menuItem.querySelector("ul");
    if (sub_menu !== null) {
      var icon_down = document.createElement("img");
      icon_down.alt = 'icon menu';
      icon_down.src = "data:image/svg+xml;charset=utf-8,<svg xmlns='http://www.w3.org/2000/svg' height='1em' viewBox='0 0 448 512'><path d='M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z'/></svg>";
      icon_down.classList.add("svg-inline--fa", "fa-sort-down");
      menuItem.insertBefore(icon_down, sub_menu);

      icon_down.onclick = function () {
        menuItem.classList.toggle("show-children");

        if (!sub_menu.classList.contains('show')) {
          sub_menu.classList.add("show");
          icon_down.classList.remove("fa-sort-down");
          icon_down.classList.add("fa-sort-up");
          icon_down.src = "data:image/svg+xml;charset=utf-8,<svg xmlns='http://www.w3.org/2000/svg' height='1em' viewBox='0 0 448 512'><path d='M432 256c0 17.7-14.3 32-32 32L48 288c-17.7 0-32-14.3-32-32s14.3-32 32-32l352 0c17.7 0 32 14.3 32 32z'/></svg>";
        } else {
          sub_menu.classList.remove("show");
          icon_down.classList.remove("fa-sort-up");
          icon_down.classList.add("fa-sort-down");
          icon_down.src = "data:image/svg+xml;charset=utf-8,<svg xmlns='http://www.w3.org/2000/svg' height='1em' viewBox='0 0 448 512'><path d='M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z'/></svg>";
        }
      };
    }
  });

});