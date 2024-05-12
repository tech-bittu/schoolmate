const liAnchor = document.querySelectorAll('anc anc');
liAnchor.forEach((anc)=>{
    anc.classList.remove("active");
    anc.addEventListener("click",(e)=>{
        e.preventDefault();
      anc.classList.add("active");
      anc.setAttribute('aria-current',"page");
      console.log(anc,anc.setAttribute('aria-current',"page"));
    })
})