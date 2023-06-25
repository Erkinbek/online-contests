"""
 There exists exactly one Pythagorean triplet for which a + b + c = 1000.
 Find the product abc.
 https://projecteuler.net/problem=9
 
 Erkin Pardayev 25.06.2023
 https://github.com/Erkinbek/online-contests
"""

def find_pythagorean_triplet():
    for a in range(1, 1000):
        for b in range(a, 1000):
            c = 1000 - a - b
            if a * a + b * b == c * c:
                return a, b, c

a, b, c = find_pythagorean_triplet()
product = a * b * c

print("a =", a)
print("b =", b)
print("c =", c)
print("Product of a, b, and c:", product)