/*This function does the specified time and date for the application*/
$(document).ready(function() {
  var interval = setInterval(function(){
    var momentNow = moment().zone(300); //makes the time zone EST
    $('#date').html(momentNow.format("dddd, MMMM Do YYYY")); //Sets the date
    $('#time').html(momentNow.format('hh:mm:ss A')); //Sets the time
  }, 100); //Incrememts the seconds
});

/*Sign out functionality after inactivity reach X minutes*/
$(document).ready(function () {
    //Increment the idle time counter every second.
    var idleInterval = setInterval(timerIncrement, 1000); // 1 second, 1000 milliseconds

    //Zero the idle timer on mouse movement.
    $(this).mousemove(function (e) {
        idleTime = 0;
    });
    //zero the idle timer on keypressed
    $(this).keypress(function (e) {
        idleTime = 0;
    });
});
//increments timer and checks if the time of idleness has been exceeded
function timerIncrement() {
    idleTime = idleTime + 1;
    if (idleTime > 19) { //20 seconds, the page will reset right now
        window.location.reload();
    }
}