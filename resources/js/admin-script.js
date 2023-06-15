//navbar
function toggleNav() {
  var sideNav = document.getElementById("mySlidenav");
  var body = document.body;
  var elements = document.querySelectorAll(".move-right");

  if (sideNav.classList.contains("open-nav")) {
    // Close the navigation
    sideNav.classList.remove("open-nav");
    body.classList.remove("open-menu");
    elements.forEach(function (element) {
      element.style.transform = "translate(0, 0)";
    });
  } else {
    // Open the navigation
    sideNav.classList.add("open-nav");
    body.classList.add("open-menu");
    elements.forEach(function (element) {
      element.style.transform = "translate(250px, 0)";
    });
  }
}

//dropdown
const dropdowns = document.querySelectorAll(".mydropdown");

dropdowns.forEach((dropdown) => {
  const dropdownContent = dropdown.querySelector(".mydropdown-content");
  dropdown.addEventListener("click", (event) => {
    event.preventDefault();
    dropdownContent.classList.add("show");
  });
  document.addEventListener("click", (event) => {
    if (event.target.matches(".back-btn")) {
      event.preventDefault();

      dropdownContent.classList.add("hide");
      setTimeout(() => {
        dropdownContent.classList.remove("show");
        dropdownContent.classList.remove("hide");
        document.removeEventListener("click");
      }, 300);
    }
  });
});

// Google Chart
google.charts.load("current", { packages: ["corechart", "line"] });
google.charts.setOnLoadCallback(drawBasic);

function drawBasic() {
  var data = new google.visualization.DataTable();
  data.addColumn("number", "X");
  data.addColumn("number", "Y");

  data.addRows([
    [0, 0],
    [1, 10],
    [2, 23],
    [3, 10],
    [4, 60],
    [5, 80],
  ]);

  var options = {
    hAxis: {
      title: "WEEKS",
    },
    vAxis: {
      title: "SALES",
    },
  };

  var chart = new google.visualization.LineChart(
    document.getElementById("chart_div")
  );

  chart.draw(data, options);
}
