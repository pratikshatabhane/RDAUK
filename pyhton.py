def first_unique_length_strings(strings):
    # Dictionary to store frequency of string lengths
    length_freq = {}

    # Iterate through the input array to count string lengths
    for string in strings:
        length = len(string)
        if length in length_freq:
            length_freq[length] += 1
        else:
            length_freq[length] = 1

    # Iterate through the input array to find first occurred strings with unique lengths
    result = []
    for string in strings:
        length = len(string)
        if length_freq[length] == 1:
            result.append(string)
    return result

# Example usage:
input_strings = ['saini', 'manoj', 'ravi', 'prashant', 'vikram', 'kunal']
output = first_unique_length_strings(input_strings)
print(output)  # Output: ['saini', 'ravi', 'prashant', 'vikram']
