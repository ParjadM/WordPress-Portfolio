function myFunction() {
  var x = document.getElementById("menu");
  var j = document.getElementById("ham-icon");
  if (x.style.display === "block") {
    x.style.display = "none";
    j.classList.remove("open");
    x.classList.remove("position");
  } else {
    x.style.display = "block";
    x.style.padding = "10px";
    j.classList.add("open");
    x.classList.add("position");
  }
}