console.log("hello prabha");
let element=document.querySelectorAll('.navbar ul li');
for(let ele of element)
{
    console.log(ele.innerText);
  ele.addEventListener("click",function()
  {
    
    console.log('thisis');
    console.log(ele.innerText);
    ele.style.color="blue";
  })
}
