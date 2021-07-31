// tim takes a loan of 300,000 at a fixed rate of 5%.
// the loan is to be prepaid in 30years.
// a)calculate monthy payment 

// formula: m_payment = (p * (r *Math.pow(1+r,n))) / (Math.pow(1+r,n)-1)  
var p =300000
var r =0.05/12
n = 12 *30
m_payment = (p*(r *Math.pow(1+r,n)))/(Math.pow(1+r,n)-1)
console.log(m_payment)