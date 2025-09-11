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

//make sure when resized the menu icon displays on desktop view
window.onload = function () {
  var x = document.getElementById("menu");
  var j = document.getElementById("ham-icon");
  window.addEventListener("resize", function () {
    //768px and greater is desktop view
    if (window.innerWidth > 768) {
      x.style.display = "block";
      x.style.padding = "10px";
      j.classList.remove("open");
      x.classList.remove("position");
    }
    else {
      x.style.display = "none";
      j.classList.remove("open");
      x.classList.remove("position");
    }
  })
}