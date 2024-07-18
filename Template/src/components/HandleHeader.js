export default function HandleHeader () {
  const menuDropdown = document.querySelector('.menuDropdown');
  const btnMenuDropdown = document.querySelector('.btnMenuDropdown');

  const btnMenuRespon = document.querySelector('.btnMenuRespon');

  btnMenuDropdown.addEventListener('click', () => {
    menuDropdown.classList.toggle('toggleBtnMenuDropdown')
  })
}