<?php
session_start();
require_once '../config/database.php';
header('Content_Type: application/json');

if (!isset ($_SESSION['user_id'])) {
    echo json_encode(["success" => false, "mensage" => "Session expirada."])
    exit;
}
$id_solicitante = $_SESSION['user_id'];
$id_ambiente    = (int)($_POST['id_ambientes'] ?? 0);
$id_tipo        = (int)($_POST['id_tipo'] ?? 0);
$descricao      = $conn->real_escape_string($_POST['descricao'] ?? '');

if (!$id_ambientes || $id_tipo || empty($ddescricao)) {
    echo json_encode(["seccess" => false, "mensage" => "Preencha todos os campos obrigatorios"])
    exit;
}

$sql = "INSERT INTO  chamados (descricao_problema, id_solicitante, id_ambiente, id_tipo_servico"
    VALUES ('$descricao', $id_solicitante, $id_ambiente, $id_tipo, 'aberto');
if ($conn->query($sql)) {
    $id_chamado = $conn->insert_id;
    if (isset($_FILES['foto']) && $_FILES['foto']['error'] === UPLOAD_ERR_OK) {
        $diretorio = "../assets/uploads/";
        if (!is_dir($diretorio)) mkdir($diretorio, 0777, true);
        $extensao = pathinfo($_FILES['foto']['name'], PATHINFO_EXTENSION);
        $nome_arquivo = "abertura_" . uniqid() . "." . $extensao;
        $caminho_final = $diretorio . $nome_arquivo;
        if (move_uploaded_file($_FILES['foto']['tmp_name'], $caminho_final)) {
            $caminho_db = "assets/upload/" . $nome_arquivo;
            $conn->query("INSERT INTO chados_anexos (id_chamado, caminho_arquivo, tipo_anexo) VALUES ($id_chamado, 'caminho_db', 'abertura')");

        }
    }
echo json_encode(["success" => true, "message" => "Chamado #$id_chamado aberto com sucesso"]);
}else{
    echo json_encode(["success" => false, "message" => "Erro: " . $conn->error]);
}