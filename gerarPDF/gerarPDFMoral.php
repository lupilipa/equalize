<?php
$caminho = __DIR__;
require($caminho . '\..\fpdf\fpdf.php');
require('../logica/models/Ajuda.class.php'); 

// Criando uma instância da classe Ajuda
$ajudas = new Ajuda();
$dadosAjuda = $ajudas->listarAjudaMoral();

// Criando o PDF
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',12);

// Adicionando logo (centralizado)
$imagePath = "C:/xampp/htdocs/equalize/views/media/logorosa.png";
$pdf->Image($imagePath, ($pdf->GetPageWidth() - 45) / 2, 10, 50, 40, 'PNG'); // Centraliza a imagem
$pdf->Ln(25); // Espaço após a imagem
$pdf->Cell(0, 10 , utf8_decode("Relatório de Pedidos de Ajuda - Violência Moral"), 0 , 1, 'C'); // Título centralizado
$pdf->Ln(10); // Ajuste do espaço entre o título e a tabela

// Dados da tabela
$pdf->SetFont('Arial','',10);

foreach ($dadosAjuda as $row) {
    // Adicionando Id e Nome
    $pdf->Cell(20, 7, utf8_decode("Id: " . $row['id_violencia']), 0, 0, 'L');
    $pdf->Cell(0, 7, utf8_decode("Nome de Usuário: " . $row['nome']), 0, 1, 'L');

    // Perguntas e Respostas
    $pdf->Cell(140, 7, utf8_decode("Você já foi alvo de difamação, calúnia ou injúria?:"), 0, 0, 'L');
    $pdf->Cell(0, 7, utf8_decode($row['difamado']), 0, 1, 'L');

    $pdf->Cell(140, 7, utf8_decode("Essas ações afetaram sua reputação ou imagem pública? :"), 0, 0, 'L');
    $pdf->Cell(0, 7, utf8_decode($row['afetou_imagem']), 0, 1, 'L');

    $pdf->Cell(140, 7, utf8_decode("Quem é o responsável por essas ações?:"), 0, 0, 'L');
    $pdf->Cell(0, 7, utf8_decode($row['agressor']), 0, 1, 'L');

    $pdf->Cell(140, 7, utf8_decode("Você já sofreu algum tipo de perseguição moral ou pública?:"), 0, 0, 'L');
    $pdf->Cell(0, 7, utf8_decode($row['perseguido']), 0, 1, 'L');

    $pdf->Cell(140, 7, utf8_decode("Você procurou ajuda jurídica ou relatou esses casos?:"), 0, 0, 'L');
    $pdf->Cell(0, 7, utf8_decode($row['procurou_ajuda']), 0, 1, 'L');

    $pdf->Cell(140, 7, utf8_decode("Esses atos continuam acontecendo atualmente?:"), 0, 0, 'L');
    $pdf->Cell(0, 7, utf8_decode($row['continua']), 0, 1, 'L');

    // Adicionando Data e Horário
    $pdf->Cell(140, 7, utf8_decode("Data: "), 0, 0, 'L');
    $pdf->Cell(0, 7, utf8_decode($row['data']), 0, 1, 'L');

    $pdf->Cell(140, 7, utf8_decode("Horário: "), 0, 0, 'L');
    $pdf->Cell(0, 7, utf8_decode($row['horario']), 0, 1, 'L');

    $pdf->Ln(15 ); // Espaço entre registros
}

// Saída do PDF no navegador (sem download)
$pdf->Output('I', 'relatorio_ajuda_moral.pdf');
?>
