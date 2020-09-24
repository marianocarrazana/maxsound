!function(t,e){"object"==typeof exports&&"object"==typeof module?module.exports=e():"function"==typeof define&&define.amd?define([],e):"object"==typeof exports?exports.Smarquee=e():t.Smarquee=e()}(window,function(){return function(t){var e={};function n(i){if(e[i])return e[i].exports;var a=e[i]={i:i,l:!1,exports:{}};return t[i].call(a.exports,a,a.exports,n),a.l=!0,a.exports}return n.m=t,n.c=e,n.d=function(t,e,i){n.o(t,e)||Object.defineProperty(t,e,{enumerable:!0,get:i})},n.r=function(t){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(t,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(t,"__esModule",{value:!0})},n.t=function(t,e){if(1&e&&(t=n(t)),8&e)return t;if(4&e&&"object"==typeof t&&t&&t.__esModule)return t;var i=Object.create(null);if(n.r(i),Object.defineProperty(i,"default",{enumerable:!0,value:t}),2&e&&"string"!=typeof t)for(var a in t)n.d(i,a,function(e){return t[e]}.bind(null,a));return i},n.n=function(t){var e=t&&t.__esModule?function(){return t.default}:function(){return t};return n.d(e,"a",e),e},n.o=function(t,e){return Object.prototype.hasOwnProperty.call(t,e)},n.p="",n(n.s=0)}([function(t,e,n){"use strict";function i(t,e){t.style.setProperty("--playState",e)}n.r(e),n.d(e,"default",function(){return a});class a{constructor(t={}){var e,n;this.defaults={selector:"#smarquee",element:null,velocity:50,styleOptions:{scrollingTitleMargin:24,animationName:"marquee",timingFunction:"linear",iterationCount:"infinite",pausePercent:30,fillMode:"none",playState:"running",delay:"0s"},onAnimationStart(){},onAnimationIterate(){},onAnimationEnd(){},onAnimationCancel(){},onClick(){}},this.animationCalculations={distance:0,animatedDistance:0,time:0},this.id=null,this.marqueeContainer=null,this.scrollWrapper=null,this.originalMarqueeContent="",this.styleBlock=null,this.id=String.fromCharCode(65+Math.floor(26*Math.random()))+Math.random().toString(36).substring(2,15),this.assignSettings(t),this.setupMarqueeContainer(),this.styleBlock=function(t,e){var n=document.createElement("style");return n.id=e,n.appendChild(document.createTextNode(t)),document.head.appendChild(n),document.head.querySelector(`#${e}`)}((e=this.id,n=this.settings.styleOptions,`\n  ${function(t,e){return`.Smarquee--${t} {\n    --time: 15s;\n    --distance: 0;\n    --timingFunction: ${e.timingFunction};\n    --iterationCount: ${e.iterationCount};\n    --fillMode: ${e.fillMode};\n    --playState: ${e.playState};\n    --delay: ${e.delay};\n    overflow: hidden;\n    white-space: nowrap;\n  }`}(e,n)}\n\n  ${function(t,e){return`.Smarquee--${t} [data-smarquee-scroll-title] {\n    margin-left: ${e.scrollingTitleMargin}px;\n  }`}(e,n)}\n  \n  ${function(t,e){return`.Smarquee--${t} .animate {\n    animation-name: ${e.animationName};\n    animation-duration: var(--time);\n    animation-delay: var(--delay);\n    animation-timing-function: var(--timingFunction);\n    animation-iteration-count: var(--iterationCount);\n    animation-direction: forwards;\n    animation-fill-mode: var(--fillMode);\n    animation-play-state: var(--playState);\n  }`}(e,n)}\n  \n  ${function(t){return`@keyframes ${t.animationName} {\n    0% {\n      transform: translate3d(0px, 0, 0);\n    }\n    ${100-t.pausePercent}% {\n      transform: translate3d(var(--distance), 0, 0);\n    }\n    100% {\n      transform: translate3d(var(--distance), 0, 0);\n    }`}(n)}\n  `),this.id)}get needsMarquee(){return this.marqueeContainer.scrollWidth>=this.marqueeContainer.clientWidth}assignSettings(t){this.settings=Object.assign({},this.defaults,t),this.settings.styleOptions=Object.assign({},this.defaults.styleOptions,t.hasOwnProperty("styleOptions")?t.styleOptions:{})}setupMarqueeContainer(){this.settings.element?this.marqueeContainer=this.settings.element:this.marqueeContainer=document.querySelector(this.settings.selector),this.marqueeContainer.classList.add("Smarquee",`Smarquee--${this.id}`),this.originalMarqueeContent=this.marqueeContainer.innerHTML}init(t=!0){!1!==this.needsMarquee&&(this.createScrollTitle(),this.setupEventListeners(),this.calculateAnimationProperties(),this.setAnimationProperties(),t&&this.activate())}createScrollTitle(){var t,e,n;this.scrollWrapper=(t=this.originalMarqueeContent,e=this.marqueeContainer,n=`<div data-smarquee-scroll-wrapper>${t}<span data-smarquee-scroll-title>${t}</span></div>`,e.innerHTML=n,e.querySelector("[data-smarquee-scroll-wrapper]"))}setupEventListeners(){this.scrollWrapper.addEventListener("animationstart",this.settings.onAnimationStart),this.scrollWrapper.addEventListener("animationiteration",this.settings.onAnimationIterate),this.scrollWrapper.addEventListener("animationend",this.settings.onAnimationEnd),this.scrollWrapper.addEventListener("animationcancel",this.settings.onAnimationCancel),this.scrollWrapper.addEventListener("click",this.settings.onClick)}calculateAnimationProperties(){this.animationCalculations=function(t,e,n=0){return{distance:t,animatedDistance:t/2+n/2,time:t/e}}(this.marqueeContainer.scrollWidth,this.settings.velocity,this.settings.styleOptions.scrollingTitleMargin)}setAnimationProperties(){var t,e,n;t=this.marqueeContainer,e=this.animationCalculations.time,n=this.animationCalculations.animatedDistance,t.style.setProperty("--time",`${e}s`),t.style.setProperty("--distance",`-${n}px`)}activate(){this.scrollWrapper.classList.add("animate")}deactivate(){this.scrollWrapper.classList.remove("animate")}restart(){this.deactivate(),setTimeout(()=>{this.activate()},500)}play(){i(this.marqueeContainer,"running")}pause(){i(this.marqueeContainer,"paused")}updateText(t,e=0,n=!0){setTimeout((t,e)=>{this.deactivate(),this.originalMarqueeContent=this.marqueeContainer.innerHTML=t,this.init(e)},e,t,n)}updateIterationCount(t){var e,n;e=this.marqueeContainer,n=isNaN(t)?"infinite":t,e.style.setProperty("--iterationCount",n)}updateFillMode(t){var e,n;e=this.marqueeContainer,n=t,e.style.setProperty("--fillMode",n)}updateDelay(t){var e,n;e=this.marqueeContainer,n=t,e.style.setProperty("--delay",n)}updateTimingFunction(t){var e,n;e=this.marqueeContainer,n=t,e.style.setProperty("--timingFunction",n)}resetStyleProperties(){var t;(t=this.marqueeContainer).style.removeProperty("--playState"),t.style.removeProperty("--iterationCount"),t.style.removeProperty("--fillMode"),t.style.removeProperty("--timingFunction"),t.style.removeProperty("--delay")}deInit(){this.deactivate(),this.marqueeContainer.innerHTML=this.originalMarqueeContent,this.scrollWrapper=null}destroy(){this.deInit(),this.originalMarqueeContent="",this.marqueeContainer=null,this.styleBlock.parentNode.removeChild(this.styleBlock),this.styleBlock=null}}}]).default});
