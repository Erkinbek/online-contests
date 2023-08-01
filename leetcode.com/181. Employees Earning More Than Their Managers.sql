-- https://leetcode.com/problems/employees-earning-more-than-their-managers/
--
-- Erkin Pardayev 01.08.2023
-- https://github.com/Erkinbek/online-contests
--
-- +-------------+---------+
-- | Column Name | Type    |
-- +-------------+---------+
-- | id          | int     |
-- | name        | varchar |
-- | salary      | int     |
-- | managerId   | int     |
-- +-------------+---------+
-- id is the primary key column for this table.
-- Each row of this table indicates the ID of an employee, their name, salary, and the ID of their manager.
--
--
--
-- Write an SQL query to find the employees who earn more than their managers.
--
-- Return the result table in any order.
--
-- The query result format is in the following example.
SELECT
	e1.NAME AS Employee
FROM
	Employee e1
	INNER JOIN Employee e2 ON e1.managerId = e2.id
WHERE
	e1.salary > e2.salary;