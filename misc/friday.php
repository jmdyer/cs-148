<?php
include "top.php";
?>

<!-- **********************     Body section      ********************** -->
<?php
print '<body id="' . $path_parts['filename'] . '">';
//now print out each record
$query = 'SELECT fldFirstName, fldLastName, pmkStudentId, fldGender, fldStreetAddress, fldCity, fldState, fldZip FROM tblStudents
ORDER BY fldLastName, fldFirstName
LIMIT 10 OFFSET 1000';
$info2 = $thisDatabaseReader->select($query, "", 0, 0, 0, 0, false, false);
//$test = $thisDatabaseReader->testquery($query, $data, 1, 2, 0, 0, false, false); 
$columns = 8;
print '<h2>Total Records: ' . count($info2) . '</h2>';
print '<h3>SQL: ' . $query . '</h3>';
print '<table>';
$labels = array_keys($info2);
print '<p><pre>';
print_r($info2);

print '<p><pre>';
print_r($labels);

print '<tr>';
foreach ($labels as $key => $label) {
$camelCase = preg_split('/(?=[A-Z])/', substr($label, 3));
$message = "";
foreach ($camelCase as $one) {
       $message .= $one . " ";
}
print "<th> " .$message . "</th>";
}
print '</tr>';

//print '<tr><th></th></th>';
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