Problem
Find the common repeating odd elements in two sorted arrays.

Input Format
First line contains an integer representing size of the array A
Second line contains an Integers separated by a space, representing the elements of array A (A[0], A[1], ..., A[n-1]).
Third line contains an integer representing size of the array B
Fourth line contains an Integers separated by a space, representing the elements of array B (B[0], B[1], ..., B[m-1]).

Output Format
Print a single line containing the odd elements that are common to both arrays, separated by a space, in ascending order.
If no common odd elements are found, output "No common odd elements found."

Sample Inputs & Outputs
Sample Input 1

5
1 2 3 4 5
5
3 4 5 6 7

Sample Output 1

3 5

Sample Input 2

4
2 4 6 8
4
1 3 5 7

Sample Output 2

No common odd elements found.

Constraints
The length of arrays A and B are at most 10^5.
The elements of arrays A and B are integers in the range -10^9 to 10^9.