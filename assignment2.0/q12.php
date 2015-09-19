<?php
include "top.php";
?>

<!-- **********************     Body section      ********************** -->
<?php
print '<body id="' . $path_parts['filename'] . '">';
//now print out each record
$query = 'SELECT SUM(fldNumStudents - fldMaxStudents) FROM tblSections WHERE fldNumStudents>fldMaxStudents;';
$info2 = $thisDatabaseReader->select($query, "", 1, 0, 0, 1, false, false);
$columns = 2;
print '<h2>Total Records: ' . count($info2) . '</h2>';
print '<h3>SQL: ' . $query . '</h3>';
print '<table>';
$highlight = 0; // used to highlight alternate rows
foreach ($info2 as $rec) {
    $highlight++;
    if ($highlight % 2 != 0) {
        $style = ' odd ';
    } else {
        $style = ' even ';
    }
    print '<tr class="' . $style . '">';
    for ($i = 0; $i < $columns; $i++) {
        print '<td>' . $rec[$i] . '</td>';
    }
    print '</tr>';
}

// all done
print '</table>';
print '</aside>';
?>