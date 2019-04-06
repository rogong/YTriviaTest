var divideWithoutDivisionOperator = function(dividend, divisor) {
    // Handle 0 divisor
    if (divisor === 0) {
      return NaN;
    }
  
    // Handle negative numbers
    var isNegative = false;
    if (dividend < 0) {
      // Change sign
      dividend = ~dividend + 1;
      isNegative = !isNegative;
    }
  
    if (divisor < 0) {
      // Change sign
      divisor = ~divisor + 1;
      isNegative = !isNegative;
    }
  
    /**
     * Main algorithm
     */
  
    var result = 1;
    var denominator = divisor;
    // Double denominator value with bitwise shift until bigger than dividend
    while (dividend > denominator) {
      denominator <<= 1;
      result <<= 1;
    }
  
    // Subtract divisor value until denominator is smaller than dividend
    while (denominator > dividend) {
      denominator -= divisor;
      result -= 1;
    }
  
    // If one of dividend or divisor was negative, change sign of result
    if (isNegative) {
      result = ~result + 1;
    }
    
  
    return result;
  };
  
  console.log(divideWithoutDivisionOperator(-6, -5)); 
  