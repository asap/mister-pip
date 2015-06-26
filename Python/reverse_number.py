import sys

def reverse(string):
    new_string = ''

    for letter in range(len(string), 0, -1):
        print len(string)
        print string.index(letter)
        new_string += string[len(string)-string.index(letter)-1]

    return new_string


for arg in sys.argv[1:]:
    print reverse(arg)