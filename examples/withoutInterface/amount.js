// An amount of $1,500.00 is deposited in a bank paying an annual 
// interest rate of 4.3%, 
// compounded quarterly. What is the balance after 6 year


var p = 1500.00
var r = 4.3/100
var n= 4
var t= 6
var A=p *Math.pow(1 +r/n,n *t)
console.log(A)