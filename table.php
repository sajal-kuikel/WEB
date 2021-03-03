<?php
class TableGenerator {

    public $headings;
    public $rows = [];

public function setHeadings($headings) {
    $this->headings = $headings;
}

public function addRow($row) {
$this->rows[] = $row;

}

public function getHTML() {
$result = '<table>';
$result = $result . '<thead>'
;
$result = $result . '<tr>'
;

foreach ($this->headings as $heading) {
$result = $result . '<th>' . $heading . '</th>'
;

}
$result = $result . '</tr>'
;
$result = $result . '</thead>';
$result = $result . '<tbody>'
;
foreach ($this->rows as $row) {
$result = $result . '<tr>'
;
foreach ($row as $cell) {
$result = $result . '<td>' . $cell . '</td>'
;

}
$result = $result . '</tr>'
;

}
$result = $result . '</tbody>'
;
$result = $result . '</table>'
;

return $result
;

}
}
class Users {
    public $fname;
    public $sname;
    public $age;    
    }

$p1 = new Users();
$p1->fname = 'Sajal';
$p1->sname = 'Kuikel';
$p1->age = '500';

$tableGenerator = new TableGenerator();
$tableGenerator->setHeadings(['First Name', 'Surname', 'Age']);

$tableGenerator->addRow($p1);

echo $tableGenerator->getHTML();

?>