<?php
include "top.php";
?>

<!-- **********************     Body section      ********************** -->
<?php
print '<body id="' . $path_parts['filename'] . '">';
//now print out each record
$query = 'SELECT tblStudents.fldFirstName, tblStudents.fldLastName, COUNT(tblEnrolls.fnkStudentID) AS "Number of Classes", AVG(fldGrade) AS "GPA" FROM tblStudents, tblEnrolls
WHERE tblStudents.pmkStudentId = tblEnrolls.fnkStudentId 
AND tblStudents.fldState = "VT" 
AND tblEnrolls.fldGrade > (SELECT AVG(fldGrade) from tblEnrolls INNER JOIN tblStudents ON tblStudents.pmkStudentId = tblEnrolls.fnkStudentID WHERE tblStudents.fldState = "VT")
GROUP BY tblEnrolls.fnkStudentId
ORDER BY tblEnrolls.fldGrade DESC';
$info2 = $thisDatabaseReader->select($query, "", 1, 0, 8, 1, false, false);
$columns = 4;
print '<h2>Total Records: ' . count($info2) . '</h2>';
print '<h3>SQL: ' . $query . '</h3>';
print '<table>';
print '<tr><th>First Name</th><th>Last Name</th><th>Number of Classes</th><th>GPA</th></tr>';
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