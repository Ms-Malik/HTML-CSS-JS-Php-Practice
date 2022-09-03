let str;
function factor()
{
    num=document.myform.num.value;
    num=parseInt(num);
    for(let i=0;i<=num;i++)
    {
        if(num%i===0)
        {
            str=' '+str;
        }
    }
    alert(str);
    alert("hello");
}