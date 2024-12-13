<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #ffffff;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .form-container {
            border-radius: 20px;
            padding: 40px;
            max-width: 400px;
            background-color: #ffffff;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.4);
            text-align: center;
        }
        .form-container h2 {
            margin-bottom: 40px;
            font-weight: bold;
        }
        .form-group {
            margin-bottom: 30px;
            position: relative;
        }
        .form-group label {
            font-weight: bold;
            color: #000;
            position: absolute;
            top: -10px;
            left: 20px;
            background: #ffffff;
            padding: 0 5px;
        }
        .form-control {
            border: 2px solid #f05423;
            border-radius: 0 25px 25px 25px;
            padding: 10px 20px;
            font-size: 16px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        .form-control:focus {
            outline: none;
            border-color: #f05423;
            box-shadow: 0 4px 8px rgba(240, 84, 35, 0.5);
        }
        .btn-primary {
            background-color: rgba(255, 255, 255, 0);
            border: 2px solid #d9451e;
            border-radius: 25px;
            padding: 10px 20px;
            color: #f05423;
            font-size: 16px;
            width: 180px;
            margin: 20px auto;
            text-align: center;
            line-height: 1.5;
            transition: all 0.3s ease;
        }
        .btn-primary:hover {
            color: white;
            background-color: #d9451e;
        }
        p.mt-3 {
            font-size: 14px;
        }
        p.mt-3 a {
            color: #f05423;
            text-decoration: none;
            font-weight: bold;
        }
        p.mt-3 a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<div class="form-container">
    <h2>Connexion</h2>
    <form>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" class="form-control" required placeholder="Votre email">
        </div>
        <div class="form-group">
            <label for="password">Mot de passe</label>
            <input type="password" id="password" class="form-control" required placeholder="Votre mot de passe">
        </div>
        <button type="submit" class="btn-primary">Se connecter</button>
        <p class="mt-3">Vous n'avez pas de compte ? <a href="inscription.php">S'inscrire</a></p>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
