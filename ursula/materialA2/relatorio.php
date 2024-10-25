<?php
require_once "conect.php";
require 'dompdf/autoload.inc.php';
use Dompdf\Dompdf;
use Dompdf\Options;

// Configurar opções do DOMPDF
$options = new Options();

// Permite usar CSS e fontes externas
$options->set('isRemoteEnabled', true); 
$dompdf = new Dompdf($options);

// HTML inicial
$dados = '
<html>
<head>
<link rel="StyleSheet" type="Text/css" href="estilo.css">
<style>
body
 { font-family: Arial, sans-serif; }
h1
{
	color:#a1887f;
}
table {
  border-collapse: collapse;
  width: 100%;
}
td,th {
  text-align: left;
  padding: 10px;
}
tr:nth-child(even)
	{background-color: #f2f2f2}
thead 
{
  background-color: #a1887f;
  color: white;
}
</style>
</head>
<body>
';

$dados .= "<h1 style='text-align: center;text-decoration: underline;'> Relatorio de clientes </h1> ";
$dados .= "<h2 style='text-align: center;'> Viajando na maionese <img src='http://localhost/material/mala02.png' height='35' width='40'> </h2>";

$dados .= "<table>
        <thead>
          <tr>
          <th>ID</th>
          <th>CPF</th>
          <th>Nome</th>
			    <th>Data nascimento </th>             
          </tr>
        </thead>
        <tbody>";
        
  $sql = "SELECT id,CPF,nomeCliente,dataNasc FROM clientes";
  $resultado = mysqli_query($conexao,$sql); 
  while($linha = mysqli_fetch_assoc($resultado))
  {
	  $dados .= "<tr>";
    $dados .= '<td>' . $linha['id'] . '</td>';
	  $dados .= '<td>'. $linha['CPF'] . '</td>'; 
	  $dados .= '<td>' . $linha['nomeCliente'] . '</td>'; 
	  $dataNasc = date('d/m/Y',strtotime($linha['dataNasc']));
	  $dados .= '<td>' .$dataNasc . '</td>';
	  $dados .= "</tr>";     
  }       
	$dados .= "</tbody>";
	$dados .= "</table>";
	$dados .= "</body> </html>";


// Carrega o HTML no DOMPDF
$dompdf->loadHtml($dados);
// Define tamanho e orientação do papel
$dompdf->setPaper('A4', 'portrait');

// Renderizar o PDF
$dompdf->render();

// Enviar o PDF para o navegador
$dompdf->stream("relatorio.pdf", ["Attachment" => true]); 
// Attachment false para exibir no navegador
?>