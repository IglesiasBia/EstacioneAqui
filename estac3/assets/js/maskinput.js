const input = document.querySelector('inputcpf')
infut.addEventListener('keypress',  () => {
    let inputlength = input.value.length

    if(inputlength === 3){
        input.value += "."
    }
})