// alert('holaaaa')
// carole
const btnCart = document.querySelector('.container-icon')
const containerCartProducts = document.querySelector('.container-cart-productos')

btnCart.addEventListener('click', () => {
containerCartProducts.classList.toggle('hidden-cart')
});

function contadorCarrito() {
    const contador = document.getElementById('contador-productos');
    let totalProductos = parseInt(contador.innerText);
    totalProductos += 1;
    return contador.innerText = totalProductos;
}

