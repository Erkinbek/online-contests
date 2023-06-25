"""
 If all the numbers from 1 to 1000 (one thousand) inclusive were written out in words, how many letters would be used?
 https://projecteuler.net/problem=17
 
 Erkin Pardayev 25.06.2023
 https://github.com/Erkinbek/online-contests
 """

def number_to_words(n):
    # Define word representations for numbers up to 19
    ones = ["", "one", "two", "three", "four", "five", "six", "seven", "eight", "nine",
            "ten", "eleven", "twelve", "thirteen", "fourteen", "fifteen", "sixteen",
            "seventeen", "eighteen", "nineteen"]
    # Define word representations for tens
    tens = ["", "", "twenty", "thirty", "forty", "fifty", "sixty", "seventy", "eighty", "ninety"]

    if n == 1000:
        return "one thousand"
    elif n >= 100:
        hundreds_digit = n // 100
        tens_digit = (n // 10) % 10
        ones_digit = n % 10
        words = ones[hundreds_digit] + " hundred"
        if tens_digit > 1:
            words += " and " + tens[tens_digit] + " " + ones[ones_digit]
        elif tens_digit == 1:
            words += " and " + ones[tens_digit * 10 + ones_digit]
        elif ones_digit > 0:
            words += " and " + ones[ones_digit]
        return words
    elif n >= 20:
        tens_digit = n // 10
        ones_digit = n % 10
        return tens[tens_digit] + " " + ones[ones_digit]
    else:
        return ones[n]

def count_letters_in_numbers():
    total_letters = 0
    for i in range(1, 1001):
        words = number_to_words(i)
        # Remove spaces and hyphens from the words and count the remaining letters
        letters = len(words.replace(" ", "").replace("-", ""))
        total_letters += letters
    return total_letters

total_letters = count_letters_in_numbers()
print("Total letters used:", total_letters)
