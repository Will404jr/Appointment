<?php

use PHPUnit\Framework\TestCase;

class LoginTest extends TestCase
{
    public function testLoginWithValidCredentials()
    {
        // Simulate a login request with valid credentials
        $_POST['username'] = 'valid_username';
        $_POST['password'] = 'valid_password';

        // Include the login script
        ob_start();
        include 'path/to/login.php';
        $output = ob_get_clean();

        // Assert that the user is redirected to the dashboard
        $this->assertStringContainsString('Location: dashboard.php', $output);
    }

    public function testLoginWithInvalidCredentials()
    {
        // Simulate a login request with invalid credentials
        $_POST['username'] = 'invalid_username';
        $_POST['password'] = 'invalid_password';

        // Include the login script
        ob_start();
        include 'path/to/login.php';
        $output = ob_get_clean();

        // Assert that an error message is displayed
        $this->assertStringContainsString('Invalid credentials', $output);
    }
}

