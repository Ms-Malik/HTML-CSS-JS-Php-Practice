function average()
{
    num = document.myform.num.value;
    num = parseInt(num);
    numbers= document.secondform.numbers.value;
    var b=numbers.split(',').map(function(item){
        return(parseInt,num);
    });
    const toNumbers = arr => arr.map(numbers);
    let sum=0;
    for(let i=0;i<=toNumbers.length;i++)
    {
        sum+=parseInt(toNumbers[i],10);
    }
    let avg=sum/num;
    alert("avg is: "+avg);
}