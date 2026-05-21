const cDate = new Date();
const hours = cDate.getHours();
const displayElement = document.getElementById("display");
const timeElement = document.getElementById("time");

if (hours < 12) {
    displayElement.innerText = "Good Morning";
} else {
    displayElement.innerText = "Good Afternoon";
}

// Update the time element with the current system time
timeElement.innerText = "Current Time: " + cDate.toLocaleTimeString();