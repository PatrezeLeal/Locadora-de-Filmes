<?php
include('conexao.php');
include('verificacao.php');

$idaluguel = $_POST['idaluguel'];
$nomeCliente = $_POST['nomeCliente'];
$idFilmeEscolhido = $_POST['nomeFilme'];
$dataLocacao = $_POST['data'];

$update_locacao = "UPDATE aluguel
                    SET idfilme = '$idFilmeEscolhido', dataaluguel = '$dataLocacao'
                    WHERE idaluguel = '$idaluguel'";
$query_update = mysqli_query($conexao, $update_locacao);

if ($query_update) {
    echo "<script>alert('Locação Atualizada')</script>";
    echo "<script>window.location.href='lista_locacao.php'</script>";
}else {
    echo "<script>alert('Locação não pode ser atualizada')</script>";
    echo "<script>window.location.href='lista_locacao.php'</script>";
}
?>