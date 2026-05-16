const currentTime = new Date();
const hours = currentTime.getHours();

if (hours < 12) {
    // Hours 0-11 are considered morning
    console.log("Good Morning");
} else {
    // Hours 12-23 are considered afternoon/evening
    console.log("Good Afternoon");
}