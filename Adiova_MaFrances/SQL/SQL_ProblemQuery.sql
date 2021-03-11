/*SQL - Problem A*/
SELECT * FROM dbo.employees
INNER JOIN dbo.departments on dbo.employees.department_id = dbo.departments.id
INNER JOIN dbo.salary on dbo.employees.salary_id = dbo.salary.id
WHERE dbo.salary.salary = (SELECT Max(dbo.salary.salary) from dbo.salary);

/*SQL - Problem B*/
SELECT * FROM dbo.employees
WHERE dbo.employees.date_hired <'2019'
AND dbo.employees.date_hired >= '2017' ;

/*SQL - Problem C*/
SELECT * FROM dbo.employees
INNER JOIN dbo.departments on dbo.employees.department_id = dbo.departments.id 
WHERE dbo.departments.department = 'IT'
AND dbo.employees.date_hired >= '2018';