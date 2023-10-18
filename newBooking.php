<html>
    <body>
        <form method="POST" action="createNewBooking.php.">
            <?PHP include "createMemberDropdown.php";?>
            courtID: <input type="number" name="courtID"/><BR>
            Booking Date: <input type="date" name="bookingDate"/><br>
            Start Time: <input type="time" name="startTime"/><br>
            End Time: <input type="time" name="endTime"/><br>
            <input type="submit">
        </form>
    </body>
</html>