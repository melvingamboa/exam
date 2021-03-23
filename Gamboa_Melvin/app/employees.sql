
SELECT 
    A.name,
    A.date_hired,
    B.department,
    C.salary FROM employees A
JOIN departments B
    ON B.id = A.department_id
JOIN salary C 
    ON C.id = A.salary_id
WHERE C.salary >= 20000
    ;


SELECT 
	A.name,
    A.date_hired,
    B.department,
    C.salary FROM employees A
JOIN departments B
	ON B.id = A.department_id
JOIN salary C 
	ON C.id = A.salary_id
WHERE YEAR(A.date_hired)  BETWEEN 2017 AND 2018
;


SELECT 
	A.name,
    A.date_hired,
    B.department,
    C.salary FROM employees A
JOIN departments B
	ON B.id = A.department_id
JOIN salary C 
	ON C.id = A.salary_id
WHERE YEAR(A.date_hired)  >= 2018 AND B.id = 3;