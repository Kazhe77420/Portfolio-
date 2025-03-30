<?php



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title> Portfolio</title>
</head>

<header class="fixed top-0 left-0 w-full z-10">
    <nav class="bg-gray-800 p-4">
        <div class="container mx-auto flex flex-wrap justify-between items-center">
            <a href="#" class="text-white text-lg font-bold">Christopher Desous</a>
            <p class="text-white hidden sm:block">" L'Homme est né sur la Terre, rien ne l'oblige à y mourir. Visons les étoiles."</p>
            <ul class="flex flex-wrap space-x-4">
                <li><a href="#about" class="text-gray-300 hover:text-white">About Me</a></li>
                <li><a id="toggle-contact-form" class="cursor-pointer text-gray-300 hover:text-white">Contact</a></li>
            </ul>
        </div>
    </nav>
</header>


<body>
<div class='space'></div>

<div class="flex flex-col">


<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-40" id="card">

    <div class="user-card" id="Quizz">
        <div class="user-cover">
            <img class="user-avatar" src="./assets/icons8-javascript-48.png" alt="user profile image" />
        </div>
        <div class="user-details">
            <div class="user-name hide-text text-white">Quizz</div>
        </div>
        
    </div>
    <script>

    const quizzCard = document.getElementById('Quizz');
    quizzCard.addEventListener('click', () => {
        window.location.href = 'Quizz.html';
    });
    </script>

    <div class="user-card" id="Puissance4">
        <div class="user-cover">
            <img class="user-avatar" src="./assets/icons8-javascript-48.png" alt="user profile image" />
        </div>
        <div class="user-details">
            <div class="user-name hide-text text-white">Puissance4</div>
        </div>
    <script>
    
    const Puissancecard = document.getElementById('Puissance4');
    Puissancecard.addEventListener('click', () => {
        window.location.href = 'Puissance4.html';
    });

    </script>
        
    </div>

    <div class="user-card" id ="Twitter">
        <div class="user-cover">
            <img class="user-avatar" src="assets/icons8-php-48.png" alt="user profile image" />
        </div>
        <div class="user-details">
            <div class="user-name hide-text text-white">Twitter</div>
        </div>
        <script>
    
        const Twittercard = document.getElementById('Twitter');
        Twittercard.addEventListener('click', () => {
        window.location.href = 'Twitter.html';
        });
        </script>
    </div>

   
</div>


</div>


   <!-- <div class="mt-8 scroll">
      <div class="Projects">
         <ul class="Quizz">
            <li>
               <img src="./assets/quizz.png" alt="quizz" width="10%" >
            </li>
            <li>
               <img src="./assets/quizzJS.png" alt="quizz" width="10%">
            </li>
         </ul>
      </div>
   </div>
     -->



   <div id="contact-form" class="fixed bottom-4 right-4 bg-gray-800 p-4 rounded-lg shadow-lg hidden w-full sm:w-96">
    <form action="send_mail.php" method="POST" class="space-y-4">
        <h3 class="text-white text-lg font-bold">Contact Me</h3>
        <div>
            <label for="name" class="text-gray-300">Name</label>
            <input type="text" id="name" name="name" class="w-full p-2 rounded bg-gray-700 text-white" required>
        </div>
        <div>
            <label for="email" class="text-gray-300">Email</label>
            <input type="email" id="email" name="email" class="w-full p-2 rounded bg-gray-700 text-white" required>
        </div>
        <div>
            <label for="message" class="text-gray-300">Message</label>
            <textarea id="message" name="message" rows="4" class="w-full p-2 rounded bg-gray-700 text-white" required></textarea>
        </div>
        <button type="submit" class="w-full bg-blue-600 text-white p-2 rounded hover:bg-blue-700">Send</button>
    </form>
</div>

    <!-- <button id="toggle-contact-form" class="fixed bottom-4 right-4 bg-blue-600 text-white p-2 rounded hover:bg-blue-700">
      Contact Me
   </button> -->

    <script src="script/contact-hidden.js"></script>


</body>




</html>