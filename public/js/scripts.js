// Get the current URL
var currentUrl = window.location.href;

// Get all the navigation links
var navLinks = document.querySelectorAll(".nav-link");
// Loop through the navigation links
for (var i = 0; i < navLinks.length; i++) {
    // Check if the link's href attribute matches the current URL
    var cleanHref = currentUrl.split("");
    if (cleanHref[cleanHref.length - 1] === "/") {
        cleanHref.pop();
    }
    cleanHref = cleanHref.join("");
    if (navLinks[i].getAttribute("href") === cleanHref) {
        console.log(navLinks[i].getAttribute("href"));
        console.log(currentUrl);
        // Add the 'active' class to the parent 'nav-item'
        navLinks[i].closest(".nav-item").classList.add("active");
    }
}
