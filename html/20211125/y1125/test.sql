INSERT INTO Customers (CustomerName, ContactName, Address, City, PostalCode, Country)
VALUES ('Cardinal','Tom B. Erichsen','Skagen 21','Stavanger','4006','Norway');

UPDATE Customers
SET ContactName='Alfred Schmidt', City='Frankfurt'
WHERE CustomerID=1;

DELETE FROM Customers WHERE CustomerName='Alfreds Futterkiste';

SELECT CustomerName, City FROM Customers
WHERE CustomerName='Alfreds Futterkiste';