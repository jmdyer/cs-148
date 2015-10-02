SELECT tblTeachers.fldFirstName, tblTeachers.fldLastName, COUNT(fnkStudentId) AS "total", fldSalary, fldSalary/COUNT(fnkStudentId) AS "IBB Value" FROM tblTeachers, tblSections, tblEnrolls
WHERE tblTeachers.pmkNetId = tblSections.fnkTeacherNetId
AND tblSections.fldCRN = tblEnrolls.fnkSectionId
AND fldType <> "LAB"
GROUP BY tblTeachers.fldLastName, tblTeachers.fldFirstName
ORDER BY `IBB Value` ASC