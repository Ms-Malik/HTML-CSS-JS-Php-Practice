function PrimeNum()
    {
        num = document.myform.num.value;
        num = parseInt(num);
        let flag=true;
        for(let i=2;i<num;i++)
        {
             if(num%i===0)
             {
                 flag=false;
                 break;
             }
         }
        if(flag===true)
        {
            alert(num+" is a prime number.");
         }
         else
        {
            alert(num+" is not a prime number.");
        }
    }