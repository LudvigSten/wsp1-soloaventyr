<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $pageTitle; ?></title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <main>
        <p>
            <?= $story['body'] ?>
        </p>

        <ul>
            <?php foreach ($links as $link): ?>
                <li>
                    <a href="?id=<?= $link['target_id'] ?>">
                        <?= $link['description'] ?>
                    </a>
                </li>
            <?php endforeach ?>
        </ul>
        <p id="resultat"></p>
        <button id="rulla"> Rulla tärning </button>
    </main>
    <script>
        function random(min, max) {
            return Math.floor(Math.random() * (max - min)) + min;
        }

        let button = document.getElementById("rulla");
        let text = document.getElementById("resultat");

        button.addEventListener("click", function() {
            let rull = random(1, 7);
            text.textContent = rull;
        }, false);

    </script>
</body>
</html>