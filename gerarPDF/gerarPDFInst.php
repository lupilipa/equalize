<?php
$caminho = __DIR__;
require($caminho . '\..\fpdf\fpdf.php');
require('../logica/models/Ajuda.class.php'); 

// Criando uma instância da classe Ajuda
$ajudas = new Ajuda();
$dadosAjuda = $ajudas->listarAjudaInstitucional();

// Criando o PDF
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',12);

// Adicionando logo (centralizado)
$imagePath = "C:/xampp/htdocs/equalize/views/media/logorosa.png";
$pdf->Image($imagePath, ($pdf->GetPageWidth() - 45) / 2, 10, 50, 40, 'PNG'); // Centraliza a imagem
$pdf->Ln(25); // Espaço após a imagem
$pdf->Cell(0, 10 , utf8_decode("Relatório de Pedidos de Ajuda - Violência Institucional"), 0 , 1, 'C'); // Título centralizado
$pdf->Ln(10); // Ajuste do espaço entre o título e a tabela

// Dados da tabela
$pdf->SetFont('Arial','',10);

foreach ($dadosAjuda as $row) {
    // Adicionando Id e Nome
    $pdf->Cell(20, 7, utf8_decode("Id: " . $row['id_violencia']), 0, 0, 'L');
    $pdf->Cell(0, 7, utf8_decode("Nome de Usuário: " . $row['nome']), 0, 1, 'L');

    // Perguntas e Respostas
    $pdf->Cell(140, 7, utf8_decode("Você já sofreu discriminação ou tratamento abusivo em algum serviço público/privado?:"), 0, 0, 'L');
    $pdf->Cell(0, 7, utf8_decode($row['discriminado']), 0, 1, 'L');

    $pdf->Cell(140, 7, utf8_decode("Em qual tipo de instituição isso ocorreu?:"), 0, 0, 'L');
    $pdf->Cell(0, 7, utf8_decode($row['instituicao']), 0, 1, 'L');

    $pdf->Cell(140, 7, utf8_decode("Você foi negligenciado(a) ou teve direitos negados?:"), 0, 0, 'L');
    $pdf->Cell(0, 7, utf8_decode($row['negligenciado']), 0, 1, 'L');

    $pdf->Cell(140, 7, utf8_decode("Você já fez uma denúncia sobre esse tratamento?:"), 0, 0, 'L');
    $pdf->Cell(0, 7, utf8_decode($row['ja_denunciou']), 0, 1, 'L');

    $pdf->Cell(140, 7, utf8_decode("Essas situações afetaram seu acesso a serviços ou direitos básicos?:"), 0, 0, 'L');
    $pdf->Cell(0, 7, utf8_decode($row['afetou_acesso']), 0, 1, 'L');

    $pdf->Cell(140, 7, utf8_decode("Como você descreveria sua confiança nas instituições atualmente?:"), 0, 0, 'L');
    $pdf->Cell(0, 7, utf8_decode($row['confianca']), 0, 1, 'L');

    // Adicionando Data e Horário
    $pdf->Cell(140, 7, utf8_decode("Data: "), 0, 0, 'L');
    $pdf->Cell(0, 7, utf8_decode($row['data']), 0, 1, 'L');

    $pdf->Cell(140, 7, utf8_decode("Horário: "), 0, 0, 'L');
    $pdf->Cell(0, 7, utf8_decode($row['horario']), 0, 1, 'L');

    $pdf->Ln(15 ); // Espaço entre registros
}

// Saída do PDF no navegador (sem download)
$pdf->Output('I', 'relatorio_ajuda_institucional.pdf');
?>
