function openCity(evt, cityName) {
    // Declare all variables
    var i, tabcontent, tablinks;

    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    // Show the current tab, and add an "active" class to the link that opened the tab
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
    
    // Store the active tab in local storage
    localStorage.setItem("activeTab", cityName);
}

document.addEventListener("DOMContentLoaded", function() {
    // Retrieve the last active tab from local storage
    var lastActiveTab = localStorage.getItem("activeTab");

    // Hide all tab contents
    var tabcontent = document.getElementsByClassName("tabcontent");
    for (var i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    // If a last active tab is found, show its content
    if (lastActiveTab) {
        document.getElementById(lastActiveTab).style.display = "block";
    }

    // Get the .list and .tabcontent elements
    var list = document.querySelector(".list");
    var tabcontent = document.querySelector(".tabcontent");

    // Set the .tabcontent height to match the .list height
    tabcontent.style.height = list.clientHeight;
});
