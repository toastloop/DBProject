<?php namespace App\View\Template; ?>
    <nav>
        <ul>
            <li><a href="/">Home</a></li>
            <?php if(isset($_SESSION['username'])): ?>
                <li><a href="/?route=addPatient">Add Patient</a></li>
                <li><a href="/?route=viewPatients">View Patients</a></li>
                <li><a href="/?route=addAppointment">Add Appointment</a></li>
                <li><a href="/?route=viewSchedule">View Schedule</a></li>
                <li><a href="/?route=logout">Logout</a></li>
            <?php else: ?>
                <li><a href="/?route=login">Login</a></li>
            <?php endif; ?>
        </ul>
    </nav>
