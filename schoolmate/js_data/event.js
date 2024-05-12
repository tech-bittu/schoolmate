const header = document.getElementById('header')
const title = document.getElementById('title')
const excerpt = document.getElementById('excerpt')
const profile_img = document.getElementById('profile-img')
const author_name = document.getElementById('name')
const date = document.getElementById('date')

const animated_bgs = document.querySelectorAll('.animated-bg')
const animated_bg_texts = document.querySelectorAll('.animated-bg-text')

setTimeout(getdata, 2500);

function getdata() {
    header.innerHTML = '<img src="./image/about/2018-07-28_1421.png" alt="couple goal" />'
    title.innerHTML = 'Lorem ipsum'
    excerpt.innerHTML = ' Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellendus, culpa'
    profile_img.innerHTML = ' <img src="image/15.jpg" alt="John doe" />'
    author_name.innerHTML = 'John doe'
    date.innerHTML = 'Oct 8 2022'

    animated_bgs.forEach(bg => bg.classList.remove('animated-bg'))
    animated_bg_texts.forEach(bg => bg.classList.remove('animated-bg-text'))
}