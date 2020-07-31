## QuickSorts
#### in all languages I know
Inspired by: [geohots mergesorts](https://github.com/geohot/mergesorts)

### Planned languages
- [x] C++
- [x] C#
- [x] Python
- [x] JavaScript
- [x] PHP
- [x] Julia

##### Maybe:
- [ ] C
- [ ] Go
- [ ] Lua
- [ ] Bash
- [ ] Java

### Requirements
- Generic QuickSort() function, that accepts an array/list/vector/whatever 
- Sorts in place (no extra arrays)
- Prints time taken to sort the array

### Results
##### Specs for testing:
- Time is average of at least 1000 sortings
- Array is 1000 numbers in range (-100, 100)
- All ran on same computer
- Pseudo-code for timing:
```
for 1000 times:
	arr = start_array
	start_timer()
	quicksort(arr)
	stop_timer()
```

##### Testing results:
 | Language   | seconds   | microseconds |
 | :---   | :---: | :---: |
 | C++        | 0.0000336 | 33.6         |
 | Julia	  | 0.0000367 | 36.7		 |
 | JavaScript | 0.0001384 | 138.4        |
 | C#         | 0.0005233 | 532.3        |
 | PHP		  | 0.0022380 | 2238.0		 |
 | Python     | 0.0046754 | 4675.4       |