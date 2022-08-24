const btnPartida = document.getElementById('btnPartida');
const btnFF = document.getElementById('btnFF');
const btnPrograma = document.getElementById('btnPrograma');
const btnUnidadA = document.getElementById('btnUnidadA');
const btnProvedor = document.getElementById('btnProvedor');
const btnProducto = document.getElementById('btnProducto');
const btnUnidad = document.getElementById('btnUnidad');
const btnCategoria = document.getElementById('btnCategoria');

const modal_container_Partida = document.getElementById('modal_container_Partida');
const modal_container_FF = document.getElementById('modal_container_FF');
const modal_container_Programa = document.getElementById('modal_container_Programa');
const modal_container_UnidadA = document.getElementById('modal_container_UnidadA');
const modal_container_Provedor = document.getElementById('modal_container_Provedor');
const modal_container_Producto = document.getElementById('modal_container_Producto');
const modal_container_Unidad = document.getElementById('modal_container_Unidad');
const modal_container_Categoria = document.getElementById('modal_container_Categoria');

const btnPartidaClose = document.getElementById('btnPartidaClose');
const btnFFClose = document.getElementById('btnFFClose');
const btnProgramaClose = document.getElementById('btnProgramaClose');
const btnUnidadAClose = document.getElementById('btnUnidadAClose');
const btnProvedorClose = document.getElementById('btnProvedorClose');
const btnProductoClose = document.getElementById('btnProductoClose');
const btnUnidadClose = document.getElementById('btnUnidadClose');
const btnCategoriaClose = document.getElementById('btnCategoriaClose');

btnPartida.addEventListener('click',()=>{
  modal_container_Partida.classList.add('show')
});

btnPartidaClose.addEventListener('click',()=>{
  modal_container_Partida.classList.remove('show')
});

btnFF.addEventListener('click',()=>{
  modal_container_FF.classList.add('show')
})

btnFFClose.addEventListener('click',()=>{
  modal_container_FF.classList.remove('show')
});

btnPrograma.addEventListener('click',()=>{
  modal_container_Programa.classList.add('show')
})

btnProgramaClose.addEventListener('click',()=>{
  modal_container_Programa.classList.remove('show')
});

btnUnidadA.addEventListener('click',()=>{
  modal_container_UnidadA.classList.add('show')
});

btnUnidadAClose.addEventListener('click',()=>{
  modal_container_UnidadA.classList.remove('show')
});

btnProvedor.addEventListener('click',()=>{
  modal_container_Provedor.classList.add('show')
});

btnProvedorClose.addEventListener('click',()=>{
  modal_container_Provedor.classList.remove('show')
});

btnProducto.addEventListener('click',()=>{
  modal_container_Producto.classList.add('show')
});

btnProductoClose.addEventListener('click',()=>{
  modal_container_Producto.classList.remove('show')
});

btnUnidad.addEventListener('click',()=>{
  modal_container_Unidad.classList.add('show')
});

btnUnidadClose.addEventListener('click',()=>{
  modal_container_Unidad.classList.remove('show')
});

btnCategoria.addEventListener('click',()=>{
  modal_container_Categoria.classList.add('show')
});

btnCategoriaClose.addEventListener('click',()=>{
  modal_container_Categoria.classList.remove('show')
});
