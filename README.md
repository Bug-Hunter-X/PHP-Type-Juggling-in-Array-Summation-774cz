# PHP Type Juggling in Array Summation

This example demonstrates a common issue in PHP: type juggling when performing calculations on arrays with mixed data types.  The `calculateSum` function aims to sum numbers in an array but doesn't explicitly handle type checking.  This leads to unexpected behavior when the array contains non-numeric values or strings representing numbers.

The solution involves strict type checking and handling of potential errors.