const navSmall = document.getElementById('navSmall')
const btnTrigger = document.getElementById('btnTrigger')

btnTrigger.addEventListener('click', ()=>{
    navSmall.classList.toggle('hidden')
    navSmall.classList.toggle('flex')
})
