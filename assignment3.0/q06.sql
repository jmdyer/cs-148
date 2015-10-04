SELECT fldFirstName, fldPhone, fldSalary from tblTeachers 
WHERE fldSalary < (SELECT avg(fldSalary) from tblTeachers)
