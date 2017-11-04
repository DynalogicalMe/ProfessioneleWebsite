<div id="contactContainer">
    <div class="contactLeft">
        <form method="post" action="<?php Router::getPath('contactRedirect') ?>">
            <h1>Contact</h1>

            <p>Via dit contactformulier kunt u contact opnemen met de Mondriaanhogeschool.</p>

            <div class="formItem">
                <label for="firstName">Voornaam: </label>
                <input type="text" id="firstName" placeholder="Voornaam" name="firstName" required>
            </div>

            <div class="formItem">
                <label for="lastName">Achternaam: </label>
                <input type="text" id="lastName" placeholder="Achternaam" name="lastName" required>
            </div>

            <div class="formItem">
                <label for="email">Email Adres: </label>
                <input type="email" id="email" placeholder="Email Adres" name="email" required>
            </div>

            <div class="formItem">
                <label for="email">Bericht: </label>
                <textarea name="textArea" placeholder="Beschrijf kort waarom u contact wilt opnemen met de Mondriaan Hogeschool" required></textarea>
            </div>

            <div class="formItem">
                <input type="submit" name="submit" value="Versturen">
            </div>
        </form>
    </div>

    <div class="contactRight">
        <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBj58dd-EL7GBNwi9hzfsHTZ-pkon-JrZs&q=Van+Schaikweg+94,+7811+KL+Emmen" allowfullscreen></iframe>
    </div>
</div>