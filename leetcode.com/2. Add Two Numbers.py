"""
You are given two non-empty linked lists representing two non-negative integers. The digits are stored in reverse order,
and each of their nodes contains a single digit. Add the two numbers and return the sum as a linked list.

You may assume the two numbers do not contain any leading zero, except the number 0 itself.

Input: l1 = [2,4,3], l2 = [5,6,4]
Output: [7,0,8]
Explanation: 342 + 465 = 807.

https://leetcode.com/problems/add-two-numbers/

Erkin Pardayev 01.08.2023
https://github.com/Erkinbek/online-contests

"""

l1 = [2, 4, 3]
l2 = [5, 6, 4]

number1 = ""
number2 = ""

for x in l1:
    number1 = number1 + str(x)

for x in l2:
    number2 = number2 + str(x)

number3 = str(int(number1) + int(number2))

output = []

for i in reversed(number3):
    output.append(i)
