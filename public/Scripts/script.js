const navSmall = document.getElementById('navSmall')
const btnTrigger = document.getElementById('btnTrigger')

const sessionAlert = document.querySelectorAll('.sessionAlert')
const parentElement = document.getElementById('parentElement')

const price = (document.querySelectorAll('#price'));
const priceTotal = (document.getElementById('totalPrice'));
price ? (
    price.forEach(i=> {
        const newPrice = parseFloat(i.textContent)
        i.innerHTML = (newPrice.toLocaleString('id-ID', {style:'currency', currency: 'IDR'})) + '/day'
    })
) : '';
console.log(priceTotal.textContent)
priceTotal ? (
    priceTotal.innerHTML = 'Total: ' + parseFloat(priceTotal.textContent).toLocaleString('id-ID', {style:'currency', currency: 'IDR'})
) : ''

btnTrigger.addEventListener('click', ()=>{
    navSmall.classList.toggle('hidden')
    navSmall.classList.toggle('flex')
})

console.log('cek: ', sessionAlert)
sessionAlert.length && parentElement ? sessionAlert.forEach(i=> {
    setTimeout(() => {
        parentElement.removeChild(i)
    }, 1400);
}) : ''