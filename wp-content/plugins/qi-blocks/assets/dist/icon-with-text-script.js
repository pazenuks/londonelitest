!function(){"use strict";document.addEventListener("DOMContentLoaded",(function(){t.init()}));const t={init:function(e){this.holder=document.querySelectorAll(".qi-block-icon-with-text"),this.holder.length&&[...this.holder].map((o=>{t.initItem(o,e)}))},getRealCurrentItem:function(t){return"string"==typeof t&&""!==t&&(t=qiBlocksEditor.qodefGetCurrentBlockElement.get(t)),t},initItem:(e,o)=>{if(!(e=t.getRealCurrentItem(e)))return;let i=(a=10,r=400,Math.floor(Math.random()*(r-a)+a)),n=void 0!==e.getAttribute("data-appear-delay")&&null!==e.getAttribute("data-appear-delay")?e.getAttribute("data-appear-delay"):"";var a,r;const d="object"!=typeof qiBlocksEditor?qiBlocks:qiBlocksEditor;o&&e.classList.remove("qodef--appeared"),n=n?"random"===n?i:n:0,d.qodefIsInViewport.check(e,(()=>{e.classList.contains("qodef--appeared")||setTimeout((function(){e.classList.add("qodef--appeared")}),n)}))}}}();