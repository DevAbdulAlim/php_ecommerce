// Navbar

function myDropdown() {
  var dropdown = document.getElementById("myDropdown");
  dropdown.classList.toggle("show");
  document.getElementById("defaultOpen").click();
  setTimeout(function () {
    outsideListener();
  }, 0);
}

function openTab(evt, tabName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }

  document.getElementById(tabName).style.display = "flex";
  evt.currentTarget.className += " active";
}

// outside listener
function outsideListener() {
  var content = document.getElementById("myDropdown");
  function handleClick(event) {
    if (content.classList.contains("show") && !content.contains(event.target)) {
      if (event.target !== document.getElementById("myDropdownBtn")) {
        content.classList.remove("show");
        document.removeEventListener("click", handleClick);
      }
    }
  }
  document.addEventListener("click", handleClick);
}
