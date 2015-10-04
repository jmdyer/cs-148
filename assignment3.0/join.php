<!DOCTYPE html>

<html lang="en">
    <head>
        <title>Assignment 3 SQL Joins</title>
        <meta charset="utf-8">
        <meta name="Joelle Dyer" content="assignment 3">
        <meta name="description" content="sql join statements">
        <link rel="stylesheet" href="style.css" type="text/css" media="screen">
       
    </head>

    <body>
        <h3>Joelle Dyer, assignment 3.0</h3>
        <p>q01 <a href="../assignment3.0/q01.php">SQL:</a> <p class = "sql">SELECT distinct fldCourseName FROM tblCourses, tblEnrolls
WHERE tblCourses.pmkCourseId = tblEnrolls.fnkCourseId  
AND tblEnrolls.fldGrade = '100'
ORDER BY fldCourseName ASC</p></p>
        <p>q02 <a href="../assignment3.0/q02.php">SQL:</a> <p class = "sql">SELECT distinct fldDays, fldStart, fldStop FROM tblSections, tblTeachers
WHERE tblTeachers.pmkNetId = tblSections.fnkTeacherNetId  
AND tblTeachers.fldLastName = "Snapp"
ORDER BY fldStart ASC</p></p>
        <p>q03 <a href="../assignment3.0/q03.php">SQL:</a> <p class = "sql">SELECT distinct tblCourses.fldCourseName, fldDays, fldStart, fldStop FROM tblSections, tblCourses, tblTeachers
WHERE tblCourses.pmkCourseId = tblSections.fnkCourseId
AND tblTeachers.pmkNetId = tblSections.fnkTeacherNetId  
AND tblTeachers.fldLastName = "Horton"
ORDER BY fldStart ASC</p></p>
        <p>q04 <a href="../assignment3.0/q04.php">SQL:</a> <p class = "sql">SELECT fldCRN, tblStudents.fldFirstName, tblStudents.fldLastName FROM tblSections, tblEnrolls, tblStudents
WHERE tblSections.fldCRN = tblEnrolls.fnkSectionId
AND tblEnrolls.fnkStudentId = tblStudents.pmkStudentId
AND tblEnrolls.fnkCourseId = "392"
ORDER BY fldCRN, tblStudents.fldLastName, tblStudents.fldFirstName</p></p>
        <p>q05 <a href="../assignment3.0/q05.php">SQL:</a> <p class = "sql">SELECT tblTeachers.fldFirstName, tblTeachers.fldLastName, COUNT(fnkStudentId) AS "total" FROM tblTeachers, tblSections, tblEnrolls
WHERE tblTeachers.pmkNetId = tblSections.fnkTeacherNetId
AND tblSections.fldCRN = tblEnrolls.fnkSectionId
AND fldType <> "LAB"
GROUP BY tblTeachers.fldLastName, tblTeachers.fldFirstName
ORDER BY `total`  DESC</p></p>
        <p>q06 <a href="../assignment3.0/q06.php">SQL:</a> <p class = "sql">SELECT fldFirstName, fldPhone, fldSalary from tblTeachers 
WHERE fldSalary < (SELECT avg(fldSalary) from tblTeachers)</p></p>
        <p>q07 <a href="../assignment3.0/q07.php">SQL:</a> <p class = "sql">SELECT tblStudents.fldFirstName, tblStudents.fldLastName, COUNT(tblEnrolls.fnkStudentID) AS "Number of Classes", AVG(fldGrade) AS "GPA" FROM tblStudents, tblEnrolls
WHERE tblStudents.pmkStudentId = tblEnrolls.fnkStudentId 
AND tblStudents.fldState = "VT" 
AND tblEnrolls.fldGrade > (SELECT AVG(fldGrade) from tblEnrolls INNER JOIN tblStudents ON tblStudents.pmkStudentId = tblEnrolls.fnkStudentID WHERE tblStudents.fldState = "VT")
GROUP BY tblEnrolls.fnkStudentId
ORDER BY tblEnrolls.fldGrade DESC</p></p>
        <p>q08 <a href="../assignment3.0/q08.php">SQL:</a> <p class = "sql">SELECT tblTeachers.fldFirstName, tblTeachers.fldLastName, COUNT(fnkStudentId) AS "total", fldSalary, fldSalary/COUNT(fnkStudentId) AS "IBB Value" FROM tblTeachers, tblSections, tblEnrolls
WHERE tblTeachers.pmkNetId = tblSections.fnkTeacherNetId
AND tblSections.fldCRN = tblEnrolls.fnkSectionId
AND fldType <> "LAB"
GROUP BY tblTeachers.fldLastName, tblTeachers.fldFirstName
ORDER BY `IBB Value` ASC</p></p>
    
    </body>
</html>