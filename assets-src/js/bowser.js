// chrome
if (bowser.chrome) {
    document.getElementsByTagName('body')[0].className+=' chrome'
}

// safari
else if (bowser.safari) {
    document.getElementsByTagName('body')[0].className+=' safari'
}

// // ios
// else if (bowser.ios) {
//     document.getElementsByTagName('body')[0].className+=' ios'
// }

// firefox
else if (bowser.firefox) {
    document.getElementsByTagName('body')[0].className+=' firefox'
}

// msedge
else if (bowser.msedge) {
    document.getElementsByTagName('body')[0].className+=' msedge'
}

// msie
else if (bowser.msie) {
    document.getElementsByTagName('body')[0].className+=' msie'
}

// unknown
else {
    document.getElementsByTagName('body')[0].className+=' unknown'
}





// var ios = /iphone|ipod|ipad/.test( userAgent );

// if( ios ) {
//     document.getElementsByTagName('body')[0].className+=' ios'
// };

