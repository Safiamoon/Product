<?php 
require_once "layout/header.php"; 
require_once "src/View.php";
require_once "src/IProduitProvider.php";
?>

<h1>Liste des produits de la base de données</h1>

<?php
$host = '127.0.0.1';
$db   = 'safia_product';
$user = 'sadmin';
$pass = 'safiasql';
$charset = 'utf8mb4';
try {
    $pdo = new PDO($dsn, $user, $pass);
    var_dump($pdo);
} catch (\PDOException $e) {
    echo "Erreur lors de la connection à la base de données" . $e->getMessage();
}
$res = $pdo->query('SELECT * FROM produit');
while ($row = $res->fetch()) {
    echo View::render(
        'templates/produit/produit-single-db.php',
        ['produit' => $row]
    );
}
?>
<?php require_once "layout/footer.php"; ?>