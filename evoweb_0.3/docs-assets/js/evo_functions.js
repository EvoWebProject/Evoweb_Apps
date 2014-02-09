//fonction js ascenceur
  

var timeOut;
function backtotop() {
  if (document.body.scrollTop!==0 || document.documentElement.scrollTop!==0){
    window.scrollBy(0,-50);
    timeOut=setTimeout('backtotop()',10);
  }
  else clearTimeout(timeOut);
}
