//设置首图永远沾满整个屏幕
let viewportWidths = window.innerWidth;
let viewportHeights = window.innerHeight;
console.log("Viewport width: " + viewportWidths);
console.log("Viewport height: " + viewportHeights);
const bgBoxs = document.querySelector('.backgroudimg')
bgBoxs.style.height = viewportHeights + 'px'
bgBoxs.style.width = viewportWidths; +'px'
bgBoxs.style.padding = '0px';
window.onresize = function (event) {
  let viewportWidth = window.innerWidth;
  let viewportHeight = window.innerHeight;
  console.log("Viewport width: " + viewportWidth);
  console.log("Viewport height: " + viewportHeight);
  const bgBox = document.querySelector('.backgroudimg')
  bgBox.style.height = viewportHeight + 'px'
  bgBox.style.width = viewportWidth; +'px'
  bgBox.style.padding = '0px';
};
// 网页元素整体添加动画效果
const elements = document.querySelectorAll('.pop-up-text');
for (let i = 0; i < elements.length; i++) {
  const element = elements[i];
  element.style.animation = 'slide-up 0.8s ease forwards';
}
// js数字动画效果
let elementNumBox01 = document.getElementById("value1");
let elementNumBox02 = document.getElementById("value2");
let elementNumBox03 = document.getElementById("value3");
function animateValue(start, end, duration, element) {
  let startTime = null;
  // const elementNumBox01 = document.getElementById("value");
  function step(timestamp) {
    if (!startTime) {
      startTime = timestamp;
    }
    const progress = Math.min((timestamp - startTime) / duration, 1);
    const current = Math.floor(progress * (end - start) + start).toLocaleString();
    element.textContent = current;
    if (progress < 1) {
      window.requestAnimationFrame(step);
    }
  }
  window.requestAnimationFrame(step);
}

function startAnimation() {
  animateValue(0, 12500, 1500, elementNumBox01);
  animateValue(0, 115.83, 1500, elementNumBox02);
  animateValue(0, 12, 1500, elementNumBox03);
}
// 页面快加载完成执行
document.addEventListener("DOMContentLoaded", function () {
  // 在这里编写需要执行的JavaScript代码
  startAnimation()
});
// 监听页面中的元素是否进入可视界面,添加动画效果
const items = document.querySelectorAll('.seletor-box');
const obs = new IntersectionObserver((entries, obs) => {
  entries.forEach(entry => {
    // 判断目标元素是否进入视口
    if (entry.intersectionRatio > 0 && !entry.target.hasAttribute('data-played')) {
      console.log('Target element is intersecting!');
      // 给目标元素添加动画效果
      entry.target.style.animation = 'slide-up 1s ease forwards';
      //   entry.target.classList.add('pop-up-text');
      // 给目标元素添加标记，避免重复播放动画
      entry.target.setAttribute('data-played', true);
    }
  });
});
items.forEach(item => {
  obs.observe(item); // 监听元素
});