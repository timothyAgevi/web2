// You win the lottery and get $1,000,000. You decide that you 
// want to invest all of the money in a savings account. 
// However, your bank has two different plans. In 5 years from now, 
// which plan will provide you with more money.

// Plan 1: 	
// The bank gives you a 6% interest rate and compounds the interest 
// each month.
var a,p,r,n;
p=1,000,000
r = 5
n =12
a= p * (Math.pow(1+r,n))
console.log(a)


// Plan 2: 
// The bank gives you a 12% interest rate and compounds the interest 
// every 2 months.
var n1,a1,r1;
n1= 6
r1 = 0.12
a1 =p * (Math.pow(1+r1,n1))
console.log(a1)

if(a>a1)
 {
  console.log("Bank giving 6% interest compounded"); 
  console.log(" each month is the best plan: Kshs. "+a+"<br>");

 }
else
{
  console.log("Bank giving 12% interest compounded"); 
  console.log(" every 2 months is the best plan: Kshs. "+a1+"<br>");

 }