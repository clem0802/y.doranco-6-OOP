document.querySelector("#menuButton").addEventListener("click", () => {
  console.log("Clickkkkk");
  let menu = document.querySelector("#menu");
  console.log(menu);
  if (menu.style.left == "0px") {
    menu.style.left = "-100%";
  } else {
    menu.style.left = "0px";
  }
});
