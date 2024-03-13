<?php
session_start()
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/9e81387435.js" crossorigin="anonymous"></script>
    <title>Admin overview</title>
</head>
<body>  
    
<div class="tab">
    <a href="index.php"><button><i class="fa-solid fa-house"></i> Home</button></a>
    <button class="tablinks" onclick="openTab(event, 'change_password')">1</button>
    <button class="tablinks" onclick="openTab(event, 'change_email')">2</button>
    <button class="tablinks" onclick="openTab(event, 'change_username')">3</button>
    <button class="tablinks" onclick="openTab(event, 'delete_account')">4</button>
    <button class="tablinks" onclick="openTab(event, 'faqs')"><i class="fa-solid fa-question"></i> FAQs</button>
    <button class="tablinks" onclick="openTab(event, 'logout')"><i class="fa-solid fa-right-from-bracket"></i> Logout</button>
</div>

<div id="change_password" class="tabcontent">
</div>

<div id="change_email" class="tabcontent">
</div>

<div id="change_username" class="tabcontent">
</div>

<div id="delete_account" class="tabcontent">
</div>

<div id="logout" class="tabcontent">
</div>

<div id="faqs" class="tabcontent">
    <h2>Frequently Asked Questions</h2>
    <ul class="faq-list">
        <li>
            <div class="faq-question" onclick="toggleFAQ('faq1')">How do I change my password?</div>
            <div id="faq1" class="faq-answer">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</div>
        </li>
        <li>
            <div class="faq-question" onclick="toggleFAQ('faq2')">How do I change my username?</div>
            <div id="faq2" class="faq-answer">It is a long established fact that a reader will be...</div>
        </li>
        <li>
            <div class="faq-question" onclick="toggleFAQ('faq3')">How do I change my email</div>
            <div id="faq3" class="faq-answer">It is a long established fact that a reader will be...</div>
        </li>
        <li>
            <div class="faq-question" onclick="toggleFAQ('faq4')">How do I send a message?</div>
            <div id="faq4" class="faq-answer">It is a long established fact that a reader will be...</div>
        </li>
        <li>
            <div class="faq-question" onclick="toggleFAQ('faq5')">How do I delete my account?</div>
            <div id="faq5" class="faq-answer">It is a long established fact that a reader will be...</div>
        </li>
        <li>
            <div class="faq-question" onclick="toggleFAQ('faq5')">How do I delete my message?</div>
            <div id="faq5" class="faq-answer">It is a long established fact that a reader will be...</div>
        </li>
        <br>
        <br>
    </ul>
</div>
<script src="admin.js"></script>
</body>
</html>
