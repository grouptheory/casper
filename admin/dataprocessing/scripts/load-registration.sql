USE CASPER;

CREATE OR REPLACE VIEW REGISTRATION_VIEW AS 
       SELECT Initials, SSN, Department, Course, Section, Year, Semester, Grade from TEMP;

INSERT INTO REGISTRATION (Offering_ID, Student_ID, Grade)
SELECT OFFERING.ID, STUDENT.ID, REGISTRATION_VIEW.Grade
FROM COURSE, OFFERING, STUDENT, REGISTRATION_VIEW
WHERE (REGISTRATION_VIEW.Department=COURSE.Department AND
       REGISTRATION_VIEW.Course=COURSE.Number AND
       OFFERING.Course_ID=COURSE.ID AND
       REGISTRATION_VIEW.Section=OFFERING.Section AND
       REGISTRATION_VIEW.Year=OFFERING.Year AND
       REGISTRATION_VIEW.Semester=OFFERING.Semester AND
       REGISTRATION_VIEW.Initials=STUDENT.Initials AND
       REGISTRATION_VIEW.SSN=STUDENT.SSN AND
	(OFFERING.ID, STUDENT.ID) NOT IN (SELECT Offering_ID, Student_ID FROM REGISTRATION));

UPDATE 
REGISTRATION
INNER JOIN OFFERING ON REGISTRATION.Offering_ID=OFFERING.ID
INNER JOIN STUDENT ON REGISTRATION.Student_ID=STUDENT.ID
INNER JOIN REGISTRATION_VIEW ON (REGISTRATION_VIEW.Section=OFFERING.Section AND
                                 REGISTRATION_VIEW.Year=OFFERING.Year AND
                                 REGISTRATION_VIEW.Semester=OFFERING.Semester AND
                                 REGISTRATION_VIEW.Initials=STUDENT.Initials AND
                                 REGISTRATION_VIEW.SSN=STUDENT.SSN)
INNER JOIN COURSE ON (REGISTRATION_VIEW.Department=COURSE.Department AND
      	   	      REGISTRATION_VIEW.Course=COURSE.Number AND
		      OFFERING.Course_ID=COURSE.ID)
SET REGISTRATION.Grade=REGISTRATION_VIEW.Grade; 
