const navSmall = document.getElementById('navSmall')
const btnTrigger = document.getElementById('btnTrigger')

const sessionAlert = document.querySelectorAll('.sessionAlert')
const parentElement = document.getElementById('parentElement')

btnTrigger.addEventListener('click', ()=>{
    navSmall.classList.toggle('hidden')
    navSmall.classList.toggle('flex')
})

sessionAlert.length && parentElement ? sessionAlert.forEach(i=> {
    setTimeout(() => {
        parentElement.removeChild(i)
    }, 1400);
}) : ''