


<form method="post" action="thanks.php">

    <label for="lastname">Nom</label>
    <input type="text" id="lastname" name="lastname"><br></br>

    <label for="firstname">Prénom</label>
    <input type="text" id="firstname" name="firstname"><br></br>

    <label for="phone">Numéro de téléphone</label>
    <input type="number" id="phone" name="phone"><br></br>

    <label for="email">Email</label>
    <input type="text" id="email" name="email"><br></br>

    <label for="subject">Sujet de votre demande :</label>
    <select name="subject" id="subject">
        <option value="">--Choisissez un sujet--</option>
        <option value="devis">Demande de devis</option>
        <option value="support">Support technique</option>
        <option value="service">Service après-vente</option>
    </select><br></br>

    <label for="message">Message</label>
    <input type="text" id="message" name="message">

    <button type="submit">Envoyer</button>
</form>


