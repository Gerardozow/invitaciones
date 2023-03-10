// Funciones para leer codigos.
const codeReader = new ZXing.BrowserQRCodeReader();
const videoInput = document.getElementById('video');
const videoConfig = { facingMode: 'environment' };


function startScanner() {
    codeReader.decodeFromVideoDevice(undefined, 'video', (result, err) => {
        if (result) {
            console.log(result)
            document.f1.valor.value = result.text
            document.f1.valor2.value = result.text
            codeReader.reset()
        }
        if (err && !(err instanceof ZXing.NotFoundException)) {
            console.error(err)
        }
    })
}

function stopScanner() {
    codeReader.reset()
    document.f1.valor.value = '';
    document.f1.valor2.value = '';
    console.log('Reset.')
}

const startButton = document.getElementById('start-btn');
startButton.addEventListener('click', () => {
    startScanner();
});

const stopButton = document.getElementById('stop-btn');
stopButton.addEventListener('click', () => {
    stopScanner();
});
// .Funciones para leer codigos.
