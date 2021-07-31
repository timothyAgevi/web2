// WRITE A PROGRAM THAT CONVERTS FAHREINHEIT DEGREES BETWEEN
// 0 AND 100 TO DEGREES CELCIUS USING THE FORMULA:

// C=5/9(F-32)


var f,c
for(f=0;f <100;f+=10){
    
    c= 5/9 * (f-32)
    console.log( `FAHRENHEIT(F) \t Celcius`)
    console.log(f  ,  c )
}

// equivalent html synt
{/* <html>
<head>
<title>Javascript</title>
</head>

<body>
<script type="text/javascript">
var f,c;
document.write("Fahrenheit         Celcius<br>")
for(f=0;f<=100;f=f+10)
 {
  c=5/9*(f-32);
  document.write(f);
  document.write("-------"+c+"<br>");

 }

</script>

</body>

</html> */}
