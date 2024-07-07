<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Formulaire de contact</title>
<style>
    /* Styles facultatifs pour améliorer l'apparence du formulaire */
    form {
        max-width: 400px;
        margin: 0 auto;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        background-color: #f9f9f9;
    }
    input[type="text"], input[type="email"], textarea {
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        font-size: 14px;
    }
    textarea {
        height: 150px;
    }
    input[type="submit"] {
        background-color: #4CAF50;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 16px;
    }
    input[type="submit"]:hover {
        background-color: #45a049;
    }
</style>
</head>
<body>

<form action="insert.php" method="post">
    <label for="nom">Nom :</label>
    <input type="text" id="nom" name="nom" placeholder="Votre nom.." required>

    <label for="email">Email :</label>
    <input type="email" id="email" name="email" placeholder="Votre email.." required>

    <label for="message">Message :</label>
    <textarea id="message" name="message" placeholder="Votre message.." required></textarea>

    <input type="submit" value="Envoyer">
</form>

</body>
</html>