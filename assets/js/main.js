// Funciones para leer codigos.
const codeReader = new ZXing.BrowserQRCodeReader();
const videoInput = document.getElementById('video');
const videoConfig = { facingMode: 'environment' };


function startScanner() {
    codeReader.decodeFromVideoDevice(undefined, 'video', (result, err) => {
        if (result) {
            console.log(result)
            document.getElementById('result').textContent = result.text
            codeReader.reset()
        }
        if (err && !(err instanceof ZXing.NotFoundException)) {
            console.error(err)
            document.getElementById('result').textContent = err
        }
    })
}

function stopScanner() {
    codeReader.reset()
    document.getElementById('result').textContent = '';
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
