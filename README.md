## QuickSort
#### in all languages I know
Inspired by: [geohots mergesorts](https://github.com/geohot/mergesorts)

### Planned languages
- C#
- Python
- JavaScript
- PHP
- Julia

##### Maybe:
- C
- Go
- Lua
- Bash

##### Done:
- C++


### Requirements
- Generic QuickSort() function, that accepts an array/list/vector/whatever 
- Sorts in place (no extra arrays)
- Prints time taken to sort the array
- Gets the array to sort from a JSON array (from data.JSON if possible)
- Store timing results in timing.JSON (if possible)

### Results
##### Specs for testing:
- time is average of atleast 1000 sortings
- array is 1000 numbers in range (-100, 100)
- all ran on same computer
- pseudo-code for timing:
```
for 1000 times:
	arr = start_array
	start_timer()
	quicksort(arr)
	stop_timer()
```

##### Testing results:
- **C++**		0.0001739s
- **Python**	0.0046754s