(window.webpackWcBlocksJsonp=window.webpackWcBlocksJsonp||[]).push([[31],{250:function(e,t,n){"use strict";n.d(t,"b",(function(){return s})),n.d(t,"a",(function(){return a}));var o=n(28),c=n(185);const r=function(){let e=arguments.length>0&&void 0!==arguments[0]&&arguments[0];const{paymentMethods:t,expressPaymentMethods:n,paymentMethodsInitialized:r,expressPaymentMethodsInitialized:s}=Object(c.b)(),a=Object(o.a)(t),i=Object(o.a)(n);return{paymentMethods:e?i:a,isInitialized:e?s:r}},s=()=>r(!1),a=()=>r(!0)},366:function(e,t){},367:function(e,t,n){"use strict";n.d(t,"a",(function(){return a}));var o=n(1),c=n(35),r=n(185),s=n(250);const a=()=>{const{onSubmit:e,isCalculating:t,isBeforeProcessing:n,isProcessing:a,isAfterProcessing:i,isComplete:d,hasError:u}=Object(c.b)(),{paymentMethods:b={}}=Object(s.b)(),{activePaymentMethod:l,currentStatus:g}=Object(r.b)(),m=b[l]||{},p=a||i||n,h=d&&!u;return{submitButtonText:(null==m?void 0:m.placeOrderButtonLabel)||Object(o.__)("Place Order",'woocommerce'),onSubmit:e,isCalculating:t,isDisabled:a||g.isDoingExpressPayment,waitingForProcessing:p,waitingForRedirect:h}}},423:function(e,t,n){"use strict";n.r(t);var o=n(0),c=n(1),r=n(4),s=n.n(r),a=n(12),i=n(367),d=n(13),u=n(47);const b=u.j?`<a href="${u.j}">${Object(c.__)("Terms and Conditions",'woocommerce')}</a>`:Object(c.__)("Terms and Conditions",'woocommerce'),l=u.f?`<a href="${u.f}">${Object(c.__)("Privacy Policy",'woocommerce')}</a>`:Object(c.__)("Privacy Policy",'woocommerce'),g=Object(c.sprintf)(
/* translators: %1$s terms page link, %2$s privacy page link. */
Object(c.__)("By proceeding with your purchase you agree to our %1$s and %2$s",'woocommerce'),b,l),m=Object(c.sprintf)(
/* translators: %1$s terms page link, %2$s privacy page link. */
Object(c.__)("You must accept our %1$s and %2$s to continue with your purchase.",'woocommerce'),b,l);n(366),t.default=Object(d.withInstanceId)(e=>{let{text:t,checkbox:n,instanceId:r,validation:d,className:u}=e;const[b,l]=Object(o.useState)(!1),{isDisabled:p}=Object(i.a)(),h="terms-and-conditions-"+r,{getValidationError:j,setValidationErrors:O,clearValidationError:_}=d,w=j(h)||{},f=w.message&&!w.hidden;return Object(o.useEffect)(()=>{if(n)return b?_(h):O({[h]:{message:Object(c.__)("Please read and accept the terms and conditions.",'woocommerce'),hidden:!0}}),()=>{_(h)}},[n,b,h,_,O]),Object(o.createElement)("div",{className:s()("wc-block-checkout__terms",{"wc-block-checkout__terms--disabled":p},u)},n?Object(o.createElement)(o.Fragment,null,Object(o.createElement)(a.CheckboxControl,{id:"terms-and-conditions",checked:b,onChange:()=>l(e=>!e),hasError:f,disabled:p},Object(o.createElement)("span",{dangerouslySetInnerHTML:{__html:t||m}}))):Object(o.createElement)("span",{dangerouslySetInnerHTML:{__html:t||g}}))})}}]);