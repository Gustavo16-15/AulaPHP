<?php
// 1. Configurações de conexão
$host = 'localhost';
$db   = 'nome_do_seu_banco';
$user = 'usuario';
$pass = 'senha';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

try {
    // 2. Conecta ao MySQL
    $pdo = new PDO($dsn, $user, $pass);

    // 3. Dados que vieram do formulário (exemplo)
    $nome = "Cerveja Heineken 600ml";
    $preco = 12.50; // Note que no PHP usamos ponto para decimais
    $categoria = "Fermentada";

    // 4. O COMANDO SQL (usando placeholders ':nome')
    $sql = "INSERT INTO CARRINHO (name, preco, categoria) VALUES (:n, :p, :c)";
    
    // 5. Prepara e Executa com segurança
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':n' => $nome,
        ':p' => $preco,
        ':c' => $categoria
    ]);

    echo "Produto inserido com sucesso!";

} catch (\PDOException $e) {
    echo "Erro ao conectar ou inserir: " . $e->getMessage();
}
?>