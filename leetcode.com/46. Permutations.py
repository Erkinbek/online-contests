"""
Given an array nums of distinct integers, return all the possible permutations.
You can return the answer in any order.

https://leetcode.com/problems/permutations/

Erkin Pardayev 12.08.2023
https://github.com/Erkinbek/online-contests
"""
class Solution:
    def permute(self, nums: List[int]) -> List[List[int]]:
        if len(nums) <= 1:
            yield nums
            return
        for perm in self.permute(nums[1:]):
            for i in range(len(nums)):
                yield perm[:i] + nums[0:1] + perm[i:]
