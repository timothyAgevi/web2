// The first credit card that you got charges 12.49 % interest to 
// its customers and compounds that interest monthly. Within one 
// day of getting your first credit card, you max out the credit 
// limit by spending $1,200.00 . If you do not buy anything else on 
// the card and you do not make any payments, how much money would 
// you owe the company after 6 months? 

var r = 0.1249
var n = 12
var t = 0.5
var p = 1200
var A = p *Math.pow( 1+ r/n,n*t) 
console.log(A)
// line 13 in HTML would be as below:
// document.write(`the amount is {A}`)