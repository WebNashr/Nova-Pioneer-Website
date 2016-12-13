// chrome
if (bowser.chrome) {
    document.getElementsByTagName('body')[0].className+=' chrome'
}

// safari
else if (bowser.safari) {
    document.getElementsByTagName('body')[0].className+=' safari'
}

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