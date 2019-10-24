# Write your MySQL query statement below
DELETE t1 FROM Person t1, Person t2 
WHERE 
    t1.Email = t2.Email
    AND
    t1.Id > t2.Id
