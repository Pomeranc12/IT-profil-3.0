<?php
// Načtení dat ze souboru [cite: 20, 29]
$jsonData = file_get_contents('profile.json');
// Převod JSON na PHP pole [cite: 21, 30]
$data = json_decode($jsonData, true);

// Pomocná funkce pro bezpečný výstup 
function escape($text) {
    return htmlspecialchars($text, ENT_QUOTES, 'UTF-8');
}
?>
<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <title>IT Profil - <?php echo escape($data['name']); ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1><?php echo escape($data['name']); ?></h1>

        <h2>Dovednosti</h2>
        <ul>
            <?php foreach ($data['skills'] as $skill): ?>
                <li><?php echo escape($skill); ?></li>
            <?php endforeach; ?>
        </ul>

        <h2>Projekty</h2>
        <ul>
            <?php foreach ($data['projects'] as $project): ?>
                <li><?php echo escape($project); ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
</body>
</html>