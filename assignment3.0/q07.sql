SELECT tblStudents.fldFirstName, tblStudents.fldLastName, COUNT(tblEnrolls.fnkStudentID) AS "Number of Classes", AVG(fldGrade) AS "GPA" FROM tblStudents, tblEnrolls
WHERE tblStudents.pmkStudentId = tblEnrolls.fnkStudentId 
AND tblStudents.fldState = "VT" 
AND tblEnrolls.fldGrade > (SELECT AVG(fldGrade) from tblEnrolls INNER JOIN tblStudents ON tblStudents.pmkStudentId = tblEnrolls.fnkStudentID WHERE tblStudents.fldState = "VT")
GROUP BY tblEnrolls.fnkStudentId
ORDER BY tblEnrolls.fldGrade DESC