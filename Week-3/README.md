# 1. What is two dimentional array?
* A two-dimensional array is an array that contains other arrays as its elements. It's like a table with rows and columns.
--- 
# 2. What is inArray function?
* `in_array()` function checks if a value exists in an array. It returns `true` if found, `false` if not.
---
# 3. What is isArray funtion?
* `is_array()` function checks if a variable is an array. It returns `true` if the variable is an array, `false` otherwise.
---
# 4. What is default parameter?
* A default parameter is a value assigned to a function parameter that is used when no argument is provided for that parameter.
---
# 5. What is count function?
* The `count()` function returns the number of elements in an array.
---
# 6. What is difference between passing by value & reff.

| Feature                 | Passing by Value               | Passing by Reference     |
| ----------------------- | ------------------------------ | ------------------------ |
| Symbol                  | No symbol                      | `&` before parameter     |
| Changes Inside Function | Don't affect original variable | Affect original variable |
| Memory                  | Copy of variable is passed     | Memory address is passed |
| Original Variable       | Remains unchanged              | Can be modified          |

---

## Passing by Value (Default)

A copy of the variable is passed to the function. Changes inside the function don't affect the original variable.

```
function increment($num) {    
	$num = $num + 1;    
	echo "Inside: " . $num;
}

$value = 5;
increment($value);
echo "Outside: " . $value;
```

---

## Passing by Reference

A reference (address) to the variable is passed. The `&` symbol is used. Changes inside the function affect the original variable.

```
function increment(&$num) {    
	$num = $num + 1;    
	echo "Inside: " . $num;
}
$value = 5;
increment($value);
echo "Outside: " . $value;
```
