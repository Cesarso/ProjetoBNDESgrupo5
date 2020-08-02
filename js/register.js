document.getElementById('addCategory').onclick = function () {
  let textCategory = document.getElementById('inputAddCategory').value;
  let optionTag = '<option>' + textCategory + '</option>';
  let listCategory = document
    .querySelector('.listCategory')
    .insertAdjacentHTML('beforeend', optionTag);
  document.getElementById('inputAddCategory').value = '';
};

document.getElementById('addSubCategory').onclick = function () {
  let textCategory = document.getElementById('inputAddSubCategory').value;
  let optionTag = '<option>' + textCategory + '</option>';
  let listSubCategory = document
    .querySelector('.listSubCategory')
    .insertAdjacentHTML('beforeend', optionTag);
  document.getElementById('inputAddSubCategory').value = '';
};

/* Função que acrescenta um valor a lista ao clique do botão, para que
o vendedor possa inserir quantas categorias quiser */
