function NumWord()
{
    let n=document.getElementById("paragraphs").value;
    let m=n.split(" ");
    let count=0;
    for(let i=0;i<=m.length;i++)
    {
        if(m[i].startsWith('"')&&m[i].endsWith('"'))
        {
            count++;
            alert(count);
        }
    }
    return count;
}