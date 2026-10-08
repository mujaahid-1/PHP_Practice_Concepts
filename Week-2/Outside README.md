# 1. What is while loop?
##### A while loop is a control flow statement that repeatedly executes a block of code as long as a specified condition is true. The loop checks the condition before each iteration and stops executing when the condition becomes false.
## Facts about while loop
- Condition-based: Executes only while the condition evaluates to true; stops immediately when it becomes false.
- Pre-check: The condition is evaluated before each iteration, meaning the code block may never execute if the condition is false from the start.
- Infinite loop risk: If the condition never becomes false, the loop runs indefinitely unless deliberately interrupted.
- Simple syntax: Generally consists of the keyword `while`, a condition in parentheses, and a code block in braces or indentation.
- Break and continue: Can be controlled using `break` (exit immediately) or `continue` (skip to the next iteration).
- ---
# 2. WHat is Do While Loop?
##### A do while loop is a control flow statement that executes a block of code first, then checks a condition to determine if it should repeat. Unlike a regular while loop, the code block runs at least once regardless of whether the condition is true.
## Facts about Do while loop.
- Post-check condition: The condition is evaluated after each iteration, not before, ensuring the code block executes a minimum of one time.
- Guaranteed execution: Even if the condition is false from the start, the loop body runs at least once.
- Useful for user input validation: Ideal for scenarios like "ask the user for input, then check if it's valid" without needing to repeat code.
---
# 3. WHat is for loop ?
##### A for loop is a control flow statement that repeats a block of code a specific number of times. It combines initialization, condition checking, and increment/decrement into a single statement, making it ideal when you know exactly how many iterations you need.
## Facts about the for loop
- Predetermined iterations: Used when you know in advance how many times the loop should execute.
- Three-part structure: Most for loops consist of initialization (set starting value), condition (check if loop should continue), and increment/decrement (update the counter after each iteration).
- Counter-based: Typically uses a counter variable that increases or decreases with each iteration.
- Compact syntax: All loop control logic is written in one line, making the code cleaner and easier to read than while loops for fixed iterations.
---
# 4. What is collection array?
A collection array (also called an indexed array) stores multiple values with numeric indices starting from 0.

- Numeric indexing: Each element is accessed by its position number (0, 1, 2, 3, etc.).
- Mixed data types: Can store different types of data in the same array—numbers, strings, decimals, etc.
- Sequential access: Elements are organized in order and accessed by their index position.
- Created with array(): Uses the `array()` function to initialize the collection with values.
- Element assignment: Individual elements are assigned using the syntax `$array[index] = value`.
- var_dump() display: The `var_dump()` function shows the array structure, data types, and all values in detail.
- Foreach iteration: The foreach loop iterates through each element sequentially without needing to manage the index manually.
- Linear storage: Values are stored in a linear sequence and retrieved in order.
---
# 5. What is Associative Array?
An associative array stores values with named keys instead of numeric indices, creating key-value pairs.

- Named keys: Each element is accessed using a descriptive string key (like "id", "name", "age") instead of numbers.
- Key-value pairs: Data is organized as `"key" => "value"` relationships.
- Semantic meaning: Keys describe what the value represents, making the code more readable and self-documenting.
- Created with array(): Uses the `array()` function with key => value syntax to define the pairs.
- Direct access: Elements are accessed using the syntax `$array[key]` with the key name in quotes or without depending on context.
- Foreach with key and value: The foreach loop can iterate using `foreach($array as $key => $value)` to access both the key and its corresponding value.
- Non-sequential storage: Keys don't have to be in any particular order and can be any string.
- Real-world modeling: Ideal for representing structured data like user information (id, name, age) or database records.