def unique_chars(das_string):

    for char in das_string:
        if das_string.count(char) > 1:
            return False
    else:
        return True


assert unique_chars("I love bacon") == False
assert unique_chars("Weird") == True 
assert unique_chars("My name is mud") == False
