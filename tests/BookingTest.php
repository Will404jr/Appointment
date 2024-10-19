<?php

use PHPUnit\Framework\TestCase;

class BookingTest extends TestCase
{
    public function testBookAppointment()
    {
        // Simulate a booking request
        $_SESSION['user'] = 'patient@example.com';
        $_SESSION['usertype'] = 'p';
        $_POST['booknow'] = true;
        $_POST['apponum'] = 1;
        $_POST['scheduleid'] = 123;
        $_POST['date'] = '2023-12-01';

        // Include the booking script
        ob_start();
        include 'path/to/patient/booking-complete.php';
        $output = ob_get_clean();

        // Assert that the booking was successful
        $this->assertStringContainsString('Location: appointment.php?action=booking-added', $output);
    }
}
