### Resources

    https://www.hackerrank.com/challenges/dynamic-array/problem?isFullScreen=true

Declare a 2-dimensional array, , of  empty arrays. All arrays are zero indexed.
Declare an integer, , and initialize it to .
There are  types of queries, given as an array of strings for you to parse:
Query: 1 x y
Let .
Append the integer  to .
Query: 2 x y
Let .
Assign the value  to .
Store the new value of  to an answers array.
Note:  is the bitwise XOR operation, which corresponds to the ^ operator in most languages. Learn more about it on Wikipedia.  is the modulo operator. 
Finally, size(arr[idx]) is the number of elements in arr[idx]
Function Description
Complete the dynamicArray function below.
dynamicArray has the following parameters: 
- int n: the number of empty arrays to initialize in  
- string queries[q]: query strings that contain 3 space-separated integers
Returns
int[]: the results of each type 2 query in the order they are presented