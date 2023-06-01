const modal = document.querySelector('.modal-container')
const tbody = document.querySelector('tbody')
const sProduto = document.querySelector('#m-produto')
const sEstado = document.querySelector('#m-estado')
const sPreço = document.querySelector('#m-valor')
const btnSalvar = document.querySelector('#btnSalvar')
const btnCancelar = document.querySelector('#btnCancelar')

let itens
let id

function openModal(edit = false, index = 0) {
  modal.classList.add('active')

  modal.onclick = e => {
    if (e.target.className.indexOf('modal-container') !== -1) {
      modal.classList.remove('active')
    }
  }

  if (edit) {
    sProduto.value = itens[index].produto
    sEstado.value = itens[index].estado
    sPreço.value = itens[index].valor
    id = index
  } else {
    sProduto.value = ''
    sEstado.value = ''
    sPreço.value = ''
  }
  
}

function editItem(index) {

  openModal(true, index)
}

function deleteItem(index) {
  itens.splice(index, 1)
  setItensBD()
  loadItens()
}

function insertItem(item, index) {
  let tr = document.createElement('tr')

  tr.innerHTML = `
    <td>${item.produto}</td>
    <td>${item.estado}</td>
    <td>R$ ${item.valor}</td>
    <td class="acao">
      <button onclick="editItem(${index})"><i class='bx bx-edit' ></i></button>
    </td>
    <td class="acao">
      <button onclick="deleteItem(${index})"><i class='bx bx-trash'></i></button>
    </td>
  `
  tbody.appendChild(tr)
}

btnSalvar.onclick = e => {
  
  if (sProduto.value == '' || sEstado.value == '' || sPreço.value == '') {
    return
  }

  e.preventDefault();

  if (id !== undefined) {
    itens[id].produto = sProduto.value
    itens[id].estado = sEstado.value
    itens[id].valor = sPreço.value
  } else {
    itens.push({'produto': sProduto.value, 'estado': sEstado.value, 'valor': sPreço.value})
  }

  setItensBD()

  modal.classList.remove('active')
  loadItens()
  id = undefined
}

function loadItens() {
  itens = getItensBD()
  tbody.innerHTML = ''
  itens.forEach((item, index) => {
    insertItem(item, index)
  })

}

const getItensBD = () => JSON.parse(localStorage.getItem('dbfunc')) ?? []
const setItensBD = () => localStorage.setItem('dbfunc', JSON.stringify(itens))

loadItens()