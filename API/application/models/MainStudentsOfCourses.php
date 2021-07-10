<?php

namespace application\models;

use application\core\Model;
use application\lib\Db;
use PDOException;
use PHPExcel;
use PHPExcel_IOFactory;
use PHPExcel_Style_Alignment;
use PHPExcel_Style_Border;
use PHPExcel_Style_Fill;
use PHPExcel_Style_NumberFormat;
use PHPExcel_Worksheet_PageSetup;

class MainStudentsOfCourses extends Model{

    public function getDataFormTable() {

        $sql = "SELECT * FROM studentsofcourses";
        $db = new Db();
        try {
            $data = $db->query($sql);
        }
        catch(PDOException $e) {
            echo "Read error: ".$e->getMessage();
        }
        return $data->fetchAll();
        
    }

    public function deleteRecord($index) {
        $db = new Db();
        $sql = "DELETE FROM studentsofcourses WHERE idStudent=$index";
        try {
            $db->query($sql);
        }
        catch(PDOException $e) {
            echo "Delete error: ".$e->getMessage();
        }
    }

    public function updateRecord($data) {

        $db = new Db();

        $idStudent = (int)$data['idStudent'];
        $idCourse = (int)$data['idCourse'];
        $idProfessor = (int)$data['idProfessor'];
        $note = (float)$data['note'];
        $sql = "UPDATE studentsofcourses SET idCourse = $idCourse, idProfessor = $idProfessor, noteStudent = $note WHERE idStudent = $idStudent;";
        try {
            $db->query($sql);
        }
        catch(PDOException $e) {
            echo "Update error: ".$e->getMessage();
        }
        $db = null;
    }

    public function generateReportExcel() {

        require_once 'application/Classes/PHPExcel.php';
        $pExcel = new PHPExcel();
        $db = new Db();

        /*Получение id и ФИО всех профессоров*/
        $sql = "SELECT idProfessor, nameProfessor FROM professor;";
        $dbh = $db->query($sql);

        $i=0;
        $idProfessors = array();
        $countStudents = array();
        $nameProfessors = array();
        $averageNote = array();
        while($data = $dbh->fetch()) {

            /*Получение кол-ва студентов у каждого профессора*/
            $id = $data['idProfessor'];
            $idProfessors[$i] = $id;
            $sql = "SELECT count(studentsofcourses.idStudent) FROM professor, studentsofcourses WHERE professor.idProfessor = studentsofcourses.idProfessor AND professor.idProfessor = $id;";
            $dbs = $db->query($sql);
            $countStudents[$i] = $dbs->fetch();
            $countStudents[$i] = $countStudents[$i][0];

            /*Получение ФИО профессоров*/
            $nameProfessors[$i] = $data['nameProfessor'];

            /*Получение среднего балла студентов профессора */
            $sql = "SELECT sum(noteStudent)/count(noteStudent) FROM studentsofcourses WHERE idProfessor = $id;";
            $dbs = $db->query($sql);
            $averageNote[$i] = $dbs->fetch();
            $averageNote[$i] = round($averageNote[$i][0], 3);
            ++$i;
        }
        /*Настройка и создание Excel-файла */
        
        //Создание и подключение листа
        $pExcel->setActiveSheetIndex(0);
        $aSheet = $pExcel->getActiveSheet();

        //Настройки формата страницы
        $aSheet->getPageSetup()->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_PORTRAIT);
        $aSheet->getPageSetup()->setPaperSize(PHPExcel_Worksheet_PageSetup::PAPERSIZE_A4);

        //Настройки полей
        $aSheet->getPageMargins()->setTop(1);
        $aSheet->getPageMargins()->setRight(0.75);
        $aSheet->getPageMargins()->setLeft(0.75);
        $aSheet->getPageMargins()->setBottom(1);

        //Настройки названия и шрифта
        $aSheet->setTitle('Загруженность профессоров');
        $aSheet->getStyle()->getFont()->setName('Arial');
        $aSheet->getStyle()->getFont()->setSize(14);

        /*Наполнение документа данными*/

        //Задание ширины столбцов
        $aSheet->getColumnDimension('A')->setWidth(15);
        $aSheet->getColumnDimension('B')->setWidth(25);
        $aSheet->getColumnDimension('C')->setWidth(18);
        $aSheet->getColumnDimension('D')->setWidth(22);

        //Создание заголоков листа
        $aSheet->mergeCells('A1:D1');
        $aSheet->getRowDimension('1')->setRowHeight(20);
        $aSheet->setCellValue('A1','CourseModel by MKovalyov');
        $aSheet->mergeCells('A3:C3');
        $aSheet->setCellValue('A3','Дата создания отчёта:');
        $date = date('d-m-y');
        $aSheet->setCellValue('D3',$date);
        $aSheet->getStyle('D3')->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_DATE_XLSX17);

        //Создание шапки таблицы
        $aSheet->setCellValue('A5', '№ профессора');
        $aSheet->setCellValue('B5', 'ФИО');
        $aSheet->setCellValue('C5', 'Кол-во студентов');
        $aSheet->setCellValue('D5', 'Средняя успеваемость');

        //Заполнение таблицы
        $i = 0;
        while(array_key_exists($i, $idProfessors)) {
            $aSheet->setCellValue('A'.($i+6), $idProfessors[$i]);
            $aSheet->setCellValue('B'.($i+6), $nameProfessors[$i]);
            $aSheet->setCellValue('C'.($i+6), $countStudents[$i]);
            $aSheet->setCellValue('D'.($i+6), $averageNote[$i]);
            ++$i;
        }

        /*Создание стилей */
        $style_wrap = array(
            // рамки
            'borders'=>array(
                // внешняя рамка
                'outline' => array(
                    'style'=>PHPExcel_Style_Border::BORDER_THICK,
                    'color' => array(
                        'rgb'=>'006464'
                    )
                ),
                // внутренняя
                'allborders'=>array(
                    'style'=>PHPExcel_Style_Border::BORDER_THIN,
                    'color' => array(
                        'rgb'=>'CCCCCC'
                    )
                )
            )
        );

        // Стили для верхней надписи (первая строка)
        $style_header = array(
            // Шрифт
            'font'=>array(
                'bold' => true,
                'name' => 'Times New Roman',
                'size' => 15,
                'color'=>array(
                    'rgb' => '006464'
                )
            ),
            // Выравнивание
            'alignment' => array(
                'horizontal' => PHPExcel_STYLE_ALIGNMENT::HORIZONTAL_CENTER,
                'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER,
            ),
            // Заполнение цветом
            'fill' => array(
                'type' => PHPExcel_Style_Fill::FILL_SOLID,
                'color'=>array(
                    'rgb' => '99CCCC'
                )
            ),
            'borders'=>array(
                'bottom'=>array(
                    'style'=>PHPExcel_Style_Border::BORDER_THIN,
                    'color' => array(
                        'rgb'=>'006464'
                    )
                )
            )
        );

        // Стили для текта возле даты
        $style_tdate = array(
            // выравнивание
            'alignment' => array(
                'horizontal' => PHPExcel_STYLE_ALIGNMENT::HORIZONTAL_RIGHT,
            ),
            // заполнение цветом
            'fill' => array(
                'type' => PHPExcel_STYLE_FILL::FILL_SOLID,
                'color'=>array(
                    'rgb' => 'EEEEEE'
                )
            ),
            // рамки
            'borders' => array(
                'right' => array(
                    'style'=>PHPExcel_Style_Border::BORDER_NONE
                )
            )
        );

        // Стили для даты
        $style_date = array(
            // заполнение цветом
            'fill' => array(
                'type' => PHPExcel_STYLE_FILL::FILL_SOLID,
                'color'=>array(
                    'rgb' => 'EEEEEE'
                )
            ),
            // рамки
            'borders' => array(
                'left' => array(
                    'style'=>PHPExcel_Style_Border::BORDER_NONE
                )
            ),
        );

        // Стили для шапки таблицы (пятая строка)
        $style_hprice = array(
            // выравнивание
            'alignment' => array(
            'horizontal' => PHPExcel_STYLE_ALIGNMENT::HORIZONTAL_CENTER,
            ),
            // заполнение цветом
            'fill' => array(
                'type' => PHPExcel_STYLE_FILL::FILL_SOLID,
                'color'=>array(
                    'rgb' => 'CFCFCF'
                )
            ),
            // шрифт
            'font'=>array(
                'bold' => true,
                /* 'italic' => true, */
                'name' => 'Times New Roman',
                'size' => 10
            ),
        );

        //Стили для данных
        $style_price = array(
            'alignment' => array(
            'horizontal' => PHPExcel_STYLE_ALIGNMENT::HORIZONTAL_LEFT,
            )
        );

        /* Применение стилей */
        $aSheet->getStyle('A1:D'.($i+5))->applyFromArray($style_wrap);
        $aSheet->getStyle('A1:D1')->applyFromArray($style_header);
        $aSheet->getStyle('A3:C3')->applyFromArray($style_tdate);
        $aSheet->getStyle('D3')->applyFromArray($style_date);
        $aSheet->getStyle('A5:D5')->applyFromArray($style_hprice);
        $aSheet->getStyle('A6:D'.($i+5))->applyFromArray($style_price);



        /*Сохранение документа */
        $objWriter = PHPExcel_IOFactory::createWriter($pExcel, 'Excel2007');
        $objWriter->save('report.xlsx');

    }

}