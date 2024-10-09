<?php
$caminho = __DIR__;
require($caminho . '\..\fpdf\fpdf.php');
require('../logica/models/Ajuda.class.php'); 

// Criando uma instância da classe Ajuda
$ajudas = new Ajuda();
$dadosAjuda = $ajudas->listarAjudaFinanceira();

// Criando o PDF
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',12);

// Adicionando logo (centralizado)
$imagePath = "C:/xampp/htdocs/equalize/views/media/logorosa.png";
$pdf->Image($imagePath, ($pdf->GetPageWidth() - 45) / 2, 10, 50, 40, 'PNG'); // Centraliza a imagem
$pdf->Ln(25); // Espaço após a imagem
$pdf->Cell(0, 10 , utf8_decode("Relatório de Pedidos de Ajuda - Violência Financeira"), 0 , 1, 'C'); // Título centralizado
$pdf->Ln(10); // Ajuste do espaço entre o título e a tabela

// Dados da tabela
$pdf->SetFont('Arial','',10);

foreach ($dadosAjuda as $row) {
    // Adicionando Id e Nome
    $pdf->Cell(20, 7, utf8_decode("Id: " . $row['id_violencia']), 0, 0, 'L');
    $pdf->Cell(0, 7, utf8_decode("Nome de Usuário: " . $row['nome']), 0, 1, 'L');

    // Perguntas e Respostas
    $pdf->Cell(140, 7, utf8_decode("Você tem controle sobre o seu próprio dinheiro ou salário?:"), 0, 0, 'L');
    $pdf->Cell(0, 7, utf8_decode($row['controle']), 0, 1, 'L');

    $pdf->Cell(140, 7, utf8_decode("Alguém impede você de trabalhar ou tomar decisões financeiras?:"), 0, 0, 'L');
    $pdf->Cell(0, 7, utf8_decode($row['impedido']), 0, 1, 'L');

    $pdf->Cell(140, 7, utf8_decode("Você tem acesso a recursos financeiros básicos (dinheiro, cartão, contas)?:"), 0, 0, 'L');
    $pdf->Cell(0, 7, utf8_decode($row['acesso']), 0, 1, 'L');

    $pdf->Cell(140, 7, utf8_decode("Quem controla suas finanças?:"), 0, 0, 'L');
    $pdf->Cell(0, 7, utf8_decode($row['controlador']), 0, 1, 'L');

    $pdf->Cell(140, 7, utf8_decode("Você já se sentiu obrigado(a) a entregar seu dinheiro para alguém?:"), 0, 0, 'L');
    $pdf->Cell(0, 7, utf8_decode($row['coagido']), 0, 1, 'L');

    $pdf->Cell(140, 7, utf8_decode("Você já procurou ajuda ou orientação financeira? :"), 0, 0, 'L');
    $pdf->Cell(0, 7, utf8_decode($row['procurou_ajuda']), 0, 1, 'L');

    // Adicionando Data e Horário
    $pdf->Cell(140, 7, utf8_decode("Data: "), 0, 0, 'L');
    $pdf->Cell(0, 7, utf8_decode($row['data']), 0, 1, 'L');

    $pdf->Cell(140, 7, utf8_decode("Horário: "), 0, 0, 'L');
    $pdf->Cell(0, 7, utf8_decode($row['horario']), 0, 1, 'L');

    $pdf->Ln(15 ); // Espaço entre registros
}

// Saída do PDF no navegador (sem download)
$pdf->Output('I', 'relatorio_ajuda_financeira.pdf');
?>
