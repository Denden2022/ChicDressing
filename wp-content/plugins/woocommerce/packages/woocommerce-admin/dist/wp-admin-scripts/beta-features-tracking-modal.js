this.wc=this.wc||{},this.wc.betaFeaturesTrackingModal=function(e){var t={};function n(o){if(t[o])return t[o].exports;var r=t[o]={i:o,l:!1,exports:{}};return e[o].call(r.exports,r,r.exports,n),r.l=!0,r.exports}return n.m=e,n.c=t,n.d=function(e,t,o){n.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:o})},n.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},n.t=function(e,t){if(1&t&&(e=n(e)),8&t)return e;if(4&t&&"object"==typeof e&&e&&e.__esModule)return e;var o=Object.create(null);if(n.r(o),Object.defineProperty(o,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var r in e)n.d(o,r,function(t){return e[t]}.bind(null,r));return o},n.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return n.d(t,"a",t),t},n.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},n.p="",n(n.s=494)}({0:function(e,t){e.exports=window.wp.element},12:function(e,t){e.exports=window.wc.data},123:function(e,t){e.exports=window.wc.explat},14:function(e,t){e.exports=window.wp.compose},17:function(e,t){e.exports=window.wc.tracks},2:function(e,t){e.exports=window.wp.i18n},4:function(e,t){e.exports=window.wp.components},482:function(e,t,n){},494:function(e,t,n){"use strict";n.r(t);var o=n(0),r=n(2),c=n(4),a=n(8),i=n(14),u=n(12),s=n(17),d=n(123);const l=Object(i.compose)(Object(a.withDispatch)(e=>{const{updateOptions:t}=e(u.OPTIONS_STORE_NAME);return{updateOptions:t}}))(e=>{let{updateOptions:t}=e;const[n,a]=Object(o.useState)(!1),[i,u]=Object(o.useState)(!1),l=Object(o.useRef)(document.querySelector("#woocommerce_navigation_enabled")),m=async e=>("function"==typeof window.wcTracks.enable&&(e?window.wcTracks.enable(()=>{Object(d.initializeExPlat)()}):window.wcTracks.isEnabled=!1),e&&Object(s.recordEvent)("settings_features_tracking_enabled"),t({woocommerce_allow_tracking:e?"yes":"no"}));return Object(o.useEffect)(()=>{if(!l.current)return;const e=e=>{e.target.checked&&(e.target.checked=!1,a(!0))},t=l.current;return t.addEventListener("change",e,!1),()=>t.removeEventListener("change",e)},[]),l.current&&n?Object(o.createElement)(c.Modal,{title:Object(r.__)("Build a Better WooCommerce",'woocommerce'),onRequestClose:()=>a(!1),className:"woocommerce-beta-features-tracking-modal"},Object(o.createElement)("p",null,Object(r.__)("Testing new features requires sharing non-sensitive data via ",'woocommerce'),Object(o.createElement)("a",{href:"https://woocommerce.com/usage-tracking?utm_medium=product"},Object(r.__)("usage tracking",'woocommerce')),Object(r.__)(". Gathering usage data allows us to make WooCommerce better — your store will be considered as we evaluate new features, judge the quality of an update, or determine if an improvement makes sense. No personal data is tracked or stored and you can opt-out at any time.",'woocommerce')),Object(o.createElement)("div",{className:"woocommerce-beta-features-tracking-modal__checkbox"},Object(o.createElement)(c.CheckboxControl,{label:"Enable usage tracking",onChange:u,checked:i})),Object(o.createElement)("div",{className:"woocommerce-beta-features-tracking-modal__actions"},Object(o.createElement)(c.Button,{isPrimary:!0,onClick:async()=>{i?(await m(!0),l.current.checked=!0):await m(!1),a(!1)}},Object(r.__)("Save",'woocommerce')))):null});n(482);const m=document.createElement("div");m.setAttribute("id","beta-features-tracking"),Object(o.render)(Object(o.createElement)(l,null),document.body.appendChild(m))},8:function(e,t){e.exports=window.wp.data}});