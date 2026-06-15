<?php

namespace App\Service;

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Style\Border;
use PhpOffice\PhpSpreadsheet\Style\Fill;
use PhpOffice\PhpSpreadsheet\Style\Alignment;
use Symfony\Component\HttpFoundation\Response;

class ExcelExportService
{
    public function exportWithHeaders(array $headers, array $data, string $filename): Response
    {
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        // Define styles
        $headerStyle = [
            'font' => [
                'bold' => true,
                'color' => ['argb' => 'FF000000'],
            ],
            'fill' => [
                'fillType' => Fill::FILL_SOLID,
                'color' => ['argb' => 'FFFFFFFF'],
            ],
            'alignment' => [
                'horizontal' => Alignment::HORIZONTAL_CENTER,
                'vertical' => Alignment::VERTICAL_CENTER,
            ],
            'borders' => [
                'allBorders' => [
                    'borderStyle' => Border::BORDER_THIN,
                    'color' => ['argb' => 'FFC0C0C0'],
                ],
            ],
        ];

        $dataStyle = [
            'font' => [
                'color' => ['argb' => 'FF000000'], // Black text
            ],
            'alignment' => [
                'horizontal' => Alignment::HORIZONTAL_CENTER,
                'vertical' => Alignment::VERTICAL_CENTER,
            ],
            'borders' => [
                'allBorders' => [
                    'borderStyle' => Border::BORDER_THIN,
                    'color' => ['argb' => 'FFC0C0C0'],
                ],
            ],
        ];

        // Populate headers
        $currentRow = 1;
        foreach ($headers as $headerRow) {
            $sheet->fromArray($headerRow, null, 'A' . $currentRow);
            $sheet->getStyle('A' . $currentRow . ':AD' . $currentRow)->applyFromArray($headerStyle);
            $currentRow++;
        }

        // Merge cells for main headers
        $this->mergeHeaderCells($sheet);

        // Populate data
        foreach ($data as $row) {
            $sheet->fromArray($row, null, 'A' . $currentRow);
            $sheet->getStyle('A' . $currentRow . ':AD' . $currentRow)->applyFromArray($dataStyle);
            $currentRow++;
        }

        // Merge vertically cells
        $this->mergeVerticalCells($sheet, 2, $currentRow - 1, range('A', 'H'));

        $writer = new Xlsx($spreadsheet);
        $response = new Response();
        $response->headers->set('Content-Type', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        $response->headers->set('Content-Disposition', 'attachment;filename="' . $filename . '"');
        $response->headers->set('Cache-Control', 'max-age=0');

        $tempFile = tempnam(sys_get_temp_dir(), 'export');
        $writer->save($tempFile);
        $response->setContent(file_get_contents($tempFile));
        unlink($tempFile);

        return $response;
    }

    private function mergeHeaderCells($sheet)
    {
        $sheet->mergeCells('A1:A2'); // Numéro
        $sheet->mergeCells('B1:B2'); // Civilité
        $sheet->mergeCells('C1:C2'); // Nom
        $sheet->mergeCells('D1:D2'); // Prénom(s)
        $sheet->mergeCells('E1:E2'); // Date de naissance
        $sheet->mergeCells('F1:F2'); // Téléphone
        $sheet->mergeCells('G1:G2'); // Email
        $sheet->mergeCells('H1:H2'); // Lieu d'affectation
        $sheet->mergeCells('I1:I2'); // Lieu d'affectation 2
        $sheet->mergeCells('J1:J2'); // Lieu d'affectation 3
        $sheet->mergeCells('K1:K2'); // Poste souhaiter 2
        $sheet->mergeCells('L1:L2'); // Poste souhaiter 3

        // Diplome
        $sheet->mergeCells('M1:O1'); // Diplome header

        // Certification
        $sheet->mergeCells('P1:R1'); // Certification header

        // Experiences
        $sheet->mergeCells('S1:Z1'); // Experiences header

        // Competences
        $sheet->mergeCells('AA1:AB1'); // Competences header

        // A selectionner
        $sheet->mergeCells('AC1:AD1'); // A selectionner header
    }

    private function mergeVerticalCells($sheet, int $startRow, int $endRow, array $columns)
    {
        foreach ($columns as $column) {
            $mergeStart = $startRow;

            for ($row = $startRow; $row <= $endRow; $row++) {
                $currentCellValue = $sheet->getCell($column . $row)->getValue();
                $previousCellValue = $sheet->getCell($column . ($row - 1))->getValue();

                if ($currentCellValue !== null && $currentCellValue !== '') {
                    if ($mergeStart !== $row - 1) {
                        $sheet->mergeCells($column . $mergeStart . ':' . $column . ($row - 1));
                    }
                    $mergeStart = $row;
                }
            }

            if ($mergeStart !== $endRow) {
                $sheet->mergeCells($column . $mergeStart . ':' . $column . $endRow);
            }
        }
    }
}
