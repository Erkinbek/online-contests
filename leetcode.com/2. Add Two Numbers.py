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


class Solution:
    def addTwoNumbers(self, l1: Optional[ListNode], l2: Optional[ListNode]) -> Optional[ListNode]:
        # Helper function to create a linked list from a list of digits
        def create_linked_list_from_list(lst):
            dummy_head = ListNode()
            current = dummy_head
            for digit in lst:
                current.next = ListNode(digit)
                current = current.next
            return dummy_head.next

        # Convert the linked lists to lists of digits
        number1 = []
        while l1:
            number1.append(l1.val)
            l1 = l1.next

        number2 = []
        while l2:
            number2.append(l2.val)
            l2 = l2.next

        # Calculate the sum as lists of digits
        carry = 0
        result = []
        i, j = 0, 0
        while i < len(number1) or j < len(number2) or carry:
            num1 = number1[i] if i < len(number1) else 0
            num2 = number2[j] if j < len(number2) else 0
            total = num1 + num2 + carry
            carry = total // 10
            result.append(total % 10)  # Append at the end
            i += 1
            j += 1

        # Create the resultant linked list
        return create_linked_list_from_list(result)
