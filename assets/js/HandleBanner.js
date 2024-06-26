export default function HandleBanner () {

  const btnLeft = document.querySelector('.banner--btnLeft')
  const btnRight = document.querySelector('.banner--btnRight')

  btnLeft.addEventListener('click', () => {
    handleClick(-1)
  })

  btnRight.addEventListener('click', () => {
    handleClick(1)
  })

  let index = 0

  const handleClick = (status) => {
    if (status == 1) {
      handleSlider(index > 5 ? index = 0 : index++)
    } else if (status == -1) {
      handleSlider(index--)
    }
  }

  const handleSlider = (index) => {
    console.log(index);
  }

  let currentSlide = 1

  setInterval(() => {
    const banner = document.querySelector('.banner--list');
    const widthImg = currentSlide * banner.offsetWidth;
    const listImg = document.querySelectorAll('.banner--list__item');
    
    banner.style.transform = `translateX(${-widthImg}px)`;
      if (currentSlide >= listImg.length - 1) {
        currentSlide = 0;
      } else {
        currentSlide++
      }

  }, 5000)
}