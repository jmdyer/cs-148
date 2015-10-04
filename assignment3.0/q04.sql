SELECT fldCRN, tblStudents.fldFirstName, tblStudents.fldLastName FROM tblSections, tblEnrolls, tblStudents
WHERE tblSections.fldCRN = tblEnrolls.fnkSectionId
AND tblEnrolls.fnkStudentId = tblStudents.pmkStudentId
AND tblEnrolls.fnkCourseId = "392"
ORDER BY fldCRN, tblStudents.fldLastName, tblStudents.fldFirstName