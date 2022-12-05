!function(){"use strict";document.addEventListener("DOMContentLoaded",(function(){t.init()}));const t={init:function(){this.holder=document.querySelectorAll(".qi-block-progress-bar-vertical"),this.holder.length&&[...this.holder].map((e=>{t.initItem(e)}))},getRealCurrentItem:function(t){return"string"==typeof t&&""!==t&&(t=qiBlocksEditor.qodefGetCurrentBlockElement.get(t)),t},initItem:function(e,r){if(!(e=t.getRealCurrentItem(e)))return;const i="object"!=typeof qiBlocksEditor?qiBlocks:qiBlocksEditor;r&&e.classList.remove("qodef--init"),i.qodefIsInViewport.check(e,(()=>{e.classList.contains("qodef--init")||t.initVerticalBar(e,r)}))},generateBarData:function(t){const e=t.getAttribute("data-bar-height"),r=parseInt(t.getAttribute("data-active-line-width"),10),i=t.getAttribute("data-active-line-color"),a=parseInt(t.getAttribute("data-inactive-line-width"),10),n=t.getAttribute("data-inactive-line-color"),o=t.getAttribute("data-duration")&&!isNaN(t.getAttribute("data-duration"))?parseInt(t.getAttribute("data-duration"),10):1200,s=t.getAttribute("data-percentage-type");let d={strokeWidth:100*r/e,trailWidth:100*a/e,svgStyle:{display:"block",height:e+"px",transform:"scaleY(-1)"},easing:"linear",duration:o,step:function(e,r){const i=Math.round(100*r.value());t.querySelector(".qodef-m-value").innerHTML=i+'<span class="qodef-m-percentage">%</span>',"floating-top"===s&&(t.querySelector(".qodef-m-value").style.bottom=i+"%",t.querySelector(".qodef-m-title").style.bottom=i+"%")}};return i&&(d.color=i,d.to={color:i}),n&&(d.trailColor=n,d.from={color:n}),d},initVerticalBar:function(e,r){const i=e.querySelector(".qodef-m-canvas"),a=t.generateBarData(e),n=parseInt(e.getAttribute("data-number"),10)/100;r&&(i.innerHTML="",e.classList.contains("qodef-percentage--floating-top")&&(e.querySelector(".qodef-m-inner").style.width=""));const o=new ProgressBar.Line(i,a);"yes"===e.getAttribute("data-gradient-fill")&&t.generateGradient(e);const s=e.querySelector(".qodef-m-canvas svg"),d=e.querySelector(".qodef-m-canvas svg path:first-of-type"),c=e.querySelector(".qodef-m-canvas svg path:last-of-type"),l=c.getAttribute("stroke-width");s.setAttribute("viewBox","0 0 "+l+" 100"),d.setAttribute("d","M "+l/2+",0 L "+l/2+",100"),c.setAttribute("d","M "+l/2+",0 L "+l/2+",100");const u=e.getAttribute("data-pattern");u&&(s.style.backgroundImage='url("'+u+'")'),e.classList.contains("qodef-percentage--floating-top")&&(e.querySelector(".qodef-m-inner").style.width=parseInt(s.clientWidth,10)+"px"),e.classList.add("qodef--init"),o.animate(n)},generateGradient:function(t){const e="http://www.w3.org/2000/svg",r=document.createElementNS(e,"defs"),i=document.createElementNS(e,"linearGradient"),a=[{color:t.getAttribute("data-gradient-start"),offset:"0%"},{color:t.getAttribute("data-gradient-end"),offset:"100%"}];for(let t=0,r=a.length;t<r;t++){let r=document.createElementNS(e,"stop");r.setAttribute("offset",a[t].offset),r.setAttribute("stop-color",a[t].color),i.appendChild(r)}i.id="Gradient-"+t.getAttribute("data-rand-id"),i.setAttribute("gradientUnits","userSpaceOnUse"),i.setAttribute("x1","0"),i.setAttribute("x2","0"),i.setAttribute("y1","0"),i.setAttribute("y2",t.getAttribute("data-number")+"%"),r.appendChild(i),t.querySelector(".qodef-m-canvas svg").appendChild(r),t.querySelector(".qodef-m-canvas svg path:nth-child(2)").setAttribute("stroke","url(#Gradient-"+t.getAttribute("data-rand-id")+")")}}}();